@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row ml-2 mb-3">
		<a href="#" class="btn btn-primary btn-icon-split shadow" data-toggle="modal" data-target="#addCoupon">
			<span class="icon txt-sm text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="txt-sm text">Create Coupon</span>
		</a>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Coupons</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>CODE</th>
							<th>PERCENTAGE OFF</th>
							<th>STATUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>CODE</th>
							<th>PERCENTAGE OFF</th>
							<th>STATUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($coupons as $coupon)
						<tr>
							<td>{{ $coupon['id'] }}</td>
							<td>{{ $coupon['coupon_code'] }}</td>
							<td>{{ number_format($coupon['percentage_off']) }}%</td>
							<td><span class="badge badge-{{ $coupon['status'] == 'Active' ? 'success' : 'warning' }} p-2">{{ $coupon['status'] }}</span></td>
							<td>{{ $coupon['created_at'] }}</td>
							<td>{{ $coupon['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#editCoupon{{ $coupon['id'] }}">Edit</a>
										@if ($coupon['status'] == 'Active')
										<form action="{{ route('admin.coupon.deactivate', $coupon['id']) }}" method="POST">
											@csrf
											<button type="submit" class="dropdown-item" href="#">Deactivate</button>
										</form>
										@elseif ($coupon['status'] == "Inactive")
										<form action="{{ route('admin.coupon.activate', $coupon['id']) }}" method="POST">
											@csrf
											<button type="submit" class="dropdown-item" href="#">Activate</button>
										</form>
										@endif
										<form action="{{ route('admin.coupon.delete', $coupon['id']) }}" method="POST">
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
<div class="modal fade" id="addCoupon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Add Deposit Method</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('admin.coupon.create') }}" method="POST">
					@csrf
					<input type="text" name="admin_id" value="{{ auth()->user()->id }}" hidden>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Coupon Code:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Coupon Code" name="coupon_code">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Percentage Off:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Percentage Off" name="percentage_off">
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

@foreach ($coupons as $coupon)
<div class="modal fade" id="editCoupon{{ $coupon['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Add Deposit Method</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('admin.coupon.update', $coupon['id']) }}" method="POST">
					@csrf
					<input type="text" name="admin_id" value="{{ auth()->user()->id }}" hidden>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Coupon Code:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Coupon Code" value="{{ $coupon['coupon_code'] }}" name="coupon_code">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Percentage Off:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Percentage Off" value="{{ $coupon['percentage_off'] }}" name="percentage_off">
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