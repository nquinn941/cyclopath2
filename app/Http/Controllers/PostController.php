<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $validatedData = $request->validate([
                'content'=>'required',
            ]);
            $post = new Post;
            $post -> user_id =Auth::user()->id;
            $post -> content = $validatedData['content'];
            $post -> rating = "0";
            $post -> save();
            return redirect()->route('post.index')->with('message','Post Created');
        }

        else{
            return redirect()->route('login');
        }
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post = Post::findOrFail($id);
        if(($post->user_id)==Auth::user()->id){
            $post->delete();
        }
        return redirect()->route('post.index');
    }
    public function page()
    {
        return view('post.index');
    }
    public function apiIndex()
    {
        $posts = Post::all();
        return $posts;
    }
    public function apiStore(Request $request)
    {
        $post = new Post;
        $post -> user_id =20;
        $post -> content = $request['content'];
        $post -> rating = "0";
        $post -> save();
        return $post;
    }
    
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show')->with('post', $post);
    }
}