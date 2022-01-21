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
use App\Models\AdminBankDetail;
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
		$AdminBankDetail = AdminBankDetail::first();
		return view('admin.bank-transfer')->with('AdminBankDetail', $AdminBankDetail);
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
		$closed_trades = TradeHistory::where('status', 'Completed')->get();
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
		$users = User::all();
		return view('admin.referal-earnings')->with('users', $users);
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

	// Function to display form to manage or edit specific customer
	public function editCustomer($id){
		$customer = User::find($id);
		$clientIp = request()->getClientIp();
		return view('admin.edit-customer', [
			'customer' => $customer,
			'client_ip' => $clientIp,
		]);
	}

	// Function to update customer
	public function updateCustomer(Request $request, $id){
		User::where('id', $id)->update([
			'first_name' => $request->input('first_name'),
			'last_name' => $request->input('last_name'),
			'username' => $request->input('username'),
			'email' => $request->input('email'),
			'city' => $request->input('city'),
			'country' => $request->input('country'),
			'balance' => $request->input('balance'),
		]);

		return redirect()->route('admin.customers.edit', ['id' => $id]);
	}

	// Return form to send mail to customer
	public function customerSendMail($id){
		$user = User::find($id);
		return view('admin.send-user-email')->with('user', $user);
	}

	// FUnction to send the mail
	public function customerMailer(Request $request, $id){
		$user = User::find($id);
		// Function to send mail

		return view('admin.send-user-email', [
			'message' => 'Cannot send mail, Please setup SMTP',
			'user' => $user,
		]);
	}
	
	// function to block customer
	public function blockCustomer($id){
		User::where('id', $id)->update([
			'status' => 'Blocked',
		]);

		return redirect()->route('admin.customers');
	}

	// Function to activate customer
	public function activateCustomer($id){
		User::where('id', $id)->update([
			'status' => 'Active',
		]);

		return redirect()->route('admin.customers');
	}

	public function deleteCustomer($id){
		$user = User::find($id);

		$user->delete();
		return redirect()->route('admin.customers');
	}

	// FUnction to approve deposit
	public function approveDeposit($id){
		Deposit::where('id', $id)->update(['status' => 'Confirmed']);

		$deposit_record = Deposit::where('id', $id)->first();

		$present_balance = User::where('id', $deposit_record->user->id)->first();

		// Add Amount to user balance
		User::where('id', $deposit_record->user->id)->update(['balance' => $present_balance + $deposit_record->amount]);

		return redirect()->route('admin.deposit-logs');
	}

	// Function to decline deposit
	public function declineDeposit($id){
		Deposit::where('id', $id)->update(['status' => 'Declined']);

		return redirect()->route('admin.deposit-logs');
	}

	// Function to delete deposit
	public function deleteDeposit($id){
		$deposit = Deposit::find($id);
		$deposit->delete();

		return redirect()->route('admin.deposit-logs');
	}

	// Function to return form for editing a support ticket
	public function editTicket($id){
		$this_ticket = Ticket::find($id);

		return view('admin.manage-ticket')->with('this_ticket', $this_ticket);
	}

	// Function to reopen ticket
	public function openTicket($id){
		Ticket::where('id', $id)->update(['status' => 'Open']);

		return redirect()->route('admin.tickets');
	}

	// Function to close ticket
	public function closeTicket($id){
		Ticket::where('id', $id)->update(['status' => 'Closed']);

		return redirect()->route('admin.tickets');
	}

	// Function to delete ticket
	public function deleteTicket($id){
		$ticket = Ticket::find($id);
		$ticket->delete();

		return redirect()->route('admin.tickets');
	}

	// Function to delete deposit method
	public function deleteDepositMethod($id){
		$depositMethod = DepositMethod::find($id);
		$depositMethod->delete();

		return redirect()->route('admin.payment-gateways');
	}

	// Function to activate deposit method
	public function activateDepositMethod($id){
		DepositMethod::where('id', $id)->update(['status' => 'Active']);

		return redirect()->route('admin.payment-gateways');
	}

	// Function to deactivate deposit method
	public function deactivateDepositMethod($id){
		DepositMethod::where('id', $id)->update(['status' => 'Inactive']);

		return redirect()->route('admin.payment-gateways');
	}

	// Function to update deposit method
	public function updateDepositMethod(Request $request, $id){
		DepositMethod::where('id', $id)->update([
			'name' => $request->input('name'),
			'display_name' => $request->input('display_name'),
			'min' => $request->input('min_amount'),
			'max' => $request->input('max_amount'),
			'fixed_charge_amount' => $request->input('charge_amount'),
			'percentage_charge' => $request->input('charge_percentage'),
			'method_address' => $request->input('method_address'),
		]);

		return redirect()->route('admin.payment-gateways');
	}

	// Function to save admin bank details
	public function saveAdminBankDetail(Request $request){
		$AdminBankDetail = AdminBankDetail::first();

		if($AdminBankDetail){
			// Exiting details, so update
			$record_id = $AdminBankDetail->id;

			AdminBankDetail::where('id', $record_id)->update([
				'admin_id' => $request->input('admin_id'),
				'bank_name' => $request->input('bank_name'),
				'bank_address' => $request->input('bank_address'),
				'iban_code' => $request->input('iban_code'),
				'swift_code' => $request->input('swift_code'),
				'account_number' => $request->input('account_number'),
			]);
		}else{
			AdminBankDetail::create([
				'admin_id' => $request->input('admin_id'),
				'bank_name' => $request->input('bank_name'),
				'bank_address' => $request->input('bank_address'),
				'iban_code' => $request->input('iban_code'),
				'swift_code' => $request->input('swift_code'),
				'account_number' => $request->input('account_number'),
			]);
		}

		return redirect()->route('admin.bank-transfer');
	}
	
	// function to delete payout method
	public function deletePayoutMethod($id){
		$WithdrawalMethod = WithdrawalMethod::find($id);
		$WithdrawalMethod->delete();

		return redirect()->route('admin.payout-methods');
	}

	// Function to deactivate payout method
	public function deactivatePayoutMethod($id){
		WithdrawalMethod::where('id', $id)->update(['status' => 'Inactive']);

		return redirect()->route('admin.payout-methods');
	}

	// Function to activate payout method
	public function activatePayoutMethod($id){
		WithdrawalMethod::where('id', $id)->update(['status' => 'Active']);

		return redirect()->route('admin.payout-methods');
	}

	// Function to delete withrawal record
	public function deletePayoutLog($id){
		$Withdrawal = Withdrawal::find($id);
		$Withdrawal->delete();

		return redirect()->route('admin.payout-logs');
	}

	// Function to delete an open trade record
	public function deleteOpenTrade($id){
		$TradeHistory = TradeHistory::find($id);
		$TradeHistory->delete();

		return redirect()->route('admin.open-trades');
	}

	// Function to delete a closed trade record
	public function deleteTrade($id){
		$TradeHistory = TradeHistory::find($id);
		$TradeHistory->delete();

		return redirect()->route('admin.open-trades');
	}

	// Function activate plan record
	public function activatePlan($id){
		Plan::where('id', $id)->update(['status' => 'Active']);

		return redirect()->route('admin.plans-settings');
	}

	// Function deactivate plan record
	public function deactivatePlan($id){
		Plan::where('id', $id)->update(['status' => 'Inactive']);

		return redirect()->route('admin.plans-settings');
	}

	// Function to delete plan record
	public function deletePlan($id){
		$plan = Plan::find($id);
		$plan->delete();

		return redirect()->route('admin.plans-settings');
	}

	// Function activate coupon record
	public function activateCoupon($id){
		Coupon::where('id', $id)->update(['status' => 'Active']);

		return redirect()->route('admin.coupons');
	}

	// Function deactivate coupon record
	public function deactivateCoupon($id){
		Coupon::where('id', $id)->update(['status' => 'Inactive']);

		return redirect()->route('admin.coupons');
	}

	// Function to delete coupon record
	public function deleteCoupon($id){
		$coupon = Coupon::find($id);
		$coupon->delete();

		return redirect()->route('admin.coupons');
	}

	//Function to delete transfer record
	public function deleteTransferRecord($id){
		$transfer = Transfer::find($id);
		$transfer->delete();

		return redirect()->route('admin.transfer-logs');
	}
}
