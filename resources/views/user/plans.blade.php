@extends('layouts.user')

@section('content')
<div class="container-fluid">
	<div class="alert alert-info">
		Payouts wont be available till end of plan duration. Interest means profit and compound is sum
		of money invested plus profit. Trading bonus is a certain percent of your compound interest. If
		interest reads minus, dont invest, you will lose money
	</div>
	
	@if (isset($_GET['message']) && $_GET['message'] == 'unsuccessful')
		<div class="alert alert-danger">
			You do not have sufficient amount in your balance
		</div>
	@endif
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="row">
				@foreach ($plans as $plan)
				<div class="col-md-3">
					<div class="card mb-4 py-3 border-bottom-primary">
						<div class="card-body small">
							<div class="row mb-3">
								<img class="img-profile rounded-circle w-50 mx-auto text-center" src="../assets/img/undraw_profile.svg">
							</div>
							<div class="text-center">
								<span class="font-weight-bold">{{ $plan['plan_name'] }}</span> <br><br>
								<span class="font-weight-bold txt-md">${{ number_format($plan['min_amount']) }} - ${{ number_format($plan['max_amount']) }}</span> <br>
								FOR {{ $plan['plan_duration'] }} DAY(S) <br><br>
								{{ number_format($plan['daily_percentage']) }}% Daily Top Up<br>
								Maximum Price ${{ number_format($plan['max_amount']) }}<br>
								{{ number_format($plan['referral_percentage']) }}% Referral Percent<br>
								{{ number_format($plan['bonus_percentage']) }}% Trading Bonus<br>
								<a href="#" class="btn btn-primary small btn-icon-split mt-3">
									<span class="icon text-white-50 small">
										<i class="fas fa-plus"></i>
									</span>
									<span class="text small" data-toggle="modal" data-target="#plan{{ $plan['id'] }}">Purchase Plan</span>
								</a>
								{{-- <hr>
								Here a quick summary; Money invested $100, Interest will be $-98.5, Compounded Interest will amount to $1.5 after 1 Day(s). You will receive 1% of Compound Interest as Trading bonus --}}
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

{{-- Modals --}}
@foreach ($plans as $plan)
<div class="modal fade" id="plan{{ $plan['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content py-3">
			<form action="{{ route('user.invest.new') }}" method="POST" class="px-5">
				@csrf
				<input type="text" name="plan_id" value="{{ $plan['id'] }}" hidden>
				<p class="mx-auto text-center text-dark font-weight-bold small">Purchase Plan</p>
				<p class="mx-auto text-center text-dark font-weight-bold">{{ $plan['plan_name'] }}</p>
				<div class="form-group px-5 mt-5 row">
					<i class="fas fa-dollar-sign pt-1"></i>
					<input type="number" class="px-1 mx-2" name="amount" placeholder="Enter Amount" max="{{ number_format($plan['max_amount']) }}" min="{{ number_format($plan['min_amount']) }}" style="border:none; outline:none; border-bottom:1px solid rgb(78, 78, 78); width:85%;" required>
				</div>
				<div class="form-group px-5 mt-5 row">
					<i class="fas fa-meteor pt-1"></i>
					<input type="text" class="px-1 mx-2" name="coupon_code" placeholder="Enter Coupon Code (Optional)" style="border:none; outline:none; border-bottom:1px solid rgb(78, 78, 78); width:85%;">
				</div>
				<div class="row mt-5 py-3 ">
					<button type="submit" class="btn btn-primary btn-sm mx-auto">Preview</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach
@endsection