<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
   }

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
		return view('user.deposit');
	}

	/**
	 * Display Withdrawals Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showUserWithdrawalPage()
	{
		return view('user.withdrawal');
	}

	/**
	 * Display Plans Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showPlansPage(){
		return view('user.plans');
	}

	/**
	 * Display Trade Activity Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showTradeActivitiesPage(){
		return view('user.trade-activity');
	}

	/**
	 * Display Transfer Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showTransferPage(){
		return view('user.transfer');
	}

	/**
	 * Display Dispute Tickets Page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showTicketsPage(){
		return view('user.tickets');
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
		return view('user.audit-logs');
	}

	public function showReferalsPage(){
		return view('user.referals');
	}
}
