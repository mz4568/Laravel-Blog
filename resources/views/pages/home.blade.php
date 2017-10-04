@extends('layout.main')
@section('title','|Home Page')
@section('content')

<div class='container-fluid'>
<div class='row'> 
    <div class='col-md-12'> 
      <div class='jumbotron'>
        <p> Thank u so much for visiting.This is my first website built with laravel </p>
        <p> <a class='btn btn-danger btn-lg' role='button'href='#'> Popular Post </a> </p>
      </div>
    </div>
 </div>
 </div>
 
    
   <div class="row">
      <div class="col-md-8">

        @foreach($posts as $post)

         <div class="post">
           <h3>{{ $post->title }}</h3>
           <p>{{ $post->body }}</p>
           <a href="{{ url('blog/'.$post->slug )}}" class="btn btn-primary">Read More</a>
         </div>

         <hr>

         @endforeach

    @endsection

  