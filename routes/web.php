<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deposit;
use App\Models\TradeHistory;
use App\Models\User;
use App\Models\Plan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// Website Pages Route
Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('about', [App\Http\Controllers\PagesController::class, 'showAboutPage'])->name('about');
Route::get('services', [App\Http\Controllers\PagesController::class, 'showServicesPage'])->name('services');
Route::get('contact', [App\Http\Controllers\PagesController::class, 'showContactPage'])->name('contact');
Route::get('faq', [App\Http\Controllers\PagesController::class, 'showFaqPage'])->name('faq');
Route::get('terms-of-services', [App\Http\Controllers\PagesController::class, 'showTermsPage'])->name('terms');
Route::get('privacy-policy', [App\Http\Controllers\PagesController::class, 'showPrivacyPolicyPage'])->name('privacy-policy');

// User Dqashboard Routes
Route::prefix('dashboard')->group(function() {
	Route::get('/', function () {
		$user_id = auth()->user()->id;
		// Get all Deposits
		$total_deposit = Deposit::where(['user_id' => $user_id, 'status' => 'Confirmed'])->sum('amount');
		$pending_deposit = Deposit::where(['user_id' => $user_id, 'status' => 'Pending'])->sum('amount');

		// Get available profit
		$available_profit = auth()->user()->profit;
		$available_profit = $available_profit - $total_deposit;

		// Get total profit
		$total_profit = TradeHistory::where('id', $user_id)->sum('trade_profit');

		// get referal amount
		$referal_total = auth()->user()->referal_bonus;

		// get trading bonus
		$trading_bonus = auth()->user()->trading_bonus;

		// get recent trades
		$trades = TradeHistory::where('user_id', $user_id)->get();

		// get top earners
		$top_earners = User::orderBy('id', 'DESC')->get();

		return view('user.index', [
			'total_deposit' => $total_deposit,
			'pending_deposit' => $pending_deposit,
			'available_profit' => $available_profit,
			'total_profit' => $total_profit,
			'referal_total' => $referal_total,
			'trading_bonus' => $trading_bonus,
			'trades' => $trades,
			'top_earners' => $top_earners,
		]);
	})->middleware(['auth'])->name('dashboard');

	Route::get('/deposit', [App\Http\Controllers\Auth\RegisteredUserController::class, 'showUserDepositPage'])->name('user.deposit');
	Route::get('/withdrawal', [App\Http\Controllers\Auth\RegisteredUserController::class, 'showUserWithdrawalPage'])->name('user.withdrawal');
	Route::get('/plans', [App\Http\Controllers\Auth\RegisteredUserController::class, 'showPlansPage'])->name('user.plans');
	Route::get('/trade-activity', [App\Http\Controllers\Auth\RegisteredUserController::class, 'showTradeActivitiesPage'])->name('user.trade-activity');
	Route::get('/transfer', [App\Http\Controllers\Auth\RegisteredUserController::class, 'showTransferPage'])->name('user.transfer');
	Route::get('/tickets', [App\Http\Controllers\Auth\RegisteredUserController::class, 'showTicketsPage'])->name('user.tickets');
	Route::get('/settings', [App\Http\Controllers\Auth\RegisteredUserController::class, 'showSettingsPage'])->name('user.settings');
	Route::get('/audit-logs', [App\Http\Controllers\Auth\RegisteredUserController::class, 'showAuditLogsPage'])->name('user.audit-logs');
	Route::get('/referals', [App\Http\Controllers\Auth\RegisteredUserController::class, 'showReferalsPage'])->name('user.referals');

	// POST Routes
	Route::post('/deposit/preview', [App\Http\Controllers\DepositController::class, 'create'])->name('user.deposit.preview');
	Route::post('/plan/preview', [App\Http\Controllers\TradeHistoryController::class, 'create'])->name('user.invest.new');
	Route::post('/deposit/complete', [App\Http\Controllers\DepositController::class, 'store'])->name('user.deposit.create');
	Route::post('/trade/complete', [App\Http\Controllers\TradeHistoryController::class, 'store'])->name('user.invest.create');
	Route::post('/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'store'])->name('user.withdrawal.create');
	Route::post('/transfer', [App\Http\Controllers\TransferController::class, 'store'])->name('user.transfer.new');
	Route::post('/tickets', [App\Http\Controllers\TicketController::class, 'store'])->name('user.ticket.new');
});

// Admin Routes
Route::prefix('admin')->group(function() {
	// Admin Login Routes
	Route::get('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
	Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
	
	// Admin Logout Route
	Route::get('logout/', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.logout');

	// Admin Dashboard
	Route::get('/', [App\Http\Controllers\Auth\AdminController::class, 'index'])->name('admin.dashboard');
	Route::get('/customers', [App\Http\Controllers\Auth\AdminController::class, 'showCustomersPage'])->name('admin.customers');
	Route::get('/tickets', [App\Http\Controllers\Auth\AdminController::class, 'showTicketsPage'])->name('admin.tickets');
	Route::get('/promotional-emails', [App\Http\Controllers\Auth\AdminController::class, 'showPromotionalEmailsPage'])->name('admin.promotional-emails');
	Route::get('/messages', [App\Http\Controllers\Auth\AdminController::class, 'showMessagesPage'])->name('admin.messages');
	Route::get('/payment-gateways', [App\Http\Controllers\Auth\AdminController::class, 'showPaymentGatewaysPage'])->name('admin.payment-gateways');
	Route::get('/bank-transfer', [App\Http\Controllers\Auth\AdminController::class, 'showBankTransferPage'])->name('admin.bank-transfer');
	Route::get('/deposit-logs', [App\Http\Controllers\Auth\AdminController::class, 'showDepositLogsPage'])->name('admin.deposit-logs');
	Route::get('/payout-methods', [App\Http\Controllers\Auth\AdminController::class, 'showPayoutMethodsPage'])->name('admin.payout-methods');
	Route::get('/payout-logs', [App\Http\Controllers\Auth\AdminController::class, 'showPayoutsLogPage'])->name('admin.payout-logs');
	Route::get('/open-trades', [App\Http\Controllers\Auth\AdminController::class, 'showOpenTradesPage'])->name('admin.open-trades');
	Route::get('/closed-trades', [App\Http\Controllers\Auth\AdminController::class, 'showClosedTradesPage'])->name('admin.closed-trades');
	Route::get('/plans-settings', [App\Http\Controllers\Auth\AdminController::class, 'showPlansSettingsPage'])->name('admin.plans-settings');
	Route::get('/coupons', [App\Http\Controllers\Auth\AdminController::class, 'showCouponsPage'])->name('admin.coupons');
	Route::get('/transfer-logs', [App\Http\Controllers\Auth\AdminController::class, 'showTransferLogsPage'])->name('admin.transfer-logs');
	Route::get('/referal-earnings', [App\Http\Controllers\Auth\AdminController::class, 'showReferalEarningsPage'])->name('admin.referal-earnings');
	Route::get('/blog-articles', [App\Http\Controllers\Auth\AdminController::class, 'showBlogArticlesPage'])->name('admin.blog-articles');
	Route::get('/blog-categories', [App\Http\Controllers\Auth\AdminController::class, 'showBlogCategoriesPage'])->name('admin.blog-categories');
	Route::get('/settings', [App\Http\Controllers\Auth\AdminController::class, 'showSettingsPage'])->name('admin.settings');
	Route::get('/homepage', [App\Http\Controllers\Auth\AdminController::class, 'showHomepage'])->name('admin.homepage');
	Route::get('/logo-settings', [App\Http\Controllers\Auth\AdminController::class, 'showLogoSettingspage'])->name('admin.logo-settings');
	Route::get('/reviews', [App\Http\Controllers\Auth\AdminController::class, 'showReviewsPage'])->name('admin.reviews');
	Route::get('/services', [App\Http\Controllers\Auth\AdminController::class, 'showServicesPage'])->name('admin.services');
	Route::get('/team', [App\Http\Controllers\Auth\AdminController::class, 'showTeamPage'])->name('admin.team');
	Route::get('/pages', [App\Http\Controllers\Auth\AdminController::class, 'showPagesPage'])->name('admin.pages');
	Route::get('/currency', [App\Http\Controllers\Auth\AdminController::class, 'showCurrencyPage'])->name('admin.currency');
	Route::get('/faqs', [App\Http\Controllers\Auth\AdminController::class, 'showFaqsPage'])->name('admin.faqs');
	Route::get('/terms', [App\Http\Controllers\Auth\AdminController::class, 'showTermsPage'])->name('admin.terms');
	Route::get('/privacy-policy', [App\Http\Controllers\Auth\AdminController::class, 'showPrivacyPolicyPage'])->name('admin.privacy-policy');
	Route::get('/about-us', [App\Http\Controllers\Auth\AdminController::class, 'showAboutPage'])->name('admin.about-us');
	Route::get('/social-links', [App\Http\Controllers\Auth\AdminController::class, 'showSocialLinksPage'])->name('admin.social-links');

	// Edit
	Route::get('/customer/{id}', [App\Http\Controllers\Auth\AdminController::class, 'showCustomersPage'])->name('admin.customers.edit');	
	Route::get('/ticket/{id}', [App\Http\Controllers\Auth\AdminController::class, 'showTicketsPage'])->name('admin.tickets.edit');

	// Admin Post Routes
	Route::post('/payment-gateways', [App\Http\Controllers\DepositMethodController::class, 'store'])->name('deposit-method.create');
	Route::post('/payout-methods', [App\Http\Controllers\WithdrawalMethodController::class, 'store'])->name('payout-method.create');
	Route::post('/plans-settings', [App\Http\Controllers\PlanController::class, 'store'])->name('admin.plan.create');
});
