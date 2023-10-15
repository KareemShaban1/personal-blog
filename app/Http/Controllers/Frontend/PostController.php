<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Get post by it's slug
    public function getPostBySlug($slug)
    {
        

        // I've Pass Slug to Get the Category per it's Slug
        $post = Post::with(['category', 'user'])->whereStatus(true)->whereSlug($slug)->firstOrFail();
        $post_title = Post::select('title')->whereSlug($slug)->first();

        views($post)->record();
        
        return view('frontend.post', compact('post', 'post_title'));
    }
}