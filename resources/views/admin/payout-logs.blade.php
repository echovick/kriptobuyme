@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Payout Logs</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>AMOUNT</th>
							<th>DETAILS</th>
							<th>METHOD</th>
							<th>STATUS</th>
							<th>TYPE</th>
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
							<th>DETAILS</th>
							<th>METHOD</th>
							<th>STATUS</th>
							<th>TYPE</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</tfoot>
					<tbody class="small">
						<tr>
							<td>1</td>
							<td>Ahmet Demirbas</td>
							<td>$2,000</td>
							<td>1DuE7UWeRmYZWTgVJiB6d1Tbgj9f8aGitm</td>
							<td>Bitcoin Cash</td>
							<td><span class="badge badge-danger p-2">Declined</span></td>
							<td><span class="badge badge-primary p-2">ACCOUNT BALANCE</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
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
						<tr>
							<td>1</td>
							<td>Ahmet Demirbas</td>
							<td>$2,000</td>
							<td>1DuE7UWeRmYZWTgVJiB6d1Tbgj9f8aGitm</td>
							<td>Bitcoin Cash</td>
							<td><span class="badge badge-danger p-2">Declined</span></td>
							<td><span class="badge badge-primary p-2">ACCOUNT BALANCE</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
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
						<tr>
							<td>1</td>
							<td>Ahmet Demirbas</td>
							<td>$2,000</td>
							<td>1DuE7UWeRmYZWTgVJiB6d1Tbgj9f8aGitm</td>
							<td>Bitcoin Cash</td>
							<td><span class="badge badge-danger p-2">Declined</span></td>
							<td><span class="badge badge-primary p-2">ACCOUNT BALANCE</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
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
						<tr>
							<td>1</td>
							<td>Ahmet Demirbas</td>
							<td>$2,000</td>
							<td>1DuE7UWeRmYZWTgVJiB6d1Tbgj9f8aGitm</td>
							<td>Bitcoin Cash</td>
							<td><span class="badge badge-danger p-2">Declined</span></td>
							<td><span class="badge badge-primary p-2">ACCOUNT BALANCE</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
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
						<tr>
							<td>1</td>
							<td>Ahmet Demirbas</td>
							<td>$2,000</td>
							<td>1DuE7UWeRmYZWTgVJiB6d1Tbgj9f8aGitm</td>
							<td>Bitcoin Cash</td>
							<td><span class="badge badge-danger p-2">Declined</span></td>
							<td><span class="badge badge-primary p-2">ACCOUNT BALANCE</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
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
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection