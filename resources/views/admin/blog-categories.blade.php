@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<!-- Create category -->
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Create category</h6>
				</div>
				<div class="card-body">
					<form action="{{ route('admin.blog-categories.create') }}" method="POST">
						@csrf
						<div class="mb-3">
							<label for="" class="font-weight-bold small">Category</label>
							<div class="row">
								<div class="col">
									<input type="text" class="form-control txt-md" id="email"
										placeholder="Enter Category Name" name="name">
								</div>
							</div>
						</div>
						<div class="row mt-5">
							<button type="submit" class="btn btn-primary btn-icon-split shadow ml-auto">
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

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Category</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>NAME</th>
							<th>ACTION</th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($categories as $category)
						<tr>
							<td>{{ $category['id'] }}</td>
							<td>{{ $category['category_name'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#" data-toggle="modal" data-target="#editCategory{{ $category['id'] }}">Edit</a>
										<form action="{{ route('admin.blog-categories.delete', $category['id']) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="dropdown-item" href="#">Delete</button>
										</form>
									</div>
								</div>
							</td>
						</tr>	 
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@foreach ($categories as $category)
<div class="modal fade" id="editCategory{{ $category['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title txt-md" id="exampleModalLabel">Add Deposit Method</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('admin.blog-categories.update', $category['id']) }}" method="POST">
					@csrf
					<div class="mb-3">
						<label for="" class="font-weight-bold small">Name:</label>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control txt-md" id="name"
									value="{{ $category['category_name'] }}" name="name">
							</div>
						</div>
					</div>
					<div class="row justify-content-between px-3 mt-5">
						<button class="btn btn-primary btn-icon-split shadow" type="submit">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-check-double"></i>
							</span>
							<span class="txt-sm text">Save</span>
						</button>
						<button href="#" class="btn btn-danger btn-icon-split shadow" data-dismiss="modal">
							<span class="icon txt-sm text-white-50">
								<i class="fas fa-times"></i>
							</span>
							<span class="txt-sm text">Cancel</span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection