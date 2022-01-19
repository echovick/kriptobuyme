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
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Active users: #{{ number_format($active_users) }}</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Blocked users: #{{ number_format($blocked_users) }}</div>
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
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Open tickets: #{{ number_format($open_ticket) }}</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Closed tickets: #{{ number_format($closed_ticket) }}</div>
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
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Published reviews: #{{ number_format($published_platform_reviews) }}</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Pending reviews: #{{ number_format($pending_platform_reviews) }}</div>
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
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Pending: #{{ number_format($pending_deposits) }}</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Approved: #{{ number_format($approved_deposits) }}</div>
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
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Pending: #{{ number_format($pending_withdrawals) }}</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Approved: #{{ number_format($approved_withdrawals) }}</div>
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
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Active: #{{ number_format($active_plans) }}</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Disabled: #{{ number_format($inactive_plans) }}</div>
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
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Active: #{{ number_format($active_investments) }}</div>
							<div class="txt-sm mb-0 font-weight-bold text-gray-800">Completed: #{{ number_format($completed_investments) }}</div>
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