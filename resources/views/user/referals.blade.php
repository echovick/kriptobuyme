@extends('layouts.user')

@section('content')
<div class="container-fluid">
	<div class="row mt-3">
		<div class="col-md-8">
			<div class="row">
				@foreach ($user_referrals as $user_referral)
					@php $trades = $user_referral->tradeHistories()->get(); @endphp
					@foreach ($trades as $trade)
					<div class="col-md-6">
						<div class="card mb-4 py-3 border-bottom-primary">
							<div class="card-body small">
								<span class="txt-md font-weight-bold">#{{ $trade['reference_id'] }} </span><br><br>
								User: {{ $trade->user->username }} <br>
								Plan: {{ $trade->plan->plan_name }} <br>
								Deposit: ${{ number_format($trade['amount']) }}<br><br>
								Date Opened: {{ $trade['created_at'] }} <br>
								Referal Bonus: ${{ number_format(0.1 * $trade['amount']) }}
							</div>
						</div>
					</div>
					@endforeach
				@endforeach
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-light text-black shadow mb-3">
				<div class="card-body text-center">
					<p class="font-weight-bold">Referral link</p>
					<div class="text-black-50 small ">Automatically Top up your Balance by Sharing your Referral Link, Earn a percentage of whatever Plan your Referred user Buys.</div>
					<p class="small mt-3">https://kryptovesta.com/referral/{{ auth()->user()->username }}</p>
					<div class="row mt-5">
						<a href="#" class="btn btn-primary btn-icon-split shadow mx-auto">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-copy"></i>
							</span>
							<span class="txt-sm text">Copy</span>
						</a>
					</div>
				</div>
			</div>
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Referrals</h6>
					<div class="dropdown no-arrow">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
							aria-labelledby="dropdownMenuLink">
							<div class="dropdown-header">Dropdown Header:</div>
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					@foreach ($user_referrals as $user_referral)
					<div class="d-flex mb-3">
						<img class="img-profile rounded-circle w-100 col-3" src="../assets/img/undraw_profile.svg">
						<p class="mr-2 d-none align-self-center d-lg-inline text-gray-600 small">{{ $user_referral['first_name'] }} {{ $user_referral['last_name'] }}<br>${{ $user_referral['profit'] }}</p>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection