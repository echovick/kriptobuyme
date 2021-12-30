<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
		return view('admin.index');
	}

	/**
	 * show admin dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showCustomersPage(){
		return view('admin.customers');
	}

	/**
	 * show admin tickets page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showTicketsPage(){
		return view('admin.tickets');
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
		return view('admin.messages');
	}

	public function showPaymentGatewaysPage(){
		return view('admin.payment-gateways');
	}

	public function showBankTransferPage(){
		return view('admin.bank-transfer');
	}

	public function showDepositLogsPage(){
		return view('admin.deposit-logs');
	}

	public function showPayoutMethodsPage(){
		return view('admin.payout-methods');
	}

	public function showPayoutsLogPage(){
		return view('admin.payout-logs');
	}
}
