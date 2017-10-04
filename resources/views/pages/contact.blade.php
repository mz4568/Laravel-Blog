@extends('layout.main')
@section('title','|Contact Page')

@section('content')
<div class='container'>
 <div class='row'> 
   <h1> Contact Me </h1> 
 <form>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control"  placeholder="Email">
  </div>
  <div class="form-group">
    <label >Subject</label>
    <input type="text" class="form-control"  placeholder="Subject">
  </div>
  <div class="form-group">
    <label>Message</label>
    <textarea type="text" class="form-control" placeholder='type your msg...'> </textarea>
  </div>
  <button type="submit" class="btn btn-success btn-lg">Submit</button>
 </form>
</div> <!--row-->
</div>  <!--container-->
  @stop 
  
 