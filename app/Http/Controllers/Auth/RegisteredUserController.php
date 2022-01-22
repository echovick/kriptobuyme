<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\DepositMethod;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\WithdrawalMethod;
use App\Models\Plan;
use App\Models\TradeHistory;
use App\Models\Transfer;
use App\Models\Ticket;
use App\Models\AuditLog;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Password;
use Illuminate\Routing\UrlGenerator;

class RegisteredUserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
   }

	protected $url;

	/**
	 * Display the registration view.
	 *
	 * @return \Illuminate\View\View
	 */
	public function create()
	{
		return view('auth.register');
	}

	/**
	 * Handle an incoming registration request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\RedirectResponse
	 *
	 * @throws \Illuminate\Validation\ValidationException
	 */
	public function store(Request $request)
	{
		$request->validate([
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'confirmed', Rules\Password::defaults()],
		]);

		$user = User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);

		event(new Registered($user));

		Auth::login($user);

		return redirect(RouteServiceProvider::HOME);
	}

	/**
	 * Display Deposits Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showUserDepositPage()
	{
		$user_id = auth()->user()->id;

		// Get deposit methods
		$deposit_methods = DepositMethod::where('status', 'Active')->get();

		// get all deposits of user
		$user_deposits = Deposit::where('user_id', $user_id)->get();

		return view('user.deposit', [
			'deposit_methods' => $deposit_methods,
			'user_deposits' => $user_deposits,
		]);
	}

	/**
	 * Display Withdrawals Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showUserWithdrawalPage()
	{
		$user_id = auth()->user()->id;

		// Get all Deposits
		$total_deposit = Deposit::where(['user_id' => $user_id, 'status' => 'Confirmed'])->sum('amount');
		$pending_deposit = Deposit::where(['user_id' => $user_id, 'status' => 'Pending'])->sum('amount');

		$user_withdrawals = Withdrawal::where('user_id', $user_id)->get();

		$withdrawal_methods = WithdrawalMethod::all();

		return view('user.withdrawal', [
			'user_withdrawals' => $user_withdrawals,
			'total_deposit' => $total_deposit,
			'pending_deposit' => $pending_deposit,
			'withdrawal_methods' => $withdrawal_methods,
		]);
	}

	/**
	 * Display Plans Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showPlansPage(){

		// get all plans
		$plans = Plan::where('status', 'Active')->get();

		return view('user.plans')->with('plans', $plans);
	}

	/**
	 * Display Trade Activity Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showTradeActivitiesPage(){

		$user_id = auth()->user()->id;		

		// get trade history
		$user_trades = TradeHistory::where('user_id', $user_id)->get();

		// get top earners
		$top_earners = User::orderBy('id', 'DESC')->get();

		// get user trade stats
		$highest_amount = TradeHistory::where('user_id', $user_id)->max('amount'); // Highest amount
		$lowest_amount = TradeHistory::where('user_id', $user_id)->min('amount'); //Lowest amount
		$total_amount = TradeHistory::where('user_id', $user_id)->sum('amount'); //total amount
		$highest_profit = TradeHistory::where('user_id', $user_id)->max('trade_profit'); //highest profit
		$lowest_profit = TradeHistory::where('user_id', $user_id)->min('trade_profit'); //lowest profit
		$total_profit = TradeHistory::where('user_id', $user_id)->sum('trade_profit'); //lowest profit
		$highest_bonus = TradeHistory::where('user_id', $user_id)->max('trade_bonus'); //highest bonus
		$lowest_bonus = TradeHistory::where('user_id', $user_id)->min('trade_bonus'); //lowest bonus
		$total_bonus = TradeHistory::where('user_id', $user_id)->sum('trade_bonus'); //total bonus

		return view('user.trade-activity', [
			'user_trades' => $user_trades,
			'top_earners' => $top_earners,
			'highest_amount' => $highest_amount,
			'lowest_amount' => $lowest_amount,
			'total_amount' => $total_amount,
			'highest_profit' => $highest_profit,
			'lowest_profit' => $lowest_profit,
			'total_profit' => $total_profit,
			'highest_bonus' => $highest_bonus,
			'lowest_bonus' => $lowest_bonus,
			'total_bonus' => $total_bonus,
		]);
	}

	/**
	 * Display Transfer Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showTransferPage(){
		
		$user_id = auth()->user()->id;
		
		// get all user transfers
		$user_transfers = Transfer::where('sender_id', $user_id)->get();

		// get total transfers sent
		$total_sent = Transfer::where(['sender_id' => $user_id, 'status' => 'Confirmed'])->sum('amount');

		// get total transfers pending
		$total_pending = Transfer::where(['sender_id' => $user_id, 'status' => 'Pending'])->sum('amount');

		// get total transfers returned
		$total_returned = Transfer::where(['sender_id' => $user_id, 'status' => 'Returned'])->sum('amount');

		return view('user.transfer', [
			'user_transfers' => $user_transfers,
			'total_sent' => $total_sent,
			'total_pending' => $total_pending,
			'total_returned' => $total_returned,
		]);
	}

	/**
	 * Display Dispute Tickets Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showTicketsPage(){
		// Get user id
		$user_id = auth()->user()->id;

		$user_tickets = Ticket::where('user_id', $user_id)->get();
		
		return view('user.tickets')->with('user_tickets', $user_tickets);
	}

	/**
	 * Display Settings Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showSettingsPage(){
		return view('user.settings');
	}

	public function showAuditLogsPage(){

		// Get user id
		$user_id = auth()->user()->id;

		// Get user audit logs
		$user_audit_logs = AuditLog::where('user_id', $user_id)->get();

		return view('user.audit-logs')->with('user_audit_logs', $user_audit_logs);
	}

	public function showReferalsPage(){

		// Get user id
		$user_id = auth()->user()->id;

		// Get user referrals
		$user_referrals = User::where('referer', $user_id)->get();

		return view('user.referals')->with('user_referrals', $user_referrals);
	}

	public function update(Request $request){
		// Get user id
		$user_id = auth()->user()->id;
		
		User::where('id',$user_id)->update([
			'first_name' => $request->input('first_name'),
			'last_name' => $request->input('last_name'),
			'username' => $request->input('username'),
			'city' => $request->input('city'),
			'country' => $request->input('country'),
			'email' => $request->input('email'),
		]);

		return redirect()->route('user.settings');
	}

	public function updatePassword(Request $request){
		// Get user id
		$user_id = auth()->user()->id;

		// Check password
		$password = $request->input('password');
		$confirm_password = $request->input('confirm_password');
		if($password == $confirm_password){
			// Password Match
			User::where('id',$user_id)->update([
				'password' => Hash::make($request->input('password')),
			]);
			return redirect()->route('user.settings', ['message' => 'successfull']);
		}else{
			return redirect()->route('user.settings', ['message' => 'password_mismatch']);
		}
	}

	// FUnction to upload image
	public function uploadProfileImage(Request $request){
		$validatedData = $request->validate([
			'profile_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
		]);

		$name = $request->file('profile_image')->getClientOriginalName();
		$newImageName = time() . '-' . $name;
		
      $path = $request->file('profile_image')->move(base_path('public\assets\img\profile'), $newImageName);

		$user_id = auth()->user()->id;

		User::where('id', $user_id)->update([
			'profile_image' => $newImageName,
		]);

		return redirect()->route('user.settings');
	}

	// Function to upload document
	public function uploadVerificcationDocument(Request $request){
		$validatedData = $request->validate([
			'identity_document' => 'required|image|mimes:jpg,png,jpeg,gif,svg,pdf,doc,docx|max:2048',
		]);

		$name = $request->file('identity_document')->getClientOriginalName();
		$fileName = time() . '-' . $name;
		
      $path = $request->file('identity_document')->move(base_path('public\assets\user\verification'), $fileName);

		$user_id = auth()->user()->id;

		User::where('id', $user_id)->update([
			'verification_document' => $fileName,
		]);

		return redirect()->route('user.settings');
	}

	// Function to delete account
	public function deleteAccount(){
		$user_id = auth()->user()->id;
		$user = User::find($user_id);

		$user->delete();

		return redirect()->route('login');
	}
}
