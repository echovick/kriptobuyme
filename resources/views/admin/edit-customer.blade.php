@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	@if (isset($_GET['successfull']))
	<div class="alert alert-info">
		<p class="small">User Was updated successfully</p>
	</div>
	@endif
	<div class="row">
		<div class="col-md-8">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Update account information</h6>
				</div>
				<div class="card-body">
					<form action="{{ route('admin.customers.update', ['id' => $customer->id]) }}" method="POST">
						@csrf
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Full Name</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										value="{{ $customer->first_name }}" name="first_name">
								</div>
								<div class="col">
									<input type="text" class="form-control txt-md"
										value="{{ $customer->last_name }}" name="last_name">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Username</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										value="{{ $customer->username }}" name="username">
								</div>
							</div>
						</div>
						{{-- <div class="mb-3">
							<label for="" class="font-weight-bold small">Phone Number</label>
							<div class="row">
								<div class="col">
									<input type="number" class="form-control txt-md" id="email"
										placeholder="Enter email" name="email">
								</div>
							</div>
						</div> --}}
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Email</label>
							<div class="row">
								<div class="col">
									<input type="email" class="form-control txt-md" id="email"
										value="{{ $customer->email }}" name="email">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">City</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										value="{{ $customer->city }}" name="city">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Country</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										value="{{ $customer->country }}" name="country">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Balance</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">$</span>
								</div>
								<input type="text" class="form-control txt-ms" name="balance" value="{{ $customer->balance }}">
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Status</label>
							<div class="custom-control custom-checkbox mb-1">
								<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
								<label class="custom-control-label" for="customCheck">Email verification</label>
							</div>
							<div class="custom-control custom-checkbox mb-1">
								<input type="checkbox" class="custom-control-input" id="customCheck1" name="example2">
								<label class="custom-control-label" for="customCheck1">2fa security</label>
							</div>
						</div>
						<div class="row mt-5">
							<button type="submit" href="#" class="btn btn-primary btn-icon-split shadow ml-auto">
								<span class="icon txt-sm text-white-50">
									<i class="fas fa-check-double"></i>
								</span>
								<span class="txt-sm text">Save Changes</span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-light text-black shadow mb-3">
				<div class="card-body text-center">
					<p class="font-weight-bold">Account Photo</p>
					<img class="img-profile rounded-circle col-3 mt-2" src="../assets/img/undraw_profile.svg">
				</div>
			</div>
			<div class="card bg-light text-black shadow mb-3">
				<div class="card-body">
					<p class="font-weight-bold">Account Information</p>
					<div class="text-black-50 small ">
						Joined: {{ $customer->created_at }} <br>
						Last Updated: {{ $customer->updated_at }} <br>
						IP Address: {{ $client_ip }} <br>
					</div>
				</div>
			</div>
			<div class="card bg-light text-black shadow mb-3">
				<div class="card-body text-center">
					<p class="font-weight-bold">Kyc verification</p>
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr class="small">
									<th>#</th>
									<th>STATUS</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody class="small">
								<tr>
									<td>1</td>
									<td>No File</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection