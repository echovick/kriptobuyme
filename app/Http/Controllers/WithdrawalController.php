<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use App\Models\WithdrawalMethod;
use App\Models\Deposit;
use App\Models\AuditLog;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// Get user id
		$user_id = auth()->user()->id;

		// General Reference id
		$ref_id = time() . rand(10*45, 100*98);

		// Get withdrawal charge
		$charge = 0.1 * $request->input('amount');

		// Check withdrawl amount with user amount
		$withdrawal_amount = $request->input('amount');
		$withdrawal_type = $request->input('withdrawal_type');

		switch($withdrawal_type){
			case "profit":
				$user_profit = auth()->user()->profit;
				if($user_profit < intval($withdrawal_amount)){
					AuditLog::create([
						'user_id' => auth()->user()->id,
						'reference_id' => 'AUD' . $ref_id,
						'log' => 'User Withdrwal Attempt Failed, Insuffecient Profit Balance'
					]);
					return redirect()->route('user.withdrawal', ['message' => 'insufficient_amount']);
				}
                break;
			case "balance":
				$user_balance = auth()->user()->balance;
				if($user_balance < intval($withdrawal_amount)){
					AuditLog::create([
						'user_id' => auth()->user()->id,
						'reference_id' => 'AUD' . $ref_id,
						'log' => 'User Withdrwal Attempt Failed, Insuffecient User Balance'
					]);
					return redirect()->route('user.withdrawal', ['message' => 'insufficient_amount']);
				}
                break;
			case "referal":
				$user_referal = auth()->user()->referal_bonus;
				if($user_referal < intval($withdrawal_amount)){
					AuditLog::create([
						'user_id' => auth()->user()->id,
						'reference_id' => 'AUD' . $ref_id,
						'log' => 'User Withdrwal Attempt Failed, Insuffecient referal bonus balance'
					]);
					return redirect()->route('user.withdrawal', ['message' => 'insufficient_amount']);
				}
                break;
            default:
                AuditLog::create([
                    'user_id' => auth()->user()->id,
                    'reference_id' => 'AUD' . $ref_id,
                    'log' => 'User Withdrwal Attempt Failed, Unexpected Error'
                ]);
                return redirect()->route('user.withdrawal', ['message' => 'insufficient_amount']);
		}

		Withdrawal::create([
			'reference_id' => $ref_id,
			'charge' => $charge,
			'user_id' => $user_id,
			'amount' => $request->input('amount'),
			'address_details' => $request->input('address_details'),
			'withdrawal_method' => $request->input('withdrawal_method'),
			'type' => $request->input('withdrawal_type'),
			'status' => 'Pending',
		]);

		// Get all Deposits
		$total_deposit = Deposit::where(['user_id' => $user_id, 'status' => 'Confirmed'])->sum('amount');
		$pending_deposit = Deposit::where(['user_id' => $user_id, 'status' => 'Pending'])->sum('amount');

		$user_withdrawals = Withdrawal::where('user_id', $user_id)->get();

		$withdrawal_methods = WithdrawalMethod::all();

		return redirect()->route('user.withdrawal', ['message' => 'successfull']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Withdrawal  $withdrawal
	 * @return \Illuminate\Http\Response
	 */
	public function show(Withdrawal $withdrawal)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Withdrawal  $withdrawal
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Withdrawal $withdrawal)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Withdrawal  $withdrawal
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Withdrawal $withdrawal)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Withdrawal  $withdrawal
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Withdrawal $withdrawal)
	{
		//
	}
}
