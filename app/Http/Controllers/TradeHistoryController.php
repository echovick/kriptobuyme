<?php

namespace App\Http\Controllers;

use App\Models\TradeHistory;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

class TradeHistoryController extends Controller
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
	public function create(Request $request)
	{
		// get values from input fields
		$plan_id = $request->input('plan_id');
		$amount = $request->input('amount');
		$coupon_code = $request->input('coupon_code');

		// Get other information
		$user_id = auth()->user()->id;
		$ref_id = time() . rand(10*45, 100*98);
		$plan = Plan::where('id', $plan_id)->first();
		$daily_percentage = $plan['daily_percentage'];
		$plan_duration = $plan['plan_duration'];
		$bonus_percentage = $plan['bonus_percentage'];

		// get trade profit
		$trade_profit = (($daily_percentage / 100) * $amount) * $plan_duration;

		// get trade bonus
		$trade_bonus = ($bonus_percentage / 100) * $amount;

		// get trade end date
		$date = date('Y-m-d ');
		$trade_end_date = date('Y-m-d', strtotime($date. ' + '.$plan_duration.' days'));

		// Get and check user balance
		$user_balance = auth()->user()->balance;

		if($user_balance < $amount){
			return redirect()->route('user.plans', ['message' => 'unsuccessful']);
		}else{
			return view('user.preview-trade', [
				'plan' => $plan,
				'amount' => $amount,
				'interest' => $trade_profit,
			]);
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// get values from input fields
		$plan_id = $request->input('plan_id');
		$amount = $request->input('amount');
		$coupon_code = $request->input('coupon_code');

		// Get other information
		$user_id = auth()->user()->id;
		$ref_id = time() . rand(10*45, 100*98);
		$plan = Plan::where('id', $plan_id)->first();
		$daily_percentage = $plan['daily_percentage'];
		$plan_duration = $plan['plan_duration'];
		$bonus_percentage = $plan['bonus_percentage'];

		// get trade profit
		$trade_profit = (($daily_percentage / 100) * $amount) * $plan_duration;

		// get trade bonus
		$trade_bonus = ($bonus_percentage / 100) * $amount;

		// get trade end date
		$date = date('Y-m-d ');
		$trade_end_date = date('Y-m-d', strtotime($date. ' + '.$plan_duration.' days'));

		TradeHistory::create([
			'user_id' => $user_id,
			'reference_id' => $ref_id,
			'amount' => $amount,
			'plan_id' => $plan_id,
			'daily_percentage' => $daily_percentage,
			'trade_profit' => $trade_profit,
			'trade_duration' => $plan_duration,
			'trade_source' => 'Balance',
			'trade_bonus' => $trade_bonus,
			'trade_end_date' => $trade_end_date,
		]);

		// Update user balance
		$user_balance = auth()->user()->balance;
		$new_balance = $user_balance - $amount;

		User::where('id', $user_id)->update([
			'balance' => $new_balance,
		]);

		return redirect()->route('user.trade-activity', ['message' => 'successfull']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\TradeHistory  $tradeHistory
	 * @return \Illuminate\Http\Response
	 */
	public function show(TradeHistory $tradeHistory)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\TradeHistory  $tradeHistory
	 * @return \Illuminate\Http\Response
	 */
	public function edit(TradeHistory $tradeHistory)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\TradeHistory  $tradeHistory
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, TradeHistory $tradeHistory)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\TradeHistory  $tradeHistory
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(TradeHistory $tradeHistory)
	{
		//
	}
}
