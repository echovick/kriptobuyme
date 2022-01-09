@extends('layouts.user')

@section('content')
<div class="container-fluid">
	<div class="row ml-2">
		<a href="#" class="btn btn-primary btn-icon-split shadow">
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
@endsection