@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Privacy Policy</h6>
				</div>
				<div class="card-body">
					<form>
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Content</label>
							<div class="row">
								<div class="col">
									<textarea class="form-control" rows="10" id="comment"></textarea>
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