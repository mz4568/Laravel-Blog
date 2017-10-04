@extends('layout.main')
@section('title','|Create New Posts')

  @section('style') 
   <link rel="stylesheet" href="{{asset('css/parsley.css')}}"  type="text/css">
   <!--<link rel="stylesheet" href="{{asset('plugins/summernote/summernote.css')}}"  type="text/css">-->
 
 
  @endsection

@section('content')
<div class="row">
 <div class="col-md-12">
	<h1 class="text-center"> Create New Post </h1>

	<hr>
        {!! Form::open(array('route' =>'posts.store','enctype' => 'multipart/form-data','data-parsley-validate' => '','method' => 'post') ) !!}
		
		{!! Form::label('title','Title:') !!} 
		{!! Form::text('title',$value=null,array('class'=>'form-control','placeholder' => 'Posts Title','name'=>'title','required'=>'','style'=>"margin-bottom:10px")) !!}
		
		{!! Form::label('body','Body:') !!}
		{!! Form::textarea('body',$value=null,array('class'=>'form-control','placeholder' => 'Posts Body','name'=>'body','required'=>'','style' => 'margin-bottom:20px')) !!}

		{!! Form::label('slug','Slug:') !!}
		{!! Form::text('slug',$value=null,array('class'=>'form-control','placeholder' => 'Slug','name'=>'slug','required'=>'','minlength' => '2', 'maxlength' => '255','style' => 'margin-bottom:20px')) !!}
        
        {!! Form::label('image','Portfolio Image') !!}
	    {!! Form::file('image',array('style' => 'margin-bottom:20px')) !!}

        {{ Form::label('cat_name', 'Category Name:') }}
		<select class="form-control"  name="cat_name">
	    @foreach($categories as $category)
		<option value="{{$category->id}}"> {{$category->cat_name}} </option>
		 @endforeach
        </select>

        {{ Form::label('tag_name', 'Tag Name:',array('style' => 'margin-top:20px')) }}
				<select class="js-example-basic-multiple form-control" multiple="multiple"name='tag_name'>
					@foreach($tags as $tag)
						<option value='{{ $tag->id }}'>{{ $tag->tag_name }}</option>
					@endforeach
                </select>

        {!! Form::submit('Create Post',$attributes=['class' => 'btn btn-success btn-lg btn-block','style'=>"margin-top:20px"]) !!}
		{!! Form::close() !!}
 </div>
</div>

@endsection
@section('scripts')


	 <!-- <script src="{{asset('plugins/summernote/summernote.min.js')}}"></script>
	
    <script>
        jQuery(document).ready(function () {

            $('.summernote').summernote({
            	 selector:'textarea'
                height: 350,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
        });
    </script>  -->

	
    <script type="text/javascript">
		$(".js-example-basic-multiple").select2();
	</script>

  <script src="{{asset('js/parsley.min.js')}}" type="text/javascript"></script> 


 <script src="{{asset('')}}"></script>

  <script>tinymce.init({
   selector:'textarea'
  
    });

  </script>


@endsection
