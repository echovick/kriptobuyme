<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\User;
use App\Models\AuditLog;
use Illuminate\Http\Request;

class TransferController extends Controller
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
		// get input details
		$email = $request->input('email');
		$amount = $request->input('amount');

		// Check balance if amount it suffecient
		$user_balance = auth()->user()->balance;

		// Reference id
		$ref_id = time() . rand(10*45, 100*98);

		// Reciever id
		$receiver_id = User::where('email', $email)->first('id');

		empty($receiver_id) ? $receiver_id = 0 : '';

		if($user_balance < $amount){
			AuditLog::create([
				'user_id' => auth()->user()->id,
				'reference_id' => 'AUD' . $ref_id,
				'log' => 'Funds Transfer Attempt Failed, Insuffecient Balance'
			]);
			return redirect()->route('user.transfer', ['message' => 'insufficient_amount']);
		}else{
			Transfer::create([
				'user_id' => auth()->user()->id,
				'reference_id' => $ref_id,
				'sender_id' => auth()->user()->id,
				'receiver_id' => $receiver_id,
				'amount' => $amount,
				'charge' => 0.05 * $amount,
				'status' => 'Pending',
			]);

			AuditLog::create([
				'user_id' => auth()->user()->id,
				'reference_id' => 'AUD' . $ref_id,
				'log' => 'Funds Transfer to '. $email,
			]);

			return redirect()->route('user.transfer', ['message' => 'successfull']);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Transfer  $transfer
	 * @return \Illuminate\Http\Response
	 */
	public function show(Transfer $transfer)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Transfer  $transfer
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Transfer $transfer)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Transfer  $transfer
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Transfer $transfer)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Transfer  $transfer
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Transfer $transfer)
	{
		//
	}
}
