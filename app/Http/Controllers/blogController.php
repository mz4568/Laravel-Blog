<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class blogController extends Controller
{

	 public function index()
    {
      $post=Post::all();
      return view('blog.index',compact('post'));  
    }
  
    public function getSingle($slug)
    {
        $post=Post:: where('slug',$slug)->first();
        return view('blog.single',compact('post'));
      
    }
   
}
