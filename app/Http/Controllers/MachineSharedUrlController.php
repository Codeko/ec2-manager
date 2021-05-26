<?php

namespace App\Http\Controllers;


use App\Models\MachineSharedUrl;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MachineSharedUrlController extends Controller
{
    public function index(){

        $sharedUrls = MachineSharedUrl::all();


        return view('listado', ['sharedUrls'=>$sharedUrls]);
    }

    public function show($id, Request $request)
    {
        $sharedUrls = new MachineSharedUrl($request->all());
        return view('sharedUrl', ['sharedurl' => MachineSharedUrl::findOrFail($id)]);
    }
    

}
