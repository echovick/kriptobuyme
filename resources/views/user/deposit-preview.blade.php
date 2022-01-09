@extends('layouts.user')

@section('content')
<div class="container">
	<div class="card bg-light text-black shadow mb-3">
		<div class="card-body">
			<p class="font-weight-bold">{{ $deposit_method_name->display_name }}</p>
			<div class="text-black-50 small">Amount: ${{ $amount }} </div>
			<div class="text-black-50 small">Charge: ${{ $deposit_method_charge->fixed_charge_amount }}</div>
			<div class="text-black-50 small">Total: ${{ intval($deposit_method_charge->fixed_charge_amount) + intval($amount) }}</div>
			<form action="{{ route('user.deposit.create') }}" method="POST">
				<input type="text" name="deposit_method" value="{{ $deposit_method }}" hidden>
				<input type="text" name="amount" value="{{ $amount }}" hidden>
				<input type="text" name="charge" value="{{ $deposit_method_charge->fixed_charge_amount }}" hidden>
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