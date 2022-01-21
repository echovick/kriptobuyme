@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Deposits</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>AMOUNT</th>
							<th>METHOD</th>
							<th>REF</th>
							<th>CHARGE</th>
							<th>STATUS</th>
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
							<th>METHOD</th>
							<th>REF</th>
							<th>CHARGE</th>
							<th>STATUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($deposits as $deposit)
						<tr>
							<td>{{ $deposit['id'] }}</td>
							<td>{{ $deposit->user->username }}</td>
							<td>{{ $deposit['amount'] }}</td>
							<td>{{ $deposit->depositMethod->name }}</td>
							<td>{{ $deposit['reference_id'] }}</td>
							<td>${{ $deposit['amount'] }}</td>
							<td><span class="badge badge-{{ $deposit['status'] == 'Active' ? 'primary' : 'danger' }} p-2">{{ $deposit['status'] }}</span></td>
							<td>{{ $deposit['created_at'] }}</td>
							<td>{{ $deposit['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<form action="{{ route('admin.deposit.delete', $deposit['id']) }}" method="POST">
											@csrf
											@method('DELETE')
											<button type="submit" class="dropdown-item" href="#">Delete</button>
										</form>
										@if ($deposit['status'] == 'Pending')
										<form action="{{ route('admin.deposit.decline', $deposit['id']) }}" method="POST">
											@csrf
											<button type="submit" class="dropdown-item" href="#">Decline</button>
										</form>
										<form action="{{ route('admin.deposit.approve', $deposit['id']) }}" method="POST">
											@csrf
											<button type="submit" class="dropdown-item" href="#">Approve</button>
										</form>
										@endif
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