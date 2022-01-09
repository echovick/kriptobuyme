@extends('layouts.user')

@section('content')
<div class="container-fluid">
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Audit Logs</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>REFERENCE ID</th>
							<th>LOG</th>
							<th>CREATED</th>
							<th>UPDATED</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>REFERENCE ID</th>
							<th>LOG</th>
							<th>CREATED</th>
							<th>UPDATED</th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($user_audit_logs as $user_audit_log)
						<tr>
							<td>{{ $user_audit_log['id'] }}</td>
							<td>#{{ $user_audit_log['reference_id'] }}</td>
							<td>{{ $user_audit_log['log'] }}</td>
							<td>{{ $user_audit_log['created_at'] }} </td>
							<td>{{ $user_audit_log['updated_at'] }} </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection