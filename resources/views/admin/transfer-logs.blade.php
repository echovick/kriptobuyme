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
							<th></th>
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
							<th></th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($transfers as $transfer)
						<tr>
							<td>{{ $transfer['id'] }}</td>
							<td>{{ $transfer['reference_id'] }}</td>
							<td>{{ $transfer->sender->email }}</td>
							<td>{{ $transfer->receiver->email }}</td>
							<td>${{ $transfer['amount'] }}</td>
							<td>${{ $transfer['charge'] }}</td>
							<td><span class="badge badge-{{ $transfer['status'] == 'Successfull' ? 'success' : 'warning' }} p-2">{{ $transfer['status'] }}</span></td>
							<td>{{ $transfer['created_at'] }}</td>
							<td>{{ $transfer['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<form action="{{ route('admin.transfer.delete', $transfer['id']) }}" method="POST">
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
@endsection