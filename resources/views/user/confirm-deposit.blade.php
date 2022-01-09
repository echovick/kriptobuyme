@extends('layouts.user')

@section('content')
<div class="container">
	<div class="card bg-light text-black shadow mb-3">
		<div class="card-body">
			<p class="font-weight-bold">Deposit Request Sent Successfully</p>
			<div class="text-black-50 small">You're to pay ${{ $amount }},  equvalent of {{ $deposit_method_details['display_name'] }} to the address: {{ $deposit_method_details['method_address'] }}</div>
			<a class="btn btn-primary btn-sm mt-3" href="{{ route('user.deposit') }}">Ok</a>
		</div>
	</div>
</div>
@endsection