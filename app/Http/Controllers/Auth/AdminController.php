<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DepositMethod;
use App\Models\WithdrawalMethod;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Deposit;
use App\Models\Review;
use App\Models\Withdrawal;
use App\Models\Coupon;
use App\Models\Plan;
use App\Models\TradeHistory;
use App\Models\Message;
use App\Models\Transfer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	/**
	 * show admin dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		// Get number of active users
		$active_users = User::where('status', 'Active')->count();

		// Get number of blocked users
		$blocked_users = User::where('status', 'Blocked')->count();

		// Get number of open tickets
		$open_ticket = Ticket::where('status', 'Open')->count();

		// Get number of closed tickets
		$closed_ticket = Ticket::where('status', 'Closed')->count();
		
		// Get number of published platform reviews
		$published_platform_reviews = Review::where('status', 'Published')->count();

		// Get number of pending platform reviews
		$pending_platform_reviews = Review::where('status', 'Pending')->count();

		// Get number of pending deposits
		$pending_deposits = Deposit::where('status', 'Pending')->count();

		// Get number of approved deposits
		$approved_deposits = Deposit::where('status', 'Confirmed')->count();

		// Get number of pending withdrawals
		$pending_withdrawals = Withdrawal::where('status', 'Pending')->count();

		// Get number of aproved withrawals
		$approved_withdrawals = Withdrawal::where('status', 'Confirmed')->count();

		// get number of active investment plans
		$active_plans = Plan::where('status', 'Active')->count();

		// get number of disabled plans
		$inactive_plans = Plan::where('status', 'Inactive')->count();

		// Get number of active investments
		$active_investments = TradeHistory::where('status', 'Active')->count();

		// get numbe of completed investments
		$completed_investments = TradeHistory::where('status','Completed')->count();

		return view('admin.index', [
			'active_users' => $active_users,
			'blocked_users' => $blocked_users,
			'open_ticket' => $open_ticket,
			'closed_ticket' => $closed_ticket,
			'published_platform_reviews' => $published_platform_reviews,
			'pending_platform_reviews' => $pending_platform_reviews,
			'pending_deposits' => $pending_deposits,
			'approved_deposits' => $approved_deposits,
			'pending_withdrawals' => $pending_withdrawals,
			'approved_withdrawals' => $approved_withdrawals,
			'active_plans' => $active_plans,
			'inactive_plans' => $inactive_plans,
			'active_investments' => $active_investments,
			'completed_investments' => $completed_investments,
		]);
	}

	/**
	 * show admin dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showCustomersPage(){
		// Get all users
		$users = User::all();
		return view('admin.customers')->with('users', $users);
	}

	/**
	 * show admin tickets page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showTicketsPage(){
		// Get all tickets
		$tickets = Ticket::all();
		return view('admin.tickets')->with('tickets', $tickets);
	}

	/**
	 * show admin promotional emails page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showPromotionalEmailsPage(){
		return view('admin.promotional-emails');
	}

	/**
	 * show admin messages page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showMessagesPage(){
		// Get all messages
		$messages = Message::all();
		return view('admin.messages')->with('messages', $messages);
	}

	public function showPaymentGatewaysPage(){
		$depositMethods = DepositMethod::all();
		
		return view('admin.payment-gateways', [
			'depositMethods' => $depositMethods,
		]);
	}

	public function showBankTransferPage(){
		return view('admin.bank-transfer');
	}

	public function showDepositLogsPage(){
		// get all deposit logs
		$deposits = Deposit::all();

		return view('admin.deposit-logs')->with('deposits',$deposits);
	}

	public function showPayoutMethodsPage(){
		// get all withdrawal methods

		$withdrawalmethods = WithdrawalMethod::all();
		return view('admin.payout-methods')->with('withdrawalmethods', $withdrawalmethods);
	}

	public function showPayoutsLogPage(){
		// Get all withdrawal logs
		$withdrawals = Withdrawal::all();
		return view('admin.payout-logs')->with('withdrawals', $withdrawals);
	}

	public function showOpenTradesPage(){
		// Get all open trades
		$open_trades = TradeHistory::where('status', 'Open')->get();
		return view('admin.open-trades')->with('open_trades',$open_trades);
	}

	public function showClosedTradesPage(){
		// get all closed trades
		$closed_trades = TradeHistory::where('status', 'Open')->get();
		return view('admin.closed-trades')->with('closed_trades', $closed_trades);
	}

	public function showPlansSettingsPage(){
		// get all plans
		$plans = Plan::all();
		return view('admin.plans-settings')->with('plans', $plans);
	}

	public function showCouponsPage(){
		// Show coupons
		$coupons = Coupon::all();
		return view('admin.coupons')->with('coupons', $coupons);
	}

	public function showTransferLogsPage(){
		// SHow transfers
		$transfers = Transfer::all();
		return view('admin.transfer-logs')->with('transfers',$transfers);
	}

	public function showReferalEarningsPage(){
		return view('admin.referal-earnings');
	}

	public function showBlogArticlesPage(){
		return view('admin.blog-articles');
	}

	public function showBlogCategoriesPage(){
		return view('admin.blog-categories');
	}

	public function showSettingsPage(){
		return view('admin.settings');
	}

	public function showHomepage(){
		return view('admin.homepage');
	}

	public function showLogoSettingspage(){
		return view('admin.logo-settings');
	}

	public function showReviewsPage(){
		return view('admin.reviews');
	}

	public function showServicesPage(){
		return view('admin.services');
	}

	public function showTeamPage(){
		return view('admin.team');
	}

	public function showPagesPage(){
		return view('admin.pages');
	}

	public function showCurrencyPage(){
		return view('admin.currency');
	}

	public function showFaqsPage(){
		return view('admin.faqs');
	}

	public function showTermsPage(){
		return view('admin.terms');
	}

	public function showPrivacyPolicyPage(){
		return view('admin.privacy-policy');
	}

	public function showAboutPage(){
		return view('admin.about-us');
	}

	public function showSocialLinksPage(){
		return view('admin.social-links');
	}
}
