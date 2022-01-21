<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
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
		$plan_name = $request->input('plan_name');
		$daily_percentage = $request->input('daily_percentage');
		$min_amount = $request->input('min_amount');
		$max_amount = $request->input('max_amount');
		$plan_duration = $request->input('plan_duration');
		$referral_percentage = $request->input('referral_percentage');
		$bonus_percentage = $request->input('bonus_percentage');

		Plan::create([
			'plan_name' => $plan_name,
			'daily_percentage' => $daily_percentage,
			'min_amount' => $min_amount,
			'max_amount' => $max_amount,
			'plan_duration' => $plan_duration,
			'referral_percentage' => $referral_percentage,
			'bonus_percentage' => $bonus_percentage,
		]);

		return redirect()->route('admin.plans-settings', ['message' => 'successfull']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Plan  $plan
	 * @return \Illuminate\Http\Response
	 */
	public function show(Plan $plan)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Plan  $plan
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Plan $plan)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Plan  $plan
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		Plan::where('id', $id)->update([
			'plan_name' => $request->input('plan_name'),
			'daily_percentage' => $request->input('daily_percentage'),
			'min_amount' => $request->input('min_amount'),
			'max_amount' => $request->input('max_amount'),
			'plan_duration' => $request->input('plan_duration'),
			'referral_percentage' => $request->input('referral_percentage'),
			'bonus_percentage' => $request->input('bonus_percentage'),
		]);

		return redirect()->route('admin.plans-settings');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Plan  $plan
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Plan $plan)
	{
		//
	}
}
