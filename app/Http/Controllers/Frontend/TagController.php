<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function getPostsPerTags($tag)
    {
        $tags = Tag::whereName($tag)->firstOrFail()->publishedPosts();

        return view('frontend.tag', compact('tags', 'tag'));
    }
}
