@extends('layouts.user')

@section('content')
<div class="container-fluid">
	<div class="row ml-2">
		<a href="#" class="btn btn-primary btn-icon-split shadow" data-toggle="modal" data-target="#transfer">
			<span class="icon txt-sm text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="txt-sm text">Send Money</span>
		</a>
	</div>
	<div class="row mt-3">
		<div class="col-md-8">
			<div class="row">
				@foreach ($user_transfers as $user_transfer)
				<div class="col-md-6">
					<div class="card mb-4 py-3 border-bottom-primary">
						<div class="card-body small">
							<span class="txt-md font-weight-bold">#{{ $user_transfer['reference_id'] }} </span><br><br>
							Amount: ${{ number_format($user_transfer['amount']) }} <br>
							Charge: ${{ number_format($user_transfer['charge']) }}<br>
							Email: {{ $user_transfer->receiver->username }}<br>
							Status: {{ $user_transfer['status'] }} <br>
							Created: {{ $user_transfer['created_at'] }}<br>
							Updated: {{ $user_transfer['updated_at'] }}<br>
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
						<p class="small"><i class="fas fa-google-wallet mr-1"></i> Sent<br>
							<span class="text-lg font-weight-bold">USD {{ number_format($total_sent) }}</span>
						</p>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-6">
							Pending
						</div>
						<div class="col-6 text-right text-primary">
						USD {{ number_format($total_pending) }}
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							Returned
						</div>
						<div class="col-6 text-right text-primary">
							USD {{ number_format($total_returned) }}
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							Total
						</div>
						<div class="col-6 text-right text-primary">
							USD {{ number_format($total_sent) }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Modals --}}
<div class="modal fade" id="transfer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content py-3">
			<form action="{{ route('user.transfer.new') }}" method="POST" class="px-5">
				@csrf
				<p class="mx-auto text-center text-dark font-weight-bold">Transfer Money</p>
				<p class="mx-auto text-center text-dark font-weight-bold small">Trasfer Charge is 5% per transaction, if user is not a member of this platform, registration is required to claim the money, money will be refunded after 5 days if the money is not claimed</p>
				<div class="form-group px-5 mt-5 row">
					<span>Email: </span>
					<input type="email" class="px-1 mx-2" name="email" placeholder="" style="border:none; outline:none; border-bottom:1px solid rgb(78, 78, 78); width:70%;" required>
				</div>
				<div class="form-group px-5 mt-5 row">
					<span>Amount: </span>
					<input type="number" class="px-1 mx-2" name="amount" placeholder="" style="border:none; outline:none; border-bottom:1px solid rgb(78, 78, 78); width:70%;">
				</div>
				<div class="row mt-5 py-3 ">
					<button type="submit" class="btn btn-primary btn-sm mx-auto">Transfer</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection