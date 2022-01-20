@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	@if (isset($message) && !empty($message))
	<div class="alert alert-info small">
		{{ $message }}
	</div>
	@endif
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Send email</h6>
				</div>
				<div class="card-body">
					<form action="{{ route('admin.customer.send-mail', ['id' => $user->id]) }}" method="POST">
						@csrf
						<div class="mb-3">
							<label for="" class="font-weight-bold small">To</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										value="{{ $user->email }}" name="email" readonly>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Name</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										value="{{ $user->username }}" name="email" readonly>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Subject</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter Email Subject" name="subject">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Message</label>
							<div class="row">
								<div class="col">
									<textarea class="form-control" name="message" rows="5" id="comment">Enter Mail Content</textarea>
								</div>
							</div>
						</div>
						<div class="row mt-5">
							<button type="submit" href="#" class="btn btn-primary btn-icon-split shadow ml-auto">
								<span class="icon txt-sm text-white-50">
									<i class="fas fa-check-double"></i>
								</span>
								<span class="txt-sm text">Send</span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection