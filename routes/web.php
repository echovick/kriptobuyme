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

		// get account balance
		$account_balance = auth()->user()->balance;

		// get trading bonus
		$trading_bonus = auth()->user()->trading_bonus;

		// get recent trades
		$trades = TradeHistory::where('user_id', $user_id)->get();

		// get top earners
		$top_earners = User::orderBy('id', 'DESC')->get();

		// Check active investment plans and update user balances
		$active_trades = TradeHistory::where([
			'status' => 'Active',
			'user_id' => $user_id,
		])->get();

		foreach($active_trades as $active_trade){
			$trade_end_date = $active_trade->trade_end_date;

			// get curren date
			$current_date = date('Y-m-d h:m:s');

			if (strtotime($trade_end_date) < strtotime($current_date)) {
				// Completed
				
				// Update trade history, user balance, profit, user referal bonus
				TradeHistory::where('id',$active_trade->id)->update([
					'status' => 'Completed',
				]);
				User::where('id',$user_id)->update([
					'balance' => $active_trade->amount,
					'profit' => $active_trade->trade_profit,
					'trading_bonus' => $active_trade->trade_bonus,
				]);
			}
		}

		return view('user.index', [
			'total_deposit' => $total_deposit,
			'pending_deposit' => $pending_deposit,
			'available_profit' => $available_profit,
			'total_profit' => $total_profit,
			'referal_total' => $referal_total,
			'trading_bonus' => $trading_bonus,
			'trades' => $trades,
			'top_earners' => $top_earners,
			'account_balance' => $account_balance
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

	// Edit
	Route::get('/ticket/{id}', [App\Http\Controllers\TicketController::class, 'edit'])->name('user.ticket.edit');
	Route::post('/ticket/{id}', [App\Http\Controllers\TicketController::class, 'update'])->name('user.ticket.update');
	Route::post('/ticket/{id}/close', [App\Http\Controllers\TicketController::class, 'close'])->name('user.ticket.close');

	// POST Routes
	Route::delete('/user/account/delete', [App\Http\Controllers\Auth\RegisteredUserController::class, 'deleteAccount'])->name('user.delete');
	Route::post('/deposit/preview', [App\Http\Controllers\DepositController::class, 'create'])->name('user.deposit.preview');
	Route::post('/plan/preview', [App\Http\Controllers\TradeHistoryController::class, 'create'])->name('user.invest.new');
	Route::post('/deposit/complete', [App\Http\Controllers\DepositController::class, 'store'])->name('user.deposit.create');
	Route::post('/trade/complete', [App\Http\Controllers\TradeHistoryController::class, 'store'])->name('user.invest.create');
	Route::post('/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'store'])->name('user.withdrawal.create');
	Route::post('/transfer', [App\Http\Controllers\TransferController::class, 'store'])->name('user.transfer.new');
	Route::post('/tickets', [App\Http\Controllers\TicketController::class, 'store'])->name('user.ticket.new');
	Route::post('/settings', [App\Http\Controllers\Auth\RegisteredUserController::class, 'update'])->name('user.settings.update');
	Route::post('/settings/changepassword', [App\Http\Controllers\Auth\RegisteredUserController::class, 'updatePassword'])->name('user.change-password');
	Route::post('/settings/upload-profile-image', [App\Http\Controllers\Auth\RegisteredUserController::class, 'uploadProfileImage'])->name('user.upload.image');
	Route::post('/settings/document-upload', [App\Http\Controllers\Auth\RegisteredUserController::class,'uploadVerificcationDocument'])->name('user.upload.verification');
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
	Route::get('/customer/{id}', [App\Http\Controllers\Auth\AdminController::class, 'editCustomer'])->name('admin.customers.edit');	
	Route::get('/send-mail/{id}', [App\Http\Controllers\Auth\AdminController::class, 'customerSendMail'])->name('admin.customer.mail');	
	Route::get('/ticket/{id}', [App\Http\Controllers\Auth\AdminController::class, 'editTicket'])->name('admin.tickets.edit');
	Route::get('/blog-article/create', [App\Http\Controllers\Auth\AdminController::class, 'createArticle'])->name('admin.blog-article.create');
       

	// Admin Post Routes
	Route::post('/settings/password/update', [App\Http\Controllers\Auth\AdminController::class, 'updatePassword'])->name('admin.password.update');
	Route::post('/blog-article', [App\Http\Controllers\BlogArticleController::class, 'store'])->name('admin.blog-article.save');
	Route::post('/blog-categories', [App\Http\Controllers\ArticleCategoryController::class, 'store'])->name('admin.blog-categories.create');
	Route::post('/blog-categories/{id}/update', [App\Http\Controllers\ArticleCategoryController::class, 'update'])->name('admin.blog-categories.update');
	Route::delete('/blog-category/{id}/delete', [App\Http\Controllers\ArticleCategoryController::class, 'destroy'])->name('admin.blog-categories.delete');
	Route::post('/payment-gateways', [App\Http\Controllers\DepositMethodController::class, 'store'])->name('deposit-method.create');
	Route::post('/payout-methods', [App\Http\Controllers\WithdrawalMethodController::class, 'store'])->name('payout-method.create');
	Route::post('/plans-settings', [App\Http\Controllers\PlanController::class, 'store'])->name('admin.plan.create');
	Route::post('/plans-setting/{id}/update', [App\Http\Controllers\PlanController::class, 'update'])->name('admin.plan.update');
	Route::post('/customer/{id}/update', [App\Http\Controllers\Auth\AdminController::class, 'updateCustomer'])->name('admin.customers.update');
	Route::post('/send-mail/{id}/send', [App\Http\Controllers\Auth\AdminController::class, 'customerMailer'])->name('admin.customer.send-mail');
	Route::post('/customer/{id}/block', [App\Http\Controllers\Auth\AdminController::class, 'blockCustomer'])->name('admin.customer.block');
	Route::post('/customer/{id}/activate', [App\Http\Controllers\Auth\AdminController::class, 'activateCustomer'])->name('admin.customer.activate');
	Route::delete('/customer/{id}/delete', [App\Http\Controllers\Auth\AdminController::class, 'deleteCustomer'])->name('admin.customer.delete');
	Route::post('/deposit/{id}/approve', [App\Http\Controllers\Auth\AdminController::class, 'approveDeposit'])->name('admin.deposit.approve');
	Route::post('/deposit/{id}/decline', [App\Http\Controllers\Auth\AdminController::class, 'declineDeposit'])->name('admin.deposit.decline');
	Route::delete('/deposit/{id}/delete', [App\Http\Controllers\Auth\AdminController::class, 'deleteDeposit'])->name('admin.deposit.delete');
	Route::post('/ticket/{id}', [App\Http\Controllers\TicketController::class, 'update'])->name('admin.ticket.update');
	Route::post('/ticket/{id}/open', [App\Http\Controllers\Auth\AdminController::class, 'openTicket'])->name('admin.ticket.open');
	Route::post('/ticket/{id}/close', [App\Http\Controllers\Auth\AdminController::class, 'closeTicket'])->name('admin.ticket.close');
	Route::delete('/ticket/{id}/delete', [App\Http\Controllers\Auth\AdminController::class, 'deleteTicket'])->name('admin.ticket.delete');
	Route::delete('/payment-gateways/{id}/delete', [App\Http\Controllers\Auth\AdminController::class, 'deleteDepositMethod'])->name('admin.depositmethod.delete');
	Route::post('/payment-gateways/{id}/activate', [App\Http\Controllers\Auth\AdminController::class, 'activateDepositMethod'])->name('admin.depositmethod.activate');
	Route::post('/payment-gateways/{id}/deactivate', [App\Http\Controllers\Auth\AdminController::class, 'deactivateDepositMethod'])->name('admin.depositmethod.deactivate');
	Route::post('/payment-gateways/{id}/update', [App\Http\Controllers\Auth\AdminController::class, 'updateDepositMethod'])->name('admin.deposit-method.update');
	Route::post('/bank-transfer', [App\Http\Controllers\Auth\AdminController::class, 'saveAdminBankDetail'])->name('admin.bank-transfer.save');
	Route::post('/payout-method/{id}/activate', [App\Http\Controllers\Auth\AdminController::class, 'activatePayoutMethod'])->name('admin.payout-method.activate');
	Route::post('/payout-method/{id}/deactivate', [App\Http\Controllers\Auth\AdminController::class, 'deactivatePayoutMethod'])->name('admin.payout-method.deactivate');
	Route::delete('/payout-method/{id}/delete', [App\Http\Controllers\Auth\AdminController::class, 'deletePayoutMethod'])->name('admin.payout-method.delete');
	Route::delete('/payout-log/{id}/delete', [App\Http\Controllers\Auth\AdminController::class, 'deletePayoutLog'])->name('admin.payout-log.delete');
	Route::delete('/trade/{id}/delete', [App\Http\Controllers\Auth\AdminController::class, 'deleteTrade'])->name('admin.trade.delete');
	Route::post('/plan/{id}/activate', [App\Http\Controllers\Auth\AdminController::class, 'activatePlan'])->name('admin.plan.activate');
	Route::post('/plan/{id}/deactivate', [App\Http\Controllers\Auth\AdminController::class, 'deactivatePlan'])->name('admin.plan.deactivate');
	Route::delete('/plan/{id}/delete', [App\Http\Controllers\Auth\AdminController::class, 'deletePlan'])->name('admin.plan.delete');
	Route::post('/coupons', [App\Http\Controllers\CouponController::class, 'store'])->name('admin.coupon.create');

	Route::post('/coupon/{id}/update', [App\Http\Controllers\CouponController::class, 'update'])->name('admin.coupon.update');
	Route::post('/coupon/{id}/activate', [App\Http\Controllers\Auth\AdminController::class, 'activateCoupon'])->name('admin.coupon.activate');
	Route::post('/coupon/{id}/deactivate', [App\Http\Controllers\Auth\AdminController::class, 'deactivateCoupon'])->name('admin.coupon.deactivate');
	Route::delete('/coupon/{id}/delete', [App\Http\Controllers\Auth\AdminController::class, 'deleteCoupon'])->name('admin.coupon.delete');

	Route::delete('/transfer-log/{id}/delete', [App\Http\Controllers\Auth\AdminController::class, 'deleteTransferRecord'])->name('admin.transfer.delete');
});
