<?php
namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
class CommentController extends Controller
{
    public function index()
    
    {
    }
    public function show($id)
    
    {
    }
    public function create()
    
    {
    }
    public function store(Request $request)
    {
        $c = new Comment;
        $c->user_id = Auth::user()->id;
        $c->post_id = 1;
        $c->content = $request['content'];
        $c->rating = 0;
        $c->save();

    }

    public function apiStore(Request $request)
    {
        $c = new Comment;
        $c->user_id = Auth::user()->id;
        $c->post_id = 1;
        $c->content = $request['content'];
        $c->rating = 0;
        $c->save();
    }

    public function apiIndex($id)
    {
        $comments = Comment::get()->where('post_id',$id);
        return $comments;
    }
}