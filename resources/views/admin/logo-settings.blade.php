@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div class="card shadow mb-4 rounded-1">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-left">Logo Light Mode</h6>
				</div>
				<div class="card-body text-center">
					<div class="mt-4">
						<button class="small btn-sm btn btn-outline-primary w-100 py-2">Select Document</button>
					</div>
					<div class="row mt-5">
						<a href="#" class="btn btn-primary btn-icon-split shadow ml-auto">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-check-double"></i>
							</span>
							<span class="txt-sm text">Upload</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 bg-dark text-center rounded-1" style="height: 200px; width:200px; border-radius: 3%;">
			<img src="https://kryptovesta.com/asset/images/logo_1621959882.png" alt="" class="w-80 mx-auto" style="width: 400px;">
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="card shadow mb-4 rounded-1">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-left">Logo Dark Mode</h6>
				</div>
				<div class="card-body text-center">
					<div class="mt-4">
						<button class="small btn-sm btn btn-outline-primary w-100 py-2">Select Document</button>
					</div>
					<div class="row mt-5">
						<a href="#" class="btn btn-primary btn-icon-split shadow ml-auto">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-check-double"></i>
							</span>
							<span class="txt-sm text">Upload</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 bg-light shadow text-center rounded-1" style="height: 200px; width:200px; border-radius: 3%;">
			<img src="https://kryptovesta.com/asset/images/favicon_1621952861.png" alt="" class="w-80 mx-auto" style="width: 400px;">
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<div class="card shadow mb-4 rounded-1">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-left">Favicon</h6>
				</div>
				<div class="card-body text-center">
					<div class="mt-4">
						<button class="small btn-sm btn btn-outline-primary w-100 py-2">Select Document</button>
					</div>
					<div class="row mt-5">
						<a href="#" class="btn btn-primary btn-icon-split shadow ml-auto">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-check-double"></i>
							</span>
							<span class="txt-sm text">Upload</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 bg-light shadow text-center rounded-1 d-flex" style="height: 200px; width:200px; border-radius: 3%;">
			<img src="https://kryptovesta.com/asset/images/favicon_1621952861.png" alt="" class="w-80 mx-auto shadow align-self-center" style="width: 100px; height: 100px; border-radius: 50%; object-fit: contain;">
		</div>
	</div>
</div>
@endsection