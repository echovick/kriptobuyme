@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Update Bank Details</h6>
					<p class="small mt-2">Last updated: 2020/09/09 04:14:PM</p>
				</div>
				<div class="card-body">
					<form>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Name</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter Name" name="email">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Bank name</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter Bank name" name="email">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Bank address</label>
							<div class="row">
								<div class="col">
									<input type="number" class="form-control txt-md" id="email"
										placeholder="Enter Bank address" name="email">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">IBAN code</label>
							<div class="row">
								<div class="col">
									<input type="number" class="form-control txt-md" id="email"
										placeholder="Enter IBAN Code" name="email">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">SWIFT code</label>
							<div class="row">
								<div class="col">
									<input type="number" class="form-control txt-md" id="email"
										placeholder="Enter  Swift Code" name="email">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Account number</label>
							<div class="row">
								<div class="col">
									<input type="number" class="form-control txt-md" id="email"
										placeholder="Enter Account Number" name="email">
								</div>
							</div>
						</div>
						
						<div class="row mt-5">
							<a href="#" class="btn btn-primary btn-icon-split shadow ml-auto">
								<span class="icon txt-sm text-white-50">
									<i class="fas fa-check-double"></i>
								</span>
								<span class="txt-sm text">Send</span>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card bg-light text-black shadow">
				<div class="card-body">
					<h5 class="text-primary mb-3 txt-lg">Bank Transfer</h5>
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
								<tr class="small">
									<th>S/N</th>
									<th>NAME</th>
									<th>AMOUNT</th>
									<th>STATUS</th>
									<th>CREATED</th>
									<th>UPDATED</th>
									<th></th>
								</tr>
							</thead>
							<tfoot>
								<tr class="small">
									<th>S/N</th>
									<th>NAME</th>
									<th>AMOUNT</th>
									<th>STATUS</th>
									<th>CREATED</th>
									<th>UPDATED</th>
									<th></th>
								</tr>
							</tfoot>
							<tbody class="small">
								<!-- Table info here -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection