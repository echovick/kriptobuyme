@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-3 col-md-3 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Active users: #185</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Blocked users: #0</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-3 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Support Ticket</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Open tickets: #0</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Closed tickets: #2</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-3 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Platform Reviews</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Published reviews: #4</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Pending reviews: #0</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-3 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Other Deposits</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Pending: #373</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Approved: #72</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-3 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Withdrawal</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Pending: #14</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Approved: #31</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-3 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Investment plans</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Active: #5</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Disabled: #1</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-3 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Investment</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Active: #26</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Completed: #0</div>
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
@endsection