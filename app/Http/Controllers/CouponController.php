<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
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
		Coupon::create([
			'admin_id' => $request->input('admin_id'),
			'coupon_code' => $request->input('coupon_code'),
			'percentage_off' => $request->input('percentage_off'),
			'status' => 'Active',
		]);

		return redirect()->route('admin.coupons');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Coupon  $coupon
	 * @return \Illuminate\Http\Response
	 */
	public function show(Coupon $coupon)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Coupon  $coupon
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Coupon $coupon)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Coupon  $coupon
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		Coupon::where('id', $id)->update([
			'admin_id' => $request->input('admin_id'),
			'coupon_code' => $request->input('coupon_code'),
			'percentage_off' => $request->input('percentage_off'),
		]);

		return redirect()->route('admin.coupons');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Coupon  $coupon
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Coupon $coupon)
	{
		//
	}
}
