@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row ml-2 mb-3">
		<a href="{{ route('admin.blog-article.create') }}" class="btn btn-primary btn-icon-split shadow">
			<span class="icon txt-sm text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="txt-sm text">Create Article</span>
		</a>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Posts</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="small">
							<th>S/N</th>
							<th>TITLE</th>
							<th>CATEGORY</th>
							<th>VIEWS</th>
							<th>STATUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="small">
							<th>S/N</th>
							<th>TITLE</th>
							<th>CATEGORY</th>
							<th>VIEWS</th>
							<th>STATUS</th>
							<th>CREATED</th>
							<th>UPDATED</th>
							<th>ACTION</th>
						</tr>
					</tfoot>
					<tbody class="small">
						@foreach ($articles as $article)
						<tr>
							<td>{{ $article['id'] }}</td>
							<td>{{ $article['blog_title'] }}</td>
							<td>{{ $article->category->category_name }}</td>
							<td>{{ $article['views'] }}</td>
							<td><span class="badge badge-{{ $article['status'] == 'Published' ? 'success' : 'danger' }} p-2">{{ $article['status'] }}</span></td>
							<td>{{ $article['created_at'] }}</td>
							<td>{{ $article['updated_at'] }}</td>
							<td>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Delete</a>
										<a class="dropdown-item" href="#">Unpublish</a>
										<a class="dropdown-item" href="#">Edit</a>
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
@endsection