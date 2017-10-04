<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
class pagesController extends Controller
{
 
    public function index()
    {

        $posts=Post::all();
        $category=Category::all();   
        return view('pages.home',compact('category','posts'));
       
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function slider()
    {
        return view('pages.slider');
    }

}
