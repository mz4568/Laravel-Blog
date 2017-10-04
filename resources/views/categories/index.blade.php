@extends('layout.main')

@section('title', '| All Categories')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>
						<td>{{ $category->cat_name }}</td>

					</tr>
					@endforeach

				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well">
				
					<h2>New Category</h2>
					
					{!! Form::open(array('route' =>'categories.store')) !!}
					{{ Form::label('cat_name', 'Category Name:') }}
					{{ Form::text('cat_name', null, ['class' => 'form-control','name' => 'cat_name']) }}

					{{ Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection