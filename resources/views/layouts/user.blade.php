<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>User Dashboard</title>

		<!-- Custom fonts for this template-->
		<link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

		<!-- Custom styles for page -->
		<link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

	</head>

	<style>
		.logout {
			background:none !important;
			border:none !important; 
		}
		.bg-primary, .bg-gradient-primary, .btn-primary, .badge-primary{
			background: #996515 !important;
			border: #996515;
		}
		.text-primary{
			color:#996515 !important;
		}
		.page-link{
			background: #996515 !important;
		}
		.border-left-primary{
			border-left-color: #996515 !important;
		}
	
	</style>

	<body id="page-top">

		<!-- Page Wrapper -->
		<div id="wrapper">

			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

				<!-- Sidebar - Brand -->
				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
					<div class="sidebar-brand-text mx-3">Kriptobuyume</div>
				</a>

				<!-- Divider -->
				<hr class="sidebar-divider my-0">

				<!-- Nav Item - Dashboard -->
				<li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
					<a class="nav-link" href="{{ asset('dashboard') }}">
						<i class="fas fa-fw fa-tachometer-alt"></i>
						<span>Dashboard</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
					Interface
				</div>

				<li class="nav-item {{ request()->is('dashboard/deposit') ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('user.deposit') }}">
						<i class="fas fa-fw fa-donate"></i>
						<span>Make Deposit</span></a>
				</li>
				<li class="nav-item {{ request()->is('dashboard/withdrawal') ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('user.withdrawal') }}">
						<i class="fas fa-fw fa-hand-holding-usd"></i>
						<span>Withdrawal</span></a>
				</li>

				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item {{ request()->is('dashboard/plans') || request()->is('dashboard/trade-activity') ? 'active' : '' }}">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
						aria-expanded="true" aria-controls="collapseTwo">
						<i class="fas fa-fw fa-landmark"></i>
						<span>Trades & Plans</span>
					</a>
					<div id="collapseTwo" class="collapse {{ request()->is('dashboard/plans') || request()->is('dashboard/trade-activity') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item {{ request()->is('dashboard/plans') ? 'active' : '' }}" href="{{ route('user.plans') }}">Subscription Plans</a>
							<a class="collapse-item {{ request()->is('dashboard/trade-activity') ? 'active' : '' }}" href="{{ route('user.trade-activity') }}">Trade Activity</a>
						</div>
					</div>
				</li>

				<li class="nav-item {{ request()->is('dashboard/transfer') ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('user.transfer') }}">
						<i class="fas fa-fw fa-share-square"></i>
						<span>Make Transfer</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
					Account
				</div>

				<li class="nav-item {{ request()->is('dashboard/tickets') ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('user.tickets') }}">
						<i class="fas fa-fw fa-bug"></i>
						<span>Disputes</span></a>
				</li>

				<li class="nav-item {{ request()->is('dashboard/settings') ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('user.settings') }}">
						<i class="fas fa-fw fa-cogs"></i>
						<span>Settings</span></a>
				</li>

				<li class="nav-item {{ request()->is('dashboard/audit-logs') ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('user.audit-logs') }}">
						<i class="fas fa-fw fa-clipboard-list"></i>
						<span>Audit Logs</span></a>
				</li>

				<li class="nav-item {{ request()->is('dashboard/referals') ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('user.referals') }}">
						<i class="fas fa-fw fa-users"></i>
						<span>Referral</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
					More
				</div>

				<li class="nav-item">
					<a class="nav-link" href="{{ route('privacy-policy') }}">
						<i class="fas fa-fw fa-table"></i>
						<span>Privacy Policy</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="{{ route('terms') }}">
						<i class="fas fa-fw fa-table"></i>
						<span>Terms & Conditions</span></a>
				</li>

				<form action="{{ route('logout') }}" method="POST">
					@csrf
					<li class="nav-item">
						<button class="nav-link logout" type="submit">
							<i class="fas fa-fw fa-table"></i>
							<span>Sign Out</span></button>
					</li>
				</form>


				<!-- Divider -->
				<hr class="sidebar-divider d-none d-md-block">

				<!-- Sidebar Toggler (Sidebar) -->
				<div class="text-center d-none d-md-inline">
					<button class="rounded-circle border-0" id="sidebarToggle"></button>
				</div>

			</ul>
			<!-- End of Sidebar -->

			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">

				<!-- Main Content -->
				<div id="content">

					<!-- Topbar -->
					<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

						<!-- Sidebar Toggle (Topbar) -->
						<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Topbar Navbar -->
						<ul class="navbar-nav ml-auto">

							<!-- Nav Item - Search Dropdown (Visible Only XS) -->
							<li class="nav-item dropdown no-arrow d-sm-none">
								<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-search fa-fw"></i>
								</a>
								<!-- Dropdown - Messages -->
								<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
									aria-labelledby="searchDropdown">
									<form class="form-inline mr-auto w-100 navbar-search">
										<div class="input-group">
											<input type="text" class="form-control bg-light border-0 small"
												placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
											<div class="input-group-append">
												<button class="btn btn-primary" type="button">
													<i class="fas fa-search fa-sm"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</li>

							<div class="topbar-divider d-none d-sm-block"></div>

							<!-- Nav Item - User Information -->
							<li class="nav-item dropdown no-arrow">
								<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</span>
									<img class="img-profile rounded-circle" src="{{ asset('assets/img/undraw_profile.svg') }}">
								</a>
								<!-- Dropdown - User Information -->
								<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
									aria-labelledby="userDropdown">
									<a class="dropdown-item" href="{{ route('user.settings') }}">
										<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
										Settings
									</a>
									<a class="dropdown-item" href="{{ route('user.audit-logs') }}">
										<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
										Activity Log
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
										<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
										Logout
									</a>
								</div>
							</li>

						</ul>

					</nav>
					<!-- End of Topbar -->

					<!-- Begin Page Content -->
					
					@yield('content')

					<!-- /.container-fluid -->

				</div>
				<!-- End of Main Content -->

				<!-- Footer -->
				<footer class="sticky-footer bg-white">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>Copyright &copy; Your Website 2020</span>
						</div>
					</div>
				</footer>
				<!-- End of Footer -->

			</div>
			<!-- End of Content Wrapper -->

		</div>
		<!-- End of Page Wrapper -->

		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>

		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
					<form action="{{ route('logout') }}" method="POST">
						@csrf
						<div class="modal-footer">
							<button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary btn-sm" href="">Logout</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Core plugin JavaScript-->
		<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

		<!-- Custom scripts for all pages-->
		<script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

		<!-- Page level plugins -->
		<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

		<!-- Page level custom scripts -->
		<script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
	</body>
</html>