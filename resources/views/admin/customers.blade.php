@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Users</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>USERNAME</th>
							<th>EMAIL</th>
							<th>STATUS</th>
							<th>BALANCE</th>
							<th>PROFIT</th>
							<th>REFERAL BONUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th></th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>USERNAME</th>
							<th>EMAIL</th>
							<th>STATUS</th>
							<th>BALANCE</th>
							<th>PROFIT</th>
							<th>REFERAL BONUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th></th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($users as $user)
						<tr>
							<td>{{ $user['id'] }}</td>
							<td>{{ $user['first_name'].' '.$user['last_name'] }}</td>
							<td>{{ $user['username'] }}</td>
							<td>{{ $user['email'] }}</td>
							<td><span class="badge badge-{{ $user['status'] == 'Active' ? 'primary' : 'danger' }} p-2">{{ $user['status'] }}</span></td>
							<td>${{ number_format($user['balance']) }}</td>
							<td>${{ number_format($user['profit']) }}</td>
							<td>${{ number_format($user['referal_bonus']) }}</td>
							<td>{{ $user['created_at'] }}</td>
							<td>{{ $user['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
										aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="{{ route('admin.customers.edit', ['id' => $user['id']]) }}">Manage Customers</a>
										<a class="dropdown-item" href="{{ route('admin.customer.mail', ['id' => $user['id']]) }}">Send Email</a>
										@if ($user['status'] == 'Blocked')
										<form action="{{ route('admin.customer.activate', ['id' => $user['id']]) }}" method="POST">
										@csrf
										<button class="dropdown-item" href="">Activate</button>
										</form>											 
										@else
										<form action="{{ route('admin.customer.block', ['id' => $user['id']]) }}" method="POST">
										@csrf
										<button class="dropdown-item" href="">Block</button>
										</form>
										@endif
										<form action="{{ route('admin.customer.delete', $user['id']) }}" method="POST">
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