<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepositMethod;
use App\Models\Deposit;
use App\Models\User;

class DepositController extends Controller
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
		// Get input data
		$deposit_method = $request->input('deposit_method');
		$amount = $request->input('amount');

		// Get deposit method name
		$deposit_method_name = DepositMethod::where('id', $deposit_method)->first('display_name');

		// Get deposit method charge
		$deposit_method_charge = DepositMethod::where('id', $deposit_method)->first('fixed_charge_amount');

		return view('user.deposit-preview', [
			'deposit_method_name' => $deposit_method_name,
			'deposit_method_charge' => $deposit_method_charge,
			'amount' => $amount,
			'deposit_method' => $deposit_method,
		]);
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

		// Cretae deposit record
		$deposit = Deposit::create([
			'user_id' => $user_id,
			'reference_id' => $ref_id,
			'amount' => $request->input('amount'),
			'deposit_method' => $request->input('deposit_method'),
			'deposit_charge' => $request->input('charge'),
			'status' => 'Pending',
		]);

		// Create log

		// Get user balance
		$user_balance = User::where('id', $user_id)->first();

		// Update user balance
		$new_balance = intval($user_balance['balance']) + $request->input('amount');
		User::where('id', $user_id)->update(['balance' => $new_balance]);

		// Get deposit method name and address
		$deposit_method_details = DepositMethod::where('id', $request->input('deposit_method'))->first();

		return view('user.confirm-deposit', [
			'deposit_method_details' => $deposit_method_details,
			'amount' => $request->input('amount'),
		]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
