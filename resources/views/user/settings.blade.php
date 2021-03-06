@extends('layouts.user')

@section('content')
<div class="container-fluid">
	@if (isset($_GET['message']))
		@if ($_GET['message'] == 'successfull')
		<div class="alert alert-info">
			<p class="small">Saved Successfully</p>
		</div>
		@endif
		@if ($_GET['message'] == 'password_mismatch')
		<div class="alert alert-info">
			<p class="small">Password Doesn't Match</p>
		</div>
		@endif
	@endif
	<div class="row">
		<div class="col-md-8">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Your Profile</h6>
				</div>
				<div class="card-body">
					<form action="{{ route('user.settings.update') }}" method="POST">
						@csrf
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Full Name</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email" value="{{ auth()->user()->first_name }}"
										name="first_name">
								</div>
								<div class="col">
									<input type="text" class="form-control txt-md" value="{{ auth()->user()->last_name }}"
										name="last_name">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Username</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email" value="{{ auth()->user()->username }}"
										name="username">
								</div>
							</div>
						</div>
						{{-- <div class="mb-3">
							<label for="" class="font-weight-bold small">Phone Number</label>
							<div class="row">
								<div class="col">
									<input type="number" class="form-control txt-md" id="email" placeholder="Enter email"
										name="email">
								</div>
							</div>
						</div> --}}
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Email</label>
							<div class="row">
								<div class="col">
									<input type="email" class="form-control txt-md" id="email" value="{{ auth()->user()->email }}"
										name="email">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Address</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email" value="{{ auth()->user()->city }}"
										name="city">
								</div>
								<div class="col">
									<input type="text" class="form-control txt-md" id="email" value="{{ auth()->user()->country }}"
										name="country">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Password</label>
							<div class="row">
								<div class="col">
									<a href="" class="btn btn-primary btn-icon-split shadow" data-toggle="modal" data-target="#changePassword">
										<span class="icon txt-sm text-white-50">
											<i class="fas fa-key"></i>
										</span>
										<span class="txt-sm text">Change Password</span>
									</a>
								</div>
							</div>
						</div>
						<div class="custom-control custom-checkbox pt-4">
							<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
							<label class="custom-control-label" for="customCheck">Trading Earning being shared on Platform</label>
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
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Two-Factor Security Option</h6>
				</div>
				<div class="card-body">
					<p class="small font-weight-light">Two-factor authentication is a method for protection your web account. When it is activated you need to enter not only your password, but also a special code. You can receive this code by in mobile app. Even if third person will find your password, then cant access with that code.</p>
					<div class="badge badge-info mb-3 small p-2 rounded-lg">DISABLED</div>
					<p class="mb-2 txt-md">
						1. Install an authentication app on your device. Any app that supports the Time-based One-Time Password (TOTP) protocol should work.
					</p>
					<p class="mb-2 txt-md">
						2. Use the authenticator app to scan the barcode below.
					</p>
					<p class="mb-2 txt-md">
						3. Enter the code generated by the authenticator app.
					</p>
					<a href="#" class="btn btn-primary btn-icon-split shadow ml-auto" data-toggle="modal" data-target="#twoFactor">
						<span class="icon txt-sm text-white-50">
							<i class="fas fa-check-double"></i>
						</span>
						<span class="txt-sm text">Enable 2fa</span>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-light text-black shadow mb-3">
				<div class="card-body text-center">
					<p class="font-weight-bold">Account Photo</p>
					<div class="text-black-50 small ">We recommend you use a square logo with dimensions 70px by 70px for best results on the checkout form.</div>
					@if (isset(auth()->user()->profile_image))
					<img class="img-profile rounded-circle col-4 mt-4" src="{{ asset('assets/img/profile/'. auth()->user()->profile_image) }}" style="height: 80px;">
					@else
					<img class="img-profile rounded-circle col-3 mt-4" src="../assets/img/undraw_profile.svg">
					@endif
					<form action="{{ route('user.upload.image') }}" method="POST" enctype="multipart/form-data" id="upload-image">
						@csrf
						<div class="mt-4">
							<div class="custom-file" style="width:70%;">
								<input type="file" name="profile_image" class="custom-file-input" id="customFile" required>
								<label class="custom-file-label text-left small" for="customFile" style="border: 1px dotted; outline:none !important;">Select Image</label>
							</div>
						</div>
					
						<div class="row mt-5">
							<button type="submit" class="btn btn-primary btn-icon-split shadow ml-auto">
								<span class="icon txt-sm text-white-50">
									<i class="fas fa-check-double"></i>
								</span>
								<span class="txt-sm text">Save Changes</span>
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="card bg-light text-black shadow mb-3">
				<div class="card-body text-center">
					<p class="font-weight-bold">Identity verification</p>
					@if (!empty(auth()->user()->verification_document))
					<span class="badge badge-primary px-2 py-2 mb-2">
						Verified
						<i class="fas fa-check ml-2"></i>
					</span>
					@endif
					<div class="text-black-50 small ">Upload an Identity Document, for example, Driver Licence, Voters Card, International Passport, National ID.</div>
					<form action="{{ route('user.upload.verification') }}" method="POST" enctype="multipart/form-data" id="upload-document">
						@csrf
						<div class="mt-4">
							<div class="custom-file" style="width:70%;">
								<input type="file" name="identity_document" class="custom-file-input" id="customFile" required>
								<label class="custom-file-label text-left small" for="customFile" style="border: 1px dotted; outline:none !important;">Select Document</label>
							</div>
						</div>
						<div class="row mt-5">
							<button type="submit" class="btn btn-primary btn-icon-split shadow ml-auto">
								<span class="icon txt-sm text-white-50">
									<i class="fas fa-check-double"></i>
								</span>
								<span class="txt-sm text">Upload</span>
							</button>
						</div>
					</form>
				</div>
			</div>
			<div class="card bg-light text-black shadow mb-3">
				<div class="card-body text-center">
					<p class="font-weight-bold">Delete Account</p>
					<div class="text-black-50 small ">Closing this account means you will no longer be able to access this account on Krypto Investment</div>
					<div class="row mt-5">
						<a href="#" class="btn btn-primary btn-icon-split shadow ml-auto" data-toggle="modal" data-target="#deleteAccount">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-trash"></i>
							</span>
							<span class="txt-sm text">Delete Account</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- Modals --}}
{{-- Delete account modal --}}
<div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Delete Account</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">??</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="small text-center">Are you sure you want to delete your account?, This action cannot be undone!</p>
				<form action="{{ route('user.delete') }}" method="POST">
					@csrf
					@method('DELETE')
					<div class="row justify-content-between px-3 mt-5">
						<button type="submit" class="btn btn-primary btn-icon-split shadow" type="submit">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-check-double"></i>
							</span>
							<span class="txt-sm text">Delete</span>
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

{{-- Two factor authentication modal --}}
<div class="modal fade" id="twoFactor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Two-Factor Authentication</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">??</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-center">Sorry, this feature is not available yet</p>
				<form action="#" method="POST">
					@csrf
					<div class="row justify-content-center px-3 mt-5">
						<button href="#" class="btn btn-danger btn-icon-split shadow" data-dismiss="modal">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-times"></i>
							</span>
							<span class="txt-sm text">Ok</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

{{-- change password modal --}}
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Change Password</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">??</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('user.change-password') }}" method="POST">
					@csrf
					<div class="mb-3">
						<label for="" class="font-weight-bold small">New Password:</label>
						<div class="row">
							<div class="col">
								<input type="password" class="form-control txt-md" id="name" name="password">
							</div>
						</div>
					</div>
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Confirm Password:</label>
						<div class="row">
							<div class="col">
								<input type="password" class="form-control txt-md" id="name" name="confirm_password">
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
@endsection