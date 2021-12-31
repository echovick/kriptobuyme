@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Transfer logs</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>REF</th>
							<th>SENDER</th>
							<th>RECEIVER</th>
							<th>AMOUNT</th>
							<th>CHARGE</th>
							<th>STATUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>REF</th>
							<th>SENDER</th>
							<th>RECEIVER</th>
							<th>AMOUNT</th>
							<th>CHARGE</th>
							<th>STATUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
						</tr>
					</tfoot>
					<tbody class="small">
						<tr>
							<td>1</td>
							<td>UDKmNQtaw4eC6jYM</td>
							<td>jamespatrick.btc@gmail.com</td>
							<td>kelennamdi07@gmail.com</td>
							<td>$100</td>
							<td>$10</td>
							<td><span class="badge badge-success p-2">Successfull</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
						</tr>
						<tr>
							<td>1</td>
							<td>UDKmNQtaw4eC6jYM</td>
							<td>jamespatrick.btc@gmail.com</td>
							<td>kelennamdi07@gmail.com</td>
							<td>$100</td>
							<td>$10</td>
							<td><span class="badge badge-info p-2">Returned</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
						</tr>
						<tr>
							<td>1</td>
							<td>UDKmNQtaw4eC6jYM</td>
							<td>jamespatrick.btc@gmail.com</td>
							<td>kelennamdi07@gmail.com</td>
							<td>$100</td>
							<td>$10</td>
							<td><span class="badge badge-success p-2">Successfull</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
						</tr>
						<tr>
							<td>1</td>
							<td>UDKmNQtaw4eC6jYM</td>
							<td>jamespatrick.btc@gmail.com</td>
							<td>kelennamdi07@gmail.com</td>
							<td>$100</td>
							<td>$10</td>
							<td><span class="badge badge-info p-2">Returned</span></td>
							<td>2021/12/19 06:24:PM</td>
							<td>2021/12/19 06:24:PM</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection