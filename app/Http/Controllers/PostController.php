<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('posts.index')->with('posts',$posts);
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
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'university_name'=>'required',
            'study_language'=>'required',
            'language_level'=>'required',
            'duration'=>'required',
        ]);
        $post=Post::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'university_name'=>$request->university_name,
            'study_language'=>$request->study_language,
            'language_level'=>$request->language_level,
            'duration'=>$request->duration,
            'user_id'=>Auth::id(),
            'slug'=>Str::slug($request->name),
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Post::find($id);
        return view('posts.show')->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts=Post::find($id);
        return view('posts.edit')->with('posts',$posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'university_name'=>'required',
            'study_language'=>'required',
            'language_level'=>'required',
            'duration'=>'required',
        ]);
        $post=Post::find($id);
        $post->update($request->all());
        return redirect()->back();
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect()->back();
    }

    public function deleteScholarships(){
        $posts=Post::all();

       return view('posts.deleteScholarshipss')->with('posts',$posts);
    }

    public function updateScholarships(){
        $posts=Post::all();

       return view('posts.update')->with('posts',$posts);
    }

    public function logout(Request $request) {
        Auth::logout();
       // return redirect('/login');
      }



}
