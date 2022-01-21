@php
use App\Models\User;
use App\Models\TradeHistory;
@endphp
@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Earnings</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>AMOUNT</th>
							<th>USERNAME</th>
							<th>FROM</th>
							<th>PLAN</th>
							<th>CREATED</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>AMOUNT</th>
							<th>USERNAME</th>
							<th>FROM</th>
							<th>PLAN</th>
							<th>CREATED</th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($users as $user)
							@php
							$referer = $user['referer'];
							@endphp		
							@if($referer !== 0)
								{{-- user has referer, get referer --}}
								@php
								$this_user = User::where('id', $referer)->first();
								$username = $this_user->username;
								$trades = TradeHistory::where('user_id', $user['id'])->get();
								@endphp
								@foreach ($trades as $trade)
								@php
									$referral_percentage = $trade->plan->referral_percentage;
									$referal_amount = ($referral_percentage / 100) * $trade['amount'];
								@endphp
								<tr>
									<td>{{ $trade['id'] }}</td>
									<td>${{ $referal_amount }}</td>
									<td>{{ $username }}</td>
									<td>{{ $trade->user->username }}</td>
									<td>{{ $trade->plan->plan_name }}</td>
									<td>{{ $trade['created_at'] }}</td>
								</tr>
								@endforeach
							@endif 
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection