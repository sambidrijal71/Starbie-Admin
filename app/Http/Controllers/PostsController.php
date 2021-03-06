<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts=Post::all();
        // $posts = DB::select ('select * from posts');
        // return view ('posts.index')->with ('posts', $posts);

        
         $posts = Post::orderby('title','desc')->get();
        
         return view('posts.index')->with ('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'title'=>'required',
        //     'body'=>'required',
        //     'logo'=>'required'
        // ]);
       
        // create post
        $post = new Post();
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        if ($request->hasfile('logo')) {
            $file=$request->file('logo');
            $extension=$file->getClientOriginalExtension();//get image extension
            $filename=time().'.'.$extension;
            $file->move('uploads/images/',$filename);
            $post->logo=$filename;

        }else {
            return $request;
            $post->logo='';

        }
        $post->save();

        return redirect('/posts')->with('Success','Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        return view('posts.show')->with ('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);

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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
       
        // create post
        $post = post::find($id);
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();

        return redirect('/posts')->with('Success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=post::find($id);
        $post->delete();
        return redirect('/posts');with (['Message'=>"Successfully deleted"]);
    }
}
