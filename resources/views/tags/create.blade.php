@extends('layout.main')
@section('title','|Create New Tag')

@section('stylesheet')
{!! Html::style('css/parsley.css') !!}
{!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')
<div class="row">
 <div class="col-md-10">
	<h1 class="text-center"> Create New Tag </h1>
	<hr>

	    {!! Form::open(array('route' =>'tags.store','data-parsley-validate' => '')) !!}
		{!! Form::label('tag_name','Name:') !!} 
		{!! Form::text('tag_name',$value=null,array('class'=>'form-control','placeholder' => 'Tag Name','name'=>'tag_name','required'=>'required','style'=>"margin-bottom:10px")) !!}
		
		{!! Form::submit('Create Tag',$attributes=['class' => 'btn btn-success btn-lg btn-block','style'=>"margin-top:20px"]) !!}
		{!! Form::close() !!}

  </div>
	
</div>

@stop

@section('scripts')
{!! Html::script('js/parsley.min.js') !!}
{!! Html::script('js/select2.min.js') !!}
@endsection
