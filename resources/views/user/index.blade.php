@extends('layouts.user')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4">
			<div class="card shadow mb-4 rounded-1">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary text-center">Total Statistics</h6>
					<div class="text-center mt-4">
						<p class="small"><i class="fas fa-google-wallet mr-1"></i> Received<br>
							<span class="text-lg font-weight-bold">USD 4,000.00</span>
						</p>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-6">
							Pending
						</div>
						<div class="col-6 text-right text-primary">
							USD 0.00
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							Pending
						</div>
						<div class="col-6 text-right text-primary">
							USD 0.00
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="row">
				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-6 col-md-6 mb-4">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
										Available Profit</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-calendar fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-6 col-md-6 mb-4">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
										Total Profit</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-calendar fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-6 col-md-6 mb-4">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
										Referral</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-calendar fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-6 col-md-6 mb-4">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
										Total Bonus</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-calendar fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<!-- Approach -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Recent Trades</h6>
				</div>
				<div class="card-body">
					<div class="card mb-4 py-3 border-bottom-primary">
						<div class="card-body">
							#mXDZd1TsC92RkWyS @ MODRATE/COMBACT [125/125USD]
						</div>
					</div>
					<div class="card mb-4 py-3 border-bottom-primary">
						<div class="card-body">
							#mXDZd1TsC92RkWyS @ MODRATE/COMBACT [125/125USD]
						</div>
					</div>
					<div class="card mb-4 py-3 border-bottom-primary">
						<div class="card-body">
							#mXDZd1TsC92RkWyS @ MODRATE/COMBACT [125/125USD]
						</div>
					</div>
					<div class="card mb-4 py-3 border-bottom-primary">
						<div class="card-body">
							#mXDZd1TsC92RkWyS @ MODRATE/COMBACT [125/125USD]
						</div>
					</div>
					<div class="card mb-4 py-3 border-bottom-primary">
						<div class="card-body">
							#mXDZd1TsC92RkWyS @ MODRATE/COMBACT [125/125USD]
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Top Earners -->
		<div class="col-lg-4">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Top Earners</h6>
					<div class="dropdown no-arrow">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
							aria-labelledby="dropdownMenuLink">
							<div class="dropdown-header">Dropdown Header:</div>
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="d-flex mb-3">
						<img class="img-profile rounded-circle w-100 col-3" src="../assets/img/undraw_profile.svg">
						<p class="mr-2 d-none align-self-center d-lg-inline text-gray-600 small">Douglas McGee<br>$29,600</p>
					</div>
					<div class="d-flex mb-3">
						<img class="img-profile rounded-circle w-100 col-3" src="../assets/img/undraw_profile.svg">
						<p class="mr-2 d-none align-self-center d-lg-inline text-gray-600 small">Douglas McGee<br>$29,600</p>
					</div>
					<div class="d-flex mb-3">
						<img class="img-profile rounded-circle w-100 col-3" src="../assets/img/undraw_profile.svg">
						<p class="mr-2 d-none align-self-center d-lg-inline text-gray-600 small">Douglas McGee<br>$29,600</p>
					</div>
					<div class="d-flex">
						<img class="img-profile rounded-circle w-100 col-3" src="../assets/img/undraw_profile.svg">
						<p class="mr-2 d-none align-self-center d-lg-inline text-gray-600 small">Douglas McGee<br>$29,600</p>
					</div>
					<div class="d-flex mb-3">
						<img class="img-profile rounded-circle w-100 col-3" src="../assets/img/undraw_profile.svg">
						<p class="mr-2 d-none align-self-center d-lg-inline text-gray-600 small">Douglas McGee<br>$29,600</p>
					</div>
					<div class="d-flex">
						<img class="img-profile rounded-circle w-100 col-3" src="../assets/img/undraw_profile.svg">
						<p class="mr-2 d-none align-self-center d-lg-inline text-gray-600 small">Douglas McGee<br>$29,600</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection