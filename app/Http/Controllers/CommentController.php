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
        $c->user_id = 1;
        $c->post_id = 20;
        $c->content = $request['content'];
        $c->rating = 0;
        $c->save();
    }
}