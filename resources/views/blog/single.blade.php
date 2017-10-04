@extends('layout.main')
@section('title', '|$post->title')


@section('content')

 

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post->title }}</h1>
			<p>{{ $post->body }}</p>
			<hr>
         	<p>Posted In: {{ $post->category->cat_name }}</p>
		 
		</div>
	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@foreach($post->comments as $comments)
				<div class="comment">
					<p><strong>UserName:</strong> {{ $comments->username }}</p>
					<p><strong>Comments:</strong><br/>{{ $comments->comments }}</p><br>
				</div>
			@endforeach
		</div>
	</div>


	 <div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
			{{ Form::open(['route' => ['comment.store', $post->id], 'method' => 'POST']) }}
				
				<div class="row">
					<div class="col-md-6">
						{{ Form::label('username', "User Name:") }}
						{{ Form::text('username', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-6">
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-12">
						{{ Form::label('comments', "Comment:") }}
						{{ Form::textarea('comments', null, ['class' => 'form-control', 'rows' => '5']) }}

						{{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
					</div>
				</div>

			{{ Form::close() }}
		</div>
	</div>

@endsection