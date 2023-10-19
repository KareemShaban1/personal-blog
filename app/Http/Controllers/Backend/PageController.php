<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index(){

        $pages = Page::with('user')->orderBy('id', 'desc')->paginate(15);
        return view('backend.pages.page.index', compact('pages'));
    }

    public function create(){

        return view('backend.pages.page.create');
    }

    public function store(StorePageRequest $request){

        $page_data = $request->validated();
        $page_data['user_id'] = Auth()->user()->id;

        // dd($page_data);
        Page::create($page_data);

        return to_route('backend.page.index')->with('message', 'Page Created');
    }

    public function edit(Page $page){

        return view('backend.pages.page.edit', compact('page'));
    }

    public function update(UpdatePageRequest $request , $id){

        $page = Page::findOrFail($id);
        $page_data = $request->validated();
        $page_data['user_id'] = Auth()->user()->id;

        // dd($page_data);
        // Page::create($page_data);
        $page->update($page_data);

        return to_route('backend.page.index')->with('message', 'Page Created');
    }



    public function destroy(Page $page)
    {
        $page->delete();
        return back()->with('message', 'Page Deleted');
    }

    public function getSlug(Request $request)
    {
        $slug = str($request->name)->slug();
        if (Page::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . Str::random(2);
            return response()->json(['slug' => $slug]);
        } else {
            return response()->json(['slug' => $slug]);
        }
    }


}