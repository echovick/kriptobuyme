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
					<form action="{{ route('admin.bank-transfer.save') }}" method="POST">
						@csrf
						<input type="text" name="admin_id" value="{{ auth()->user()->id }}" hidden>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Name</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter Name" value="{{ auth()->user()->name }}" name="email" readonly>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Bank name</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter Bank name" value="{{ $AdminBankDetail->bank_name ?? '' }}" name="bank_name">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Bank address</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter Bank address" value="{{ $AdminBankDetail->bank_address ?? '' }}" name="bank_address">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">IBAN code</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter IBAN Code" value="{{ $AdminBankDetail->iban_code ?? '' }}" name="iban_code">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">SWIFT code</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter  Swift Code" value="{{ $AdminBankDetail->swift_code ?? '' }}" name="swift_code">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Account number</label>
							<div class="row">
								<div class="col">
									<input type="number" class="form-control txt-md" id="email"
										placeholder="Enter Account Number" value="{{ $AdminBankDetail->account_number ?? '' }}" name="account_number">
								</div>
							</div>
						</div>
						
						<div class="row mt-5">
							<button type="submit" href="#" class="btn btn-primary btn-icon-split shadow ml-auto">
								<span class="icon txt-sm text-white-50">
									<i class="fas fa-check-double"></i>
								</span>
								<span class="txt-sm text">Save</span>
							</button>
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