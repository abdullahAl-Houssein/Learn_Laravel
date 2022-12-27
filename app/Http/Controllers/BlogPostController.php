<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
  //  /**
    // * Display a listing of the resource.
     //*
     //* @return \Illuminate\Http\Response
     //*/
    public function index()
    {
        $posts = BlogPost::all();
        return view('blog.index',[
            'posts' => $posts
        ]);
        //return $posts;
    }

  //  /**
  //   * Show the form for creating a new resource.
  //   *
 //    * @return \Illuminate\Http\Response
 //    */
    public function create()
    {
        return view('blog.create');
    }

   // /**
 //    * Store a newly created resource in storage.
  //   *
  //   * @param  \Illuminate\Http\Request  $request
   //  * @return \Illuminate\Http\Response
   //  */
    public function store(Request $request)
    {
        $newPost = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
        ]);
        return redirect('blog/'.$newPost->id);
    }

  //  /**
 //    * Display the specified resource.
 //    *
  //   * @param  \App\Models\BlogPost  $blogPost
 //    * @return \Illuminate\Http\Response
 //    */

    public function show(BlogPost $blogPost)
    {
        return view('blog.show',[
            'post' => $blogPost
        ]);
        //return $blogPost;
    }

   // /**
     //* Show the form for editing the specified resource.
     //*
     //* @param  \App\Models\BlogPost  $blogPost
     //* @return \Illuminate\Http\Response
     //*/
    public function edit(BlogPost $blogPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        //
    }
}
