@extends('layout.main')
@section('title','|All Posts')

@section('content')

<div class="row">
 <div class="col-md-8">
@if(Session::has('message'))
<div class="well">
{{session::get('message')}}
</div>
@endif

   <h1> All Posts </h1>
   <hr>
 </div>
 <div class="col-md-4">
   <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg btn-block">Create New Post </a>
 </div>
</div>

<div class="row">
 <div class="col-md-12">
  <div class="">
   <table class="table table-hover">
   <thead>
   	 <th>#</th>
   	 <th>Title</th>
   	 <th>Body</th>
       <th>Image</th>
   	 <th>Created At</th>
   	 <th></th>
   </thead>
   <tbody>
   	@foreach($post as $posts )
   	<tr>
   		<td> {{$posts ->id}} </td>
   		<td>{{$posts ->title}} </td>
   		<td> {{$posts ->body}} </td>
         <td> <img class="thumbnail" src="{{ asset('images/' . $posts->image) }}" height='70px' width='100px'> </td>
   		<td>{{ date('M j, Y', strtotime($posts->created_at)) }}</td>
   		<td> <a href="{{ route('posts.show',$posts->id) }}" class="btn btn-default btn-sm">View </a>
   			  <a href="{{ route('posts.edit',$posts ->id) }}" class="btn btn-default btn-sm">Edit</a>
         </td>
   	</tr>
   	@endforeach
   </tbody>
   </table>
  </div>
 </div>
 <div class='text-center'>

 </div>
</div>

@endsection