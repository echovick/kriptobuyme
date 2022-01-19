@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Messages</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>MESSAGE</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th></th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>MESSAGE</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th></th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($messages as $message)
						<tr>
							<td>{{ $message['id'] }}</td>
							<td>{{ $message->user->username }}</td>
							<td>{{ $message->user->email }}</td>
							<td>
								{{ $message['message'] }}
							</td>
							<td>{{ $message['created_at'] }}</td>
							<td>{{ $message['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Delete</a>
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