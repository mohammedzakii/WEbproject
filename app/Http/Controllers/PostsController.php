<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth' , ['except'=>['index' , 'show']]);
    }
    public function index()
    {
        //$posts= Post::orderBy('created_at', 'desc')->take(1)->get();------------->to appear one elements from database
        //$posts= DB::select('select * FROM posts');----------------- to appear all elements fromdata base
        //$posts= Post::orderBy('created_at', 'desc')->pagenite(2);------------->to appear two elements from database

        $posts= Post::orderBy('created_at', 'desc')->get(); //--------to appear all elements fromdata base
        return view('posts.index')->with('posts', $posts);
        //
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
        $this->validate(request(), [
          'subject' => 'required',
          'firstname' => 'required',
          'lastname' => 'required',
          'body' => 'required',
          
        ]);
        
   

        $post = new Post;
        $post->subject   = $request->input('subject');
        $post->firstname = $request->input('firstname');
        $post->lastname  = $request->input('lastname');
        $post->body      = $request->input('body');
        $post->user_id   =  auth()->user()->id;
        $post->save();

        return redirect('/posts')->with('success', 'Done successfully'); 
        
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        return view('posts.show')->with('post' , $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);

        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error' , 'you can not access');
            # code...
        }
        return view('posts.edit',compact('post','id'));
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
        $post = post::find($id);
        $this->validate(request(), [
          'subject' => 'required',
          'firstname' => 'required',
          'lastname' => 'required',
          'body' => 'required',
        ]);
        $post->subject = $request->get('subject');
        $post->firstname = $request->get('firstname');
        $post->lastname = $request->get('lastname');
        $post->body = $request->get('body');
        $post->save();
        return redirect('/posts')->with('success','posts has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error' , 'you can not access');
            # code...
        }
        $post->delete();
        return redirect('/posts')->with('success','Post has been  deleted');

    }
}
