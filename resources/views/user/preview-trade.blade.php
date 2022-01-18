@extends('layouts.user')

@section('content')
<div class="container">
	<div class="card bg-light text-black shadow mb-3">
		<div class="card-body">
			<p class="font-weight-bold">Name: {{ $plan['plan_name'] }}</p>
			<div class="text-black-50 small">Duration: {{ $plan['plan_duration'] }} Days </div>
			<div class="text-black-50 small">Amount: ${{ $amount }}</div>
			<div class="text-black-50 small">Interest: ${{ $interest }}</div>
			<form action="{{ route('user.invest.create') }}" method="POST">
				<input type="text" name="plan_id" value="{{ $plan['id'] }}" hidden>
				<input type="text" name="amount" value="{{ $amount }}" hidden>
				@csrf
				<div class="row mt-5">
					<button type="submit" class="btn btn-primary btn-icon-split shadow ml-3">
						<span class="icon txt-sm text-white-50">
							<i class="fas fa-copy"></i>
						</span>
						<span class="txt-sm text">Confirm</span>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection