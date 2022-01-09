@extends('layouts.user')

@section('content')
<div class="container-fluid">
	<div class="row ml-2">
		<a href="#" class="btn btn-primary btn-icon-split shadow">
			<span class="icon txt-sm text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="txt-sm text">Open Ticket</span>
		</a>
	</div>

	<div class="card shadow mb-4 mt-3 ml-1">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tickets</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>PRIORITY</th>
							<th>TICKET ID</th>
							<th>STATUS</th>
							<th>SUBJECT</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th></th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>PRIORITY</th>
							<th>TICKET ID</th>
							<th>STATUS</th>
							<th>SUBJECT</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th></th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($user_tickets as $user_ticket)
						<tr>
							<td>{{ $user_ticket['id'] }}</td>
							<td>{{ $user_ticket['priority'] }}</td>
							<td>{{ $user_ticket['ticket_id'] }}</td>
							<td><span class="badge badge-{{ $user_ticket['status'] == 'Open' ? 'success' : 'danger' }} p-2">{{ $user_ticket['status'] }}</span></td>
							<td>{{ $user_ticket['subject'] }}</td>
							<td>{{ $user_ticket['created_at'] }}</td>
							<td>{{ $user_ticketp['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
										aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Manage Ticket</a>
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