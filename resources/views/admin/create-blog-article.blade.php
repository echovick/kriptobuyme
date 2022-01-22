@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<!-- Page Heading -->
	<form action="{{ route('admin.blog-article.save') }}" enctype="multipart/form-data" id="upload-image" method="POST">
		@csrf
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">New Post</h1>
			<div>
				<button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus mr-3 fa-sm text-white-50"></i> Save Post</button>
				{{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-plus mr-3 fa-sm text-white-50"></i> Delete Post</a> --}}
			</div>
		</div>
		{{-- <div class="small">
			Post Link: <u><a href="https://therainassancenew.com/post/how-publish-a-blog-post" target="_blank">https://therainassancenew.com/post/how-publish-a-blog-post</a></u>
		</div> --}}
		<div class="row">
			<div class="col-md-8">
				<div class="form-group mt-2">
					<input type="text" placeholder="Post Title" name="post_title" class="form-control">
				</div>
				<div class="form-group">
					<textarea name="post_content" class="form-control" id="" cols="30" rows="15"></textarea>
				</div>
				<div class="mt-3">
					<button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus mr-3 fa-sm text-white-50"></i> Save Post</button>
					{{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-plus mr-3 fa-sm text-white-50"></i> Delete Post</a> --}}
				</div>
			</div>
			<div class="col-md-4">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Publish Settings</h6>
					</div>
					<div class="card-body">
						<div class="form-group">
							<select name="status" id="" class="form-control form-control-sm">
								<option value="Draft">Draft</option>
								<option value="Published">Published</option>
							</select>
						</div>
					</div>
				  </div>
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Post Category</h6>
					</div>
					<div class="card-body">
						<div class="form-group">
							<select name="category_id" id="" class="form-control form-control-sm">
								<option value="0">Select Post Category</Option>
								@foreach ($categories as $category)
								<option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>	 
								@endforeach
							</select>
						</div>
					</div>
				  </div>
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Featured Image</h6>
					</div>
					<div class="card-body">
						{{-- <div class="mb-3" style="width: 100%">
							<img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D" alt="" style="width: 100% !important;">
						</div> --}}
						
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="featured_image" id="customFile">
							<label class="custom-file-label" for="customFile">Select Image</label>
						</div>
					</div>
				  </div>
			</div>
		</div>
	</form>
</div>
@endsection