<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class sidebarController extends Controller
{
    private $table="categories";
    public function index()
    {
       $category=DB::table($this->table)->paginate(4);   
        return view('pages.home',compact('category'));

    }
   
}
