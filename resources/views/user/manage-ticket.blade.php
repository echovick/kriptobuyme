@php
use App\Models\User;
@endphp
@extends('layouts.user')

@section('content')
<div class="container-fluid">
	<div class="card bg-light text shadow mb-3">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<h5 class="px-3">Log</h5>
					<ul class="timeline">
						@php
							$content = $ticket->content;
							$content = unserialize($content);
						@endphp
						@if (is_array($content) && count($content) > 0)
							@foreach ($content as $item)
							@php
								$user_type = $item['user_type'];
								$user_id = $item['user_id'];
								$message = $item['message'];
								$timestamp = $item['timestamp'];
								$timestamp = date_create($timestamp);

								if($user_type == 'User'){
									$user = User::find($user_id);
									$name = $user->username;
								}else{
									$name = 'Admin';
								}
							@endphp
							<li>
								<a target="_blank" href="#" class="text">{{ $name }}</a>
								<a href="#" class="float-right small">{{ date_format($timestamp, 'D M, Y h:m a') }}</a>
								<p class="txt-md">{{ $message }}</p>
							</li>
							@endforeach
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="card bg-light shadow">
		<div class="card-body">
			<h5>Reply</h5>
			<form action="{{ route('user.ticket.update', ['id' => $ticket->id]) }}" method="POST">
				@csrf
				<input type="text" name="user_type" value="User" hidden>
				<div class="mb-3">
					<label for="" class="font-weight-bold small">Message</label>
					<div class="row">
						<div class="col">
							<textarea class="form-control" rows="5" id="comment" name="message" placeholder="Enter Your Message?"></textarea>
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
@endsection
