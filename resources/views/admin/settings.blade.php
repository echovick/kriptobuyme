@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row mb-3">
		<div class="col-md-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Congifure website</h6>
				</div>
				<div class="card-body">
					<form>
						<div class="mb-4">
							<label for="" class="font-weight-bold small">Website name:</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter email" name="email">
								</div>
							</div>
						</div>
						<div class="mb-4">
							<label for="" class="font-weight-bold small">Tawk.to ID:</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Name" name="email">
								</div>
							</div>
						</div>
						<div class="mb-4">
							<label for="" class="font-weight-bold small">Company email:</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Name" name="email">
								</div>
							</div>
						</div>
						<div class="mb-4">
							<label for="" class="font-weight-bold small">Mobile:</label>
							<div class="row">
								<div class="col">
									<input type="number" class="form-control txt-md" id="email"
										placeholder="Subject" name="email">
								</div>
							</div>
						</div>
						<div class="mb-4">
							<label for="" class="font-weight-bold small">Website Title:</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter email" name="email">
								</div>
							</div>
						</div>
						<div class="mb-4">
							<div class="row">
								<div class="col-6">
									<label for="" class="font-weight-bold small">Balance on signup ($) *:</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control txt-md" id="email"
												placeholder="Enter email" name="email">
										</div>
									</div>
								</div>
								<div class="col-6">
									<label for="" class="font-weight-bold small">Upgrade Fee ($) *:</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control txt-md" id="email"
												placeholder="Enter email" name="email">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-4">
							<div class="row">
								<div class="col-6">
									<label for="" class="font-weight-bold small">Withdraw charge (%) *:</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control txt-md" id="email"
												placeholder="Enter email" name="email">
										</div>
									</div>
								</div>
								<div class="col-6">
									<label for="" class="font-weight-bold small">Transfer charge (%) *:</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control txt-md" id="email"
												placeholder="Enter email" name="email">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-4">
							<label for="" class="font-weight-bold small">Status *:</label>
							<div class="row">
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
										<label class="custom-control-label txt-md" for="customCheck1">KYC</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck2" name="example2">
										<label class="custom-control-label txt-md" for="customCheck2">Email verification</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck3" name="example3">
										<label class="custom-control-label txt-md" for="customCheck3">Email Notify</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck4" name="example4">
										<label class="custom-control-label txt-md" for="customCheck4">Registration</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck5" name="example5">
										<label class="custom-control-label txt-md" for="customCheck5">Referral</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck6" name="example6">
										<label class="custom-control-label txt-md" for="customCheck6">Recaptcha</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck7" name="example7">
										<label class="custom-control-label txt-md" for="customCheck7">Language</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck8" name="example8">
										<label class="custom-control-label txt-md" for="customCheck8">Blog</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck9" name="example9">
										<label class="custom-control-label txt-md" for="customCheck9">Transfer</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck10" name="example10">
										<label class="custom-control-label txt-md" for="customCheck10">Services</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck11" name="example11">
										<label class="custom-control-label txt-md" for="customCheck11">Review</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck12" name="example12">
										<label class="custom-control-label txt-md" for="customCheck12">Plan</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck13" name="example13">
										<label class="custom-control-label txt-md" for="customCheck13">Team</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck14" name="example14">
										<label class="custom-control-label txt-md" for="customCheck14">Stat</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck15" name="example15">
										<label class="custom-control-label txt-md" for="customCheck15">Contact</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck16" name="example16">
										<label class="custom-control-label txt-md" for="customCheck16">FAQ</label>
									</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" id="customCheck17" name="example17">
										<label class="custom-control-label txt-md" for="customCheck17">Upgrade Status</label>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-4">
							<div class="row">
								<div class="col-4">
									<label for="" class="font-weight-bold small">Dashboard color *:</label>
									<div class="row">
										<div class="col">
											<input type="color" class="form-control txt-md" id="email"
												placeholder="Enter email" name="email">
										</div>
									</div>
								</div>
								<div class="col-4">
									<label for="" class="font-weight-bold small">Main color *:</label>
									<div class="row">
										<div class="col">
											<input type="color" class="form-control txt-md" id="email"
												placeholder="Enter email" name="email">
										</div>
									</div>
								</div>
								<div class="col-4">
									<label for="" class="font-weight-bold small">Secondary *:</label>
									<div class="row">
										<div class="col">
											<input type="color" class="form-control txt-md" id="email"
												placeholder="Enter email" name="email">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-4">
							<label for="" class="font-weight-bold small">Short description:</label>
							<div class="row">
								<div class="col">
									<textarea class="form-control" rows="3" id="comment"></textarea>
								</div>
							</div>
						</div>
						<div class="mb-4">
							<label for="" class="font-weight-bold small">Address:</label>
							<div class="row">
								<div class="col">
									<textarea class="form-control" rows="3" id="comment"></textarea>
								</div>
							</div>
						</div>
						<div class="row mt-5">
							<a href="#" class="btn btn-primary btn-icon-split shadow ml-auto">
								<span class="icon txt-sm text-white-50">
									<i class="fas fa-check-double"></i>
								</span>
								<span class="txt-sm text">Save</span>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Security</h6>
				</div>
				<div class="card-body">
					<form>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Username:</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter Username" name="email">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Password:</label>
							<div class="row">
								<div class="col">
									<input type="password" class="form-control txt-md" id="email"
										placeholder="Password" name="email">
								</div>
							</div>
						</div>
						<div class="row mt-5">
							<a href="#" class="btn btn-primary btn-icon-split shadow ml-auto">
								<span class="icon txt-sm text-white-50">
									<i class="fas fa-check-double"></i>
								</span>
								<span class="txt-sm text">Save</span>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection