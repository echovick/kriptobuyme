@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Open Trades</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>REF</th>
							<th>NAME</th>
							<th>AMOUNT</th>
							<th>PLAN</th>
							<th>DAILY PERCENT</th>
							<th>DURATION</th>
							<th>PROFIT</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>REF</th>
							<th>NAME</th>
							<th>AMOUNT</th>
							<th>PLAN</th>
							<th>DAILY PERCENT</th>
							<th>DURATION</th>
							<th>PROFIT</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($closed_trades as $closed_trade)
						<tr>
							<td>{{ $closed_trade['id'] }}</td>
							<td>{{ $closed_trade['reference_id'] }}</td>
							<td>{{ $closed_trade->user->username }}</td>
							<td>${{ $closed_trade['amount'] }}</td>
							<td>{{ $closed_trade->plan->plan_name }}</td>
							<td>{{ $closed_trade['daily_percentage'] }}%</td>
							<td>{{ $closed_trade['trade_duration'] }}Day(s)</td>
							<td>${{ $closed_trade['trade_profit'] }}</td>
							<td>{{ $closed_trade['created_at'] }}</td>
							<td>{{ $closed_trade['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<form action="{{ route('admin.trade.delete', $closed_trade['id']) }}" method="POST">
											@csrf
											@method('DELETE')
											<button type="submit" class="dropdown-item" href="#">Delete</button>
										</form>
									</div>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection