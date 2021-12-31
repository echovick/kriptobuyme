@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row ml-2 mb-3">
		<a href="#" class="btn btn-primary btn-icon-split shadow">
			<span class="icon txt-sm text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="txt-sm text">Create Plan</span>
		</a>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Plans</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>DAILY %</th>
							<th>MIN</th>
							<th>MAX</th>
							<th>DURATION</th>
							<th>REFERRAL</th>
							<th>BONUS</th>
							<th>STATUS</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>DAILY %</th>
							<th>MIN</th>
							<th>MAX</th>
							<th>DURATION</th>
							<th>REFERRAL</th>
							<th>BONUS</th>
							<th>STATUS</th>
							<th>ACTION</th>
						</tr>
					</tfoot>
					<tbody class="small">
						<tr>
							<td>1</td>
							<td>STARTER/COMPLEX</td>
							<td>1.5%</td>
							<td>$100</td>
							<td>$2,000</td>
							<td>1Day(s)</td>
							<td>1.5%</td>
							<td>1%</td>
							<td><span class="badge badge-success p-2">Active</span></td>
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
						<tr>
							<td>1</td>
							<td>STARTER/COMPLEX</td>
							<td>1.5%</td>
							<td>$100</td>
							<td>$2,000</td>
							<td>1Day(s)</td>
							<td>1.5%</td>
							<td>1%</td>
							<td><span class="badge badge-success p-2">Active</span></td>
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
						<tr>
							<td>1</td>
							<td>STARTER/COMPLEX</td>
							<td>1.5%</td>
							<td>$100</td>
							<td>$2,000</td>
							<td>1Day(s)</td>
							<td>1.5%</td>
							<td>1%</td>
							<td><span class="badge badge-success p-2">Active</span></td>
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
						<tr>
							<td>1</td>
							<td>STARTER/COMPLEX</td>
							<td>1.5%</td>
							<td>$100</td>
							<td>$2,000</td>
							<td>1Day(s)</td>
							<td>1.5%</td>
							<td>1%</td>
							<td><span class="badge badge-success p-2">Active</span></td>
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
						<tr>
							<td>1</td>
							<td>STARTER/COMPLEX</td>
							<td>1.5%</td>
							<td>$100</td>
							<td>$2,000</td>
							<td>1Day(s)</td>
							<td>1.5%</td>
							<td>1%</td>
							<td><span class="badge badge-success p-2">Active</span></td>
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
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection