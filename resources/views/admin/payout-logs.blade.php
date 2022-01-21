@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Payout Logs</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>AMOUNT</th>
							<th>DETAILS</th>
							<th>METHOD</th>
							<th>STATUS</th>
							<th>TYPE</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>AMOUNT</th>
							<th>DETAILS</th>
							<th>METHOD</th>
							<th>STATUS</th>
							<th>TYPE</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($withdrawals as $withdrawal)
						<tr>
							<td>{{ $withdrawal['id'] }}</td>
							<td>{{ $withdrawal->user->username }}</td>
							<td>${{ $withdrawal['amount'] }}</td>
							<td>{{ $withdrawal['address_details'] }}</td>
							<td>{{ $withdrawal->withdrwalMethod->name ?? '' }}</td>
							<td><span class="badge badge-{{ $withdrawal['status'] == 'Approved' ? 'success' : 'danger' }} p-2">{{ $withdrawal['status'] }}</span></td>
							<td><span class="badge badge-primary p-2">{{ strtoupper($withdrawal['type']) }}</span></td>
							<td>{{ $withdrawal['created_at'] }}</td>
							<td>{{ $withdrawal['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<form action="{{ route('admin.payout-log.delete', $withdrawal['id']) }}" method="POST">
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