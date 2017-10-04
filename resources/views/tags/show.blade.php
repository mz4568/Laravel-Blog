@extends('layout.main')

@section('title', "| $tag->name  Tag")

@section('content')

	<div class="row">
		<div class="col-md-8">
		<div class="col-md-8">
			<div class="col-md-8">
			<h1>{{ $tag->tag_name }} </small></h1>
		</div>
		   
		</div>	
		</div>
		<div class="col-md-2 col-md-offset-2">
			
		</div>
	</div>

	

@endsection