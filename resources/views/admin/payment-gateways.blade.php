@extends('layouts.admin')

@section('content')
<div class="container-fluid">
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
						<tr>
							<td>1</td>
							<td>BNB</td>
							<td>BNB</td>
							<td><span class="badge badge-primary p-2">Active</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>Edit</td>
						</tr>
						<tr>
							<td>1</td>
							<td>BNB</td>
							<td>BNB</td>
							<td><span class="badge badge-primary p-2">Active</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>Edit</td>
						</tr>
						<tr>
							<td>1</td>
							<td>BNB</td>
							<td>BNB</td>
							<td><span class="badge badge-danger p-2">Disabled</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>Edit</td>
						</tr>
						<tr>
							<td>1</td>
							<td>BNB</td>
							<td>BNB</td>
							<td><span class="badge badge-primary p-2">Active</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>Edit</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection