@extends('layouts.user')

@section('content')
<div class="container-fluid">
	@if (isset($_GET['message']) && $_GET['message'] == 'successfull')
	<div class="alert alert-info">
		New Support Ticket Has been created succesfully
	</div>		 
	@endif
	<div class="row ml-2">
		<a href="#" class="btn btn-primary btn-icon-split shadow" data-toggle="modal" data-target="#open-ticket">
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
							<td>{{ $user_ticket['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
										aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="{{ route('user.ticket.edit', ['id' => $user_ticket['id']]) }}">Manage Ticket</a>
										<form action="{{ route('user.ticket.close', ['id' => $user_ticket['id']]) }}" method="POST">
											@csrf
											<button class="dropdown-item">Close Ticket</button>
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
{{-- modals --}}
<div class="modal fade" id="open-ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content py-3">
			<form action="{{ route('user.ticket.new') }}" method="POST" class="px-5">
				@csrf
				<p class="mx-auto text-center text-dark font-weight-bold">Open Ticket</p>
				<div class="form-group mt-5 row">
					<span>Subject: </span>
					<input type="text" name="subject" class="px-1 mx-2 form-control" name="email" placeholder="" style="outline:none; width:80%;" required>
				</div>
				<div class="form-group mt-4 row">
					<span>Priority: </span>
					<select name="priority" id="" class="form-control px-1 mx-2" style="outline:none; width:80%; border-radius:0px;">
						<option value="Low">Low</option>
						<option value="Medium">Medium</option>
						<option value="High">High</option>
					</select>
				</div>
				<div class="form-group mt-4 row">
					<span>Details: </span>
					<textarea name="details" class="form-control px-1 mx-2" id="" cols="20" rows="10" style="outline:none; width:80%; border-radius:0px;"></textarea>
				</div>
				<div class="row mt-5 py-3 ">
					<button type="submit" class="btn btn-primary btn-sm mx-auto">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection