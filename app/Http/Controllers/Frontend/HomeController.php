<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        // Get the active posts with (Category and User) details
        $posts = Post::whereStatus(true)->with(['category', 'user'])->orderBy('id','desc')->paginate(10);
        return view('frontend.index', compact('posts'));
    }

}
