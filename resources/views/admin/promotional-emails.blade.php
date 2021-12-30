@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Send email to all users</h6>
				</div>
				<div class="card-body">
					<form>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Subject</label>
							<div class="row">
								<div class="col">
									<input type="number" class="form-control txt-md" id="email"
										placeholder="Subject" name="email">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Message</label>
							<div class="row">
								<div class="col">
									<textarea class="form-control" rows="5" id="comment" placeholder="Enter Your Message"></textarea>
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
</div>
@endsection