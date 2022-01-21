@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row ml-2 mb-3">
		<a href="#" class="btn btn-primary btn-icon-split shadow">
			<span class="icon txt-sm text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="txt-sm text" data-toggle="modal" data-target="#addPlan">Create Plan</span>
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
						@foreach ($plans as $plan)
						<tr>
							<td>{{ $plan['id'] }}</td>
							<td>{{ $plan['plan_name'] }}</td>
							<td>{{ $plan['daily_percentage'] }}%</td>
							<td>${{ $plan['min_amount'] }}</td>
							<td>${{ $plan['max_amount'] }}</td>
							<td>{{ $plan['plan_duration'] }}Day(s)</td>
							<td>{{ $plan['referral_percentage'] }}%</td>
							<td>{{ $plan['bonus_percentage'] }}%</td>
							<td><span class="badge badge-{{ $plan['status'] == 'Active' ? 'primary' : 'warning' }} p-2">{{ $plan['status'] }}</span></td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#editPlan{{ $plan['id'] }}">Edit</a>
										@if ($plan['status'] == 'Active')
										<form action="{{ route('admin.plan.deactivate', $plan['id']) }}" method="POST">
											@csrf
											<button type="submit" class="dropdown-item" href="#">Deactivate</button>
										</form>
										@elseif ($plan['status'] == "Inactive")
										<form action="{{ route('admin.plan.activate', $plan['id']) }}" method="POST">
											@csrf
											<button type="submit" class="dropdown-item" href="#">Activate</button>
										</form>
										@endif
										<form action="{{ route('admin.plan.delete', $plan['id']) }}" method="POST">
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
<div class="modal fade" id="addPlan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Add Create Investment Plan</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('admin.plan.create') }}" method="POST">
					@csrf
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Plan Name:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Plan Name" name="plan_name">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Daily Percentage:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Percentage" name="daily_percentage">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<div class="row">
							<div class="col">
								<label for="" class="font-weight-bold small">Minimum Amount:</label>
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Minimum Investment Amount" name="min_amount">
							</div>
							<div class="col">
								<label for="" class="font-weight-bold small">Maximum Amount:</label>
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Maximum Investment Amount" name="max_amount">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Plan Duration:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Investment Duration" name="plan_duration">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<div class="row">
							<div class="col">
								<label for="" class="font-weight-bold small">Referral Percentage:</label>
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Referal Percentage" name="referral_percentage">
							</div>
							<div class="col">
								<label for="" class="font-weight-bold small">Bonus Percentage:</label>
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Bonus Percentage" name="bonus_percentage">
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

@foreach ($plans as $plan)
<div class="modal fade" id="editPlan{{ $plan['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Add Create Investment Plan</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('admin.plan.update', $plan['id']) }}" method="POST">
					@csrf
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Plan Name:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									value="{{ $plan['plan_name'] }}" name="plan_name">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Daily Percentage:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Percentage" value="{{ $plan['daily_percentage'] }}" name="daily_percentage">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<div class="row">
							<div class="col">
								<label for="" class="font-weight-bold small">Minimum Amount:</label>
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Minimum Investment Amount" value="{{ $plan['min_amount'] }}" name="min_amount">
							</div>
							<div class="col">
								<label for="" class="font-weight-bold small">Maximum Amount:</label>
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Maximum Investment Amount" value="{{ $plan['max_amount'] }}" name="max_amount">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Plan Duration:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Investment Duration" value="{{ $plan['plan_duration'] }}" name="plan_duration">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<div class="row">
							<div class="col">
								<label for="" class="font-weight-bold small">Referral Percentage:</label>
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Referal Percentage" value="{{ $plan['referral_percentage'] }}" name="referral_percentage">
							</div>
							<div class="col">
								<label for="" class="font-weight-bold small">Bonus Percentage:</label>
								<input type="text" class="form-control txt-md" id="name"
									placeholder="Enter Bonus Percentage" value="{{ $plan['bonus_percentage'] }}" name="bonus_percentage">
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