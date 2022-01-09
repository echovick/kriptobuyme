@extends('layouts.user')

@section('content')
<div class="container-fluid">
	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		@foreach ($deposit_methods as $deposit_method)
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $deposit_method['display_name'] }}</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Limit: ${{ number_format($deposit_method['min']) }} - ${{ number_format($deposit_method['max']) }}</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Charge: ${{ $deposit_method['fixed_charge_amount'] }} + {{ number_format($deposit_method['percentage_charge']) }}%</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dice-d6 fa-2x text-gray-300"></i>
						</div>
					</div>
					<a href="#" class="btn btn-primary btn-icon-split mt-3" data-toggle="modal" data-target="#deposit{{ $deposit_method['id'] }}">
						<span class="icon small text-white-50">
							 <i class="fas fa-plus"></i>
						</span>
						<span class="text small">Deposit</span>
				  </a>
				</div>
			</div>
		</div>	 
		@endforeach
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Deposit logs</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>REFERANCE ID</th>
							<th>AMOUNT</th>
							<th>METHOD</th>
							<th>STATUS</th>
							<th>CHARGE</th>
							<th>CREATED</th>
							<th>UPDATED</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>REFERANCE ID</th>
							<th>AMOUNT</th>
							<th>METHOD</th>
							<th>STATUS</th>
							<th>CHARGE</th>
							<th>CREATED</th>
							<th>UPDATED</th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($user_deposits as $user_deposit)
							<tr>
								<td>{{ $user_deposit['id'] }}</td>
								<td>{{ $user_deposit['reference_id'] }}</td>
								<td>${{ number_format($user_deposit['amount']) }}</td>
								<td>{{ $user_deposit->depositMethod->display_name }}</td>
								<td>{{ $user_deposit['status'] }}</td>
								<td>${{ number_format($user_deposit['deposit_charge']) }}</td>
								<td>{{ $user_deposit['created_at'] }}	</td>
								<td>{{ $user_deposit['updated_at'] }}	</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

{{-- Modals --}}
@foreach ($deposit_methods as $deposit_method)
<div class="modal fade" id="deposit{{ $deposit_method['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content py-3">
			<form action="{{ route('user.deposit.preview') }}" method="POST">
				@csrf
				<input type="text" name="deposit_method" value="{{ $deposit_method['id'] }}" hidden>
				<p class="mx-auto text-center text-dark font-weight-bold">Deposit With {{ $deposit_method['display_name'] }}</p>
				<div class="row py-2">
					<i class="fas fa-dice-d6 text-gray-300 mx-auto" style="font-size:57px !important;"></i>
				</div>
				<div class="form-group px-5 mt-5 row">
					<input type="number" max="{{ number_format($deposit_method['max']) }}" min="{{ $deposit_method['min'] }}" placeholder="Enter Amount" name="amount" class="form-control no-outline mx-auto" style="width:70%;border: none; border-bottom:1px solid black; border-radius:0px;">
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