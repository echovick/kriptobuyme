@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row ml-2 mb-3">
		<a href="#" class="btn btn-primary btn-icon-split shadow">
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
							<td><span class="badge badge-{{ $coupon['status'] == 'Active' ? 'success' : 'warning' }} p-2">Active</span></td>
							<td>{{ $coupon['created_at'] }}</td>
							<td>{{ $coupon['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Edit</a>
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