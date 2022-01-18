<?php

namespace App\Http\Controllers;

use App\Models\DepositMethod;
use App\Models\AuditLog;
use Illuminate\Http\Request;

class DepositMethodController extends Controller
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
		$depositMethod = DepositMethod::create([
			'name' => $request->input('name'),
			'display_name' => $request->input('display_name'),
			'min' => $request->input('min_amount'),
			'max' => $request->input('max_amount'),
			'fixed_charge_amount' => $request->input('charge_amount'),
			'percentage_charge' => $request->input('charge_percentage'),
			'status' => 'Inactive',
			'method_address' => $request->input('method_address'),
		]);

		AuditLog::create([
			'user_id' => auth()->user()->id,
			'reference_id' => 'AUD' . $ref_id,
			'log' => 'New Deposit Method Created. '. $request->input('display_name'),
		]);


		return redirect()->route('admin.payment-gateways', ['action' => 'successfull']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\DepositMethod  $depositMethod
	 * @return \Illuminate\Http\Response
	 */
	public function show(DepositMethod $depositMethod)
	{
		// 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\DepositMethod  $depositMethod
	 * @return \Illuminate\Http\Response
	 */
	public function edit(DepositMethod $depositMethod)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\DepositMethod  $depositMethod
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, DepositMethod $depositMethod)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\DepositMethod  $depositMethod
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(DepositMethod $depositMethod)
	{
		//
	}
}
