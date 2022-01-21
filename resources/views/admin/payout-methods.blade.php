@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row ml-2 mb-3">
		<a href="#" class="btn btn-primary btn-icon-split shadow">
			<span class="icon txt-sm text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="txt-sm text" data-toggle="modal" data-target="#addPayoutMethod">Create Type</span>
		</a>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Withdraw Methods</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
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
							<th>STATUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($withdrawalmethods as $withdrawalmethod)
						<tr>
							<td>{{ $withdrawalmethod['id'] }}</td>
							<td>{{ $withdrawalmethod['name'] }}</td>
							<td><span class="badge badge-{{ $withdrawalmethod['status'] == 'Active' ? 'success' : 'warning' }} p-2">{{ $withdrawalmethod['status'] }}</span></td>
							<td>{{ $withdrawalmethod['created_at'] }}</td>
							<td>{{ $withdrawalmethod['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										@if ($withdrawalmethod['status'] == 'Active')
										<form action="{{ route('admin.payout-method.deactivate', $withdrawalmethod['id']) }}" method="POST">
											@csrf
											<button type="submit" class="dropdown-item" href="#">Deactivate</button>
										</form>
										@elseif ($withdrawalmethod['status'] == "Inactive")
										<form action="{{ route('admin.payout-method.activate', $withdrawalmethod['id']) }}" method="POST">
											@csrf
											<button type="submit" class="dropdown-item" href="#">Activate</button>
										</form>
										@endif
										<form action="{{ route('admin.payout-method.delete', $withdrawalmethod['id']) }}" method="POST">
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

{{-- Modals --}}
<div class="modal fade" id="addPayoutMethod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Add Deposit Method</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('payout-method.create') }}" method="POST">
					@csrf
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Name:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Crypto Name" name="name">
							</div>
						</div>
					</div>
					<div class="row justify-content-between px-3 mt-5">
						<button class="btn btn-primary btn-icon-split shadow" type="submit">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-check-double"></i>
							</span>
							<span class="txt-sm text">Save</span>
						</button>
						<button href="#" class="btn btn-danger btn-icon-split shadow" data-dismiss="modal">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-times"></i>
							</span>
							<span class="txt-sm text">Cancel</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection