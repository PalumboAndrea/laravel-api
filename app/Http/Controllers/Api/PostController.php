<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('type', 'technologies', 'user')->paginate(25);
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
    
    public function show(Post $post){
        $post = Post::with('type', 'technologies', 'user')->findOrFail($post->id);
        return response()->json([
            'success' => true,
            'results' => $post
        ]);
    }
}
