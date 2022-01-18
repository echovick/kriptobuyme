@extends('layouts.user')

@section('content')
<div class="container-fluid">
	@if (isset($_GET['message']) && $_GET['message'] == 'successfull')
		<div class="alert alert-info">
			Withdrwal Request Created Successfully
		</div>
	@elseif (isset($_GET['message']) && $_GET['message'] == 'insufficient_amount')
		<div class="alert alert-info">
			Insufficent Balance
		</div>
	@endif
	<div class="row ml-2">
		<a href="#" class="btn btn-primary btn-icon-split shadow" data-toggle="modal" data-target="#withdrawal">
			<span class="icon txt-sm text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="txt-sm text">Create Withdrawal Request</span>
		</a>
	</div>
	<div class="row mt-3">
		<div class="col-md-8">
			<div class="row">
				@foreach ($user_withdrawals as $user_withdrawal)
					<div class="col-md-6">
						<div class="card mb-4 py-3 border-bottom-primary">
							<div class="card-body small">
								<span class="txt-md font-weight-bold">#{{ $user_withdrawal['reference_id'] }} </span><br><br>
								Amount: ${{ number_format($user_withdrawal['amount']) }} <br>
								Charge: ${{ number_format($user_withdrawal['charge']) }}<br>
								Method: {{ $user_withdrawal->withdrwalMethod->name ?? '' }}<br>
								Details: {{ $user_withdrawal['address_details'] }} <br>
								Status: {{ $user_withdrawal['status'] }}<br>
								Type: {{ $user_withdrawal['type'] }}<br>
								Created: {{ $user_withdrawal['created_at'] }}<br>
								Updated: {{ $user_withdrawal['updated_at'] }}<br>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-4">
			<div class="card shadow mb-4 rounded-1">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">Total Statistics</h6>
					<div class="text-center mt-4">
						<p class="small"><i class="fas fa-google-wallet mr-1"></i> Received<br>
							<span class="text-lg font-weight-bold">USD {{ number_format($total_deposit) }}</span>
						</p>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-6">
							Pending
						</div>
						<div class="col-6 text-right text-primary">
							USD {{ number_format($pending_deposit) }}
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							Total
						</div>
						<div class="col-6 text-right text-primary">
							USD {{ number_format($total_deposit) }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Modal --}}
<div class="modal fade" id="withdrawal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content py-3">
			<h5 class="text-center py-2">Withdrawal Request</h5>
			<form action="{{ route('user.withdrawal.create') }}" method="POST">
				@csrf
				<div class="form-group mx-5">
					<label for="">Amount:</label>
					<input type="text" name="amount" class="form-control form-control-sm small" placeholder="Enter Amount to withdraw">
				</div>
				<div class="form-group mx-5">
					<label for="">Type:</label>
					<select name="withdrawal_type" class="form-control form-control-sm small" id="">
						<option value="NULL">Select</option>
						<option value="profit">Trading Profit</option>
						<option value="balance">Account Balance</option>
						<option value="referal">Referal Earnings</option>
					</select>
				</div>
				<div class="form-group mx-5">
					<label for="">Method:</label>
					<select name="withdrawal_method" class="form-control form-control-sm small" id="">
						<option value="0">Select</option>
						@foreach ($withdrawal_methods as $withdrawal_method)
							<option value="{{ $withdrawal_method['id'] }}">{{ $withdrawal_method['name'] }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group mx-5">
					<label for="">Detials</label>
					<input type="text" class="form-control form-control-sm small" name="address_details" placeholder="Enter payout address details i.e: kijhuytfrweeawsedrtfyuijhytgrf	">
				</div>
				<div class="row mt-5 py-3 ">
					<button type="submit" class="btn btn-primary btn-sm mx-auto">Confirm</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection