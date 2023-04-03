<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Get Catrgory by it's slug
    public function getCategoryBySlug($slug)
    {
        //Get active posts only in current Category
        $posts = Category::whereSlug($slug)->firstOrFail()->publishedPosts();
        $category_name = Category::select('name')->whereSlug($slug)->firstOrFail();

        return view('frontend.category', compact('posts', 'category_name'));
    }
}
