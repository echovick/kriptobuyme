@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row ml-2 mb-3">
		<a href="#" class="btn btn-primary btn-icon-split shadow" data-toggle="modal" data-target="#addDepositMethod">
			<span class="icon txt-sm text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="txt-sm text">Add Deposit Method</span>
		</a>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Payment gateways</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>MAIN NAME</th>
							<th>NAME FOR USERS</th>
							<th>STATUS</th>
							<th>UPDATED</th>
							<th></th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>MAIN NAME</th>
							<th>NAME FOR USERS</th>
							<th>STATUS</th>
							<th>UPDATED</th>
							<th></th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($depositMethods as $depositMethod)
							<tr>
								<td>{{ $depositMethod->id }}</td>
								<td>{{ $depositMethod->name }}</td>
								<td>{{ $depositMethod->display_name }}</td>
								<td><span class="badge {{ $depositMethod->status == 'Active' ? 'badge-primary' : 'badge-danger'  }} badge-primary p-2">{{ $depositMethod->status }}</span></td>
								<td>{{ $depositMethod->updated_at }}</td>
								<td>
									<div class="dropdown no-arrow">
										<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
											<button type="submit" class="dropdown-item" href="#" data-toggle="modal" data-target="#addDepositMethod{{ $depositMethod['id'] }}">Edit</button>
											<form action="{{ route('admin.depositmethod.delete', $depositMethod['id']) }}" method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" class="dropdown-item" href="#">Delete</button>
											</form>
											@if ($depositMethod['status'] == 'Active')
											<form action="{{ route('admin.depositmethod.deactivate', $depositMethod['id']) }}" method="POST">
												@csrf
												<button type="submit" class="dropdown-item" href="#">Deactivate</button>
											</form>
											@elseif ($depositMethod['status'] == 'Inactive')
											<form action="{{ route('admin.depositmethod.activate', $depositMethod['id']) }}" method="POST">
												@csrf
												<button type="submit" class="dropdown-item" href="#">Activate</button>
											</form>
											@endif
										</div>
									</div>
								</td>
							</tr>
						@endforeach
				</table>
			</div>
		</div>
	</div>
</div>

{{-- Modals --}}
<div class="modal fade" id="addDepositMethod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Add Deposit Method</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('deposit-method.create') }}" method="POST">
					@csrf
					<input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Name:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Name" name="name">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Display Name:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="display_name"
									placeholder="Enter Display Name" name="display_name">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Minimum Amount:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="min_amount"
									placeholder="Enter Minimum Amount" name="min_amount">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Maximum Amount:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="email"
									placeholder="Enter Maximum Amount" name="max_amount">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Charge:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="email"
									placeholder="Fixed Amount (i.e 1$)" name="charge_amount">
							</div>
							<div class="col">
								<input type="text" class="form-control txt-md" id="email"
									placeholder="Percentage Charge (i.e 2.5%)" name="charge_percentage">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Deposit Method Address:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="email"
									placeholder="EnterYour Crypto Address Here" name="method_address">
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

@foreach ($depositMethods as $depositMethod)
<div class="modal fade" id="addDepositMethod{{ $depositMethod['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Add Deposit Method</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('admin.deposit-method.update', $depositMethod['id']) }}" method="POST">
					@csrf
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Name:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									value="{{ $depositMethod['name'] }}" name="name">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Display Name:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="display_name"
									value="{{ $depositMethod['display_name'] }}" name="display_name">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Minimum Amount:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="min_amount"
									value="{{ $depositMethod['min'] }}" name="min_amount">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Maximum Amount:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="email"
									value="{{ $depositMethod['max'] }}" name="max_amount">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Charge:</label>
						<div class="row">
							<div class="col">
								<span class="small">Fixed Charge Amount ($1)</span>
								<input type="text" class="form-control txt-md" id="email"
									value="{{ $depositMethod['fixed_charge_amount'] }}" name="charge_amount">
							</div>
							<div class="col">
								<span class="small">Percentage Charge Amount (1%)</span>
								<input type="text" class="form-control txt-md" id="email"
									value="{{ $depositMethod['percentage_charge'] }}" name="charge_percentage">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Deposit Method Address:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="email"
									value="{{ $depositMethod['method_address'] }}" name="method_address">
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
@endforeach
@endsection