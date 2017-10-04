@extends('layout.main')
@section('title', '| Blog')

@section('content')
<div class="row">
	<div class="col-md-12">
	   <h1> Blog Posts </h1>
	   <hr>
    </div>
</div>

<div class="row">
	<div class="col-md-12">
	   	@foreach($post as $posts)
	   	 
	   		<h2> {{$posts->title}} </h2>
	   		<p> {{$posts->body}} </p> 
	   		
	   	@endforeach
	  
    </div>
</div>
	 <div class='text-center'>
	  
	 </div>


@endsection