@extends('layout.main')

@section('title', '| All Tags')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Tags</h1>
			<hr>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($tag as $tags)
					<tr>
						<th>{{ $tags->id }}</th>
						<td>{{ $tags->tag_name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
					<h2>New Tag</h2>
					{{ Form::label('tag_name', 'Tag Name:') }}
					{{ Form::text('tag_name', null, ['class' => 'form-control','name' => 'tag_name']) }}

					{{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
		
	</div>

	 <div class='text-center'>
           
         </div>

@endsection