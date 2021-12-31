@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Earnings</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>AMOUNT</th>
							<th>USERNAME</th>
							<th>FROM</th>
							<th>PLAN</th>
							<th>CREATED</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>AMOUNT</th>
							<th>USERNAME</th>
							<th>FROM</th>
							<th>PLAN</th>
							<th>CREATED</th>
						</tr>
					</tfoot>
					<tbody class="small">
						<tr>
							<td>1</td>
							<td>$100</td>
							<td>kelennamdi07</td>
							<td>kelennamdi07</td>
							<td>Starter Plan</td>
							<td>2021/12/19 06:24:PM</td>
						</tr>
						<tr>
							<td>1</td>
							<td>$100</td>
							<td>kelennamdi07</td>
							<td>kelennamdi07</td>
							<td>Starter Plan</td>
							<td>2021/12/19 06:24:PM</td>
						</tr>
						<tr>
							<td>1</td>
							<td>$100</td>
							<td>kelennamdi07</td>
							<td>kelennamdi07</td>
							<td>Starter Plan</td>
							<td>2021/12/19 06:24:PM</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection