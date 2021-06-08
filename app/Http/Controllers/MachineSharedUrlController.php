<?php

namespace App\Http\Controllers;


use App\Models\MachineSharedUrl;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MachineSharedUrlController extends Controller
{

    public function show($url, Request $request)
    {
        $sharedUrls= \DB::table('machinesharedurls')->select('url', 'title', 'text', 'image')->get();
        return view('sharedUrl', compact('sharedUrls'));
    }


}
