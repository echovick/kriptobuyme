@extends('layouts.user')

@section('content')
<div class="container-fluid">
	@if (isset($_GET['message']) && $_GET['message'] == 'successfull')
		<div class="alert alert-success">
			Trade Created Successfully
		</div>
	@endif
	<div class="row mt-3">
		<div class="col-md-8">
			<div class="row">
				@foreach ($user_trades as $user_trade)
				<div class="col-md-6">
					<div class="card mb-4 py-3 border-bottom-primary">
						<div class="card-body small">
							<span class="txt-md font-weight-bold">#{{ $user_trade['reference_id'] }} </span><br><br>
							Plan: {{ $user_trade->plan->plan_name }} <br>
							Started: {{ $user_trade['created_at'] }}<br>
							Deposit: ${{ number_format($user_trade['amount']) }}<br>
							Percent: {{ number_format($user_trade['daily_percentage']) }}% <br>
							Duration: {{ number_format($user_trade['trade_duration']) }} Day(s)<br>
							Type: {{ $user_trade['trade_source'] }}<br>
							End: {{ $user_trade['trade_end_date'] }}<br><br>
							{{ $user_trade['trade_profit'] }}USD/{{ ($user_trade['daily_percentage'] / 100 * $user_trade['amount']) * $user_trade['trade_duration'] }} + Trading Bonus ${{ $user_trade['trade_bonus'] }}
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-4">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Top Earners</h6>
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
					@foreach ($top_earners as $top_earner)
					<div class="d-flex mb-3">
						<img class="img-profile rounded-circle w-100 col-3" src="../assets/img/undraw_profile.svg">
						<p class="mr-2 d-none align-self-center d-lg-inline text-gray-600 small">{{ $top_earner['username'] }}<br>${{ number_format($top_earner['profit']) }}</p>
					</div>
					@endforeach
				</div>
			</div>
			<div class="card mb-4 py-3 border-bottom-primary">
				<div class="card-body small">
					<span class="txt-md font-weight-bold">Your Statistics</span><br><br>
					Highest Amount: ${{ number_format($highest_amount) }} <br>
					Lowest Amount: ${{ number_format($lowest_amount) }} <br>
					Total Amount: ${{ number_format($total_amount) }}<br>
					Highest Profit: ${{ number_format($highest_profit) }} <br>
					Lowest Profit: ${{ number_format($lowest_profit) }}<br>
					Total Profit: ${{ number_format($total_profit) }}<br>
					Highest Bonus: ${{ number_format($highest_bonus) }}<br>
					Lowest Bonus: ${{ number_format($lowest_bonus) }}<br>
					Total Bonus: ${{ number_format($total_bonus) }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection