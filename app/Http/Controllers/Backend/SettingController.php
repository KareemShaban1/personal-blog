<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        return view('backend.pages.setting.index', compact('setting'));
    }

    public function update(UpdateSettingRequest $request, Setting $setting){

        $validated = $request->validated();
        $setting->update($validated);
        // dd($validated);
        return back()->with('message','Data Updated !');
    }
}