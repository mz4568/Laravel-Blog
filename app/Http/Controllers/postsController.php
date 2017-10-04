<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Image;
use Session;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $post = Post::all();  
         return view('posts.index',compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories=Category::all();   
         $tags=Tag::all();   

         \Session::flash('message','Post created successfully');
         return view('posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {


      $this->validate($request, array(
                'title'       => 'required|max:255',
                'body'        => 'required',
                'slug'        => 'required|alpha_dash|min:2|max:255|unique:posts,slug',
                'image'       => 'required',
                'cat_name'    => 'required|max:255',
                'tag_name'    => 'required|max:255',
                
                 ));

         $posts       = new Post;

         if($image=$request->file('image')){
            $imageName =time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'),$imageName);
            $posts->image=$imageName;
          }

             
        $posts->title             = $request->title;
        $posts->body              = $request->body;
        $posts->slug              = $request->slug;
        $posts->cat_name          = $request->cat_name;
        $posts->tag_name          = $request->tag_name;
        
        $posts->save();
       
      
      //set message
      \Session::flash('message','Post inserted successfully');
      return\Redirect::route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $post=Post::find($id);   
     return view('posts.show',compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $posts      =Post::find($id);
         $categories =Category::all();
         $cats       = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->cat_name;
        }
       
        $tags=Tag::all();
         $tags2 = array();
        foreach ($tags as $tag) {
            $tags2[$tag->id] = $tag->tag_name;
        }
        \Session::flash('message','Post edited successfully');
        return view('posts.edit',compact('posts','cats','tags2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

                $posts       = Post::find($id);

                if($request->input('slug') == $posts->slug){

                $this->validate($request, array(
                'title'         => 'required|max:255',
                'body'          => 'required',
                'image'         => 'max:255',
                'category'      => 'required|max:255',
                'tag'           => 'max:255',
               
               ));
            }else{

                  $this->validate($request, array(
                'title'         => 'required|max:255',
                'body'          => 'required',
                'slug'          => 'required|alpha_dash|min:2|max:255|unique:posts,slug',
                'image'         => 'required',
                'cat_name'      => 'required|max:255',
                'tag_name'      => 'required|max:255',
               
               ));
            }

                if($request->hasFile('image')){
            $image = $request->file('image');
            $image_fileName=$image->getClientOriginalName() ;
            $image->move(public_path('images'),$image_fileName);
             
             } 

        $posts       = Post::find($id);

        $posts->title             = $request->title;
        $posts->body              = $request->body;
        $posts->slug              = $request->slug;
        $posts->image             = $request->image;
        $posts->cat_name          = $request->cat_name;
        $posts->tag_name          = $request->tag_name;
      
        $posts->save();

       
      //set message
      Session::flash('message',' Post update successfully');
      return\Redirect::route('posts.show',$posts->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();

      \Session::flash('message','deleted successfully');
      return\Redirect::route('posts.index',array('id' => $id));
    }
}
