@extends('layout.main')
@section('title','|Edit Post')


 @section('style') 
   <link rel="stylesheet" href="{{asset('css/select2.min.css')}}"  type="text/css">
   <!--<link rel="stylesheet" href="{{asset('plugins/summernote/summernote.css')}}"  type="text/css">-->
 
 
  @endsection

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1 class="text-center" style="color:green"> Update Post </h1>
		<hr>

		    {!! Form::model($posts,['route' =>['posts.update', $posts->id],'enctype' => 'multipart/form-data','method' => 'Patch','files'=>'true']) !!}

			{!! Form::label('title','Title')!!}
			{!! Form::text('title',null,array('class'=>'form-control','name'=>'title','required'=>'required')) !!}

			{!! Form::label('body','Body') !!}
			{!! Form::textarea('body',null,array('class'=>'form-control','name'=>'body','required'=>'required')) !!}
            
         
			{!! Form::label('slug','Slug:') !!}
			{!! Form::text('slug',null,array('class'=>'form-control','placeholder' => 'Slug','name'=>'slug','required'=>'','minlength' => '2', 'maxlength' => '255','style' => 'margin-bottom:20px')) !!}

           <div class=''>
            {!! Form::label('image','Portfolio Image') !!}
	        {!! Form::file('image') !!}
	        <img src=src="images/{{$posts->image}}"/>
            </div>
            
             {{ Form::label('cat_name', "Category Name", ['class' => 'form-spacing-top']) }}
			 {{ Form::select('cat_name', $cats, null, ['class' => 'form-control','name' => 'cat_name']) }}
			
			{{ Form::label('tag_name', 'Tag Name', ['class' => 'form-spacing-top']) }}
			{{ Form::select('tag[]', $tags2, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple','name' => 'tag_name']) }}
		
			{!! Form::submit('Update Post',$attributes=['class' => 'btn btn-success btn-lg btn-block','style'=>"margin-top:20px"]) !!}
			

	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M j, Y h:ia', strtotime($posts->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M j, Y h:ia', strtotime($posts->updated_at)) }}</p>
				</dl>
		    <hr>
			<div class="row">
			   <div class="col-md-6">
			    <a href="{{ route('posts.edit',$posts ->id) }}" class="btn btn-success btn-lg btn-block">Edit</a>
			     <!--{!! Html::LinkRoute('posts.index','Cancel',array($posts->id),array('class'=> "btn btn-success btn-lg")) !!} -->
			   </div>

			   <div class="col-md-6">
			   	 <a href="{{ route('posts.show',$posts ->id) }}" class="btn btn-success btn-lg btn-block">Cancel</a>
			      <!--{!! Html::LinkRoute('posts.create','Create New Post',array($posts->id),array('class'=> "btn btn-danger btn-lg")) !!} -->
			   </div>
			</div>
		</div>
    </div>
</div>
@endsection

@section('scripts')

	<script type="text/javascript">

		$('.select2-multi').select2();
		$('.select2-multi').select2().trigger('change');

	</script>


 <script src="{{asset('')}}"></script>

  <script>tinymce.init({
   selector:'textarea'
  
    });

  </script>


@endsection
