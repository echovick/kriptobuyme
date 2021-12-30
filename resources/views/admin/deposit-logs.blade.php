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
							<th>AMOUNT</th>
							<th>METHOD</th>
							<th>REF</th>
							<th>CHARGE</th>
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
							<th>AMOUNT</th>
							<th>METHOD</th>
							<th>REF</th>
							<th>CHARGE</th>
							<th>STATUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</tfoot>
					<tbody class="small">
						<tr>
							<td>1</td>
							<td>Hua Jun</td>
							<td>$5,077</td>
							<td>Bitcoin</td>
							<td>tlcCR3mkFssGUxi8	</td>
							<td>$10</td>
							<td><span class="badge badge-danger p-2">Pending</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
										aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Delete</a>
										<a class="dropdown-item" href="#">Decline</a>
										<a class="dropdown-item" href="#">Approve</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Hua Jun</td>
							<td>$5,077</td>
							<td>Bitcoin</td>
							<td>tlcCR3mkFssGUxi8	</td>
							<td>$10</td>
							<td><span class="badge badge-danger p-2">Pending</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
										aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Delete</a>
										<a class="dropdown-item" href="#">Decline</a>
										<a class="dropdown-item" href="#">Approve</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Hua Jun</td>
							<td>$5,077</td>
							<td>Bitcoin</td>
							<td>tlcCR3mkFssGUxi8	</td>
							<td>$10</td>
							<td><span class="badge badge-danger p-2">Pending</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
										aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Delete</a>
										<a class="dropdown-item" href="#">Decline</a>
										<a class="dropdown-item" href="#">Approve</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Hua Jun</td>
							<td>$5,077</td>
							<td>Bitcoin</td>
							<td>tlcCR3mkFssGUxi8	</td>
							<td>$10</td>
							<td><span class="badge badge-danger p-2">Pending</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
										aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Delete</a>
										<a class="dropdown-item" href="#">Decline</a>
										<a class="dropdown-item" href="#">Approve</a>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Hua Jun</td>
							<td>$5,077</td>
							<td>Bitcoin</td>
							<td>tlcCR3mkFssGUxi8	</td>
							<td>$10</td>
							<td><span class="badge badge-danger p-2">Pending</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
										aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Delete</a>
										<a class="dropdown-item" href="#">Decline</a>
										<a class="dropdown-item" href="#">Approve</a>
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