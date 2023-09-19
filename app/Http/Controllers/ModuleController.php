<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function store(Request $request){

        foreach(\Module::all() as $key => $module){
            $module->disable();
        }
if($request->status != null){

    foreach($request->status as $key => $modules){
        $modules = \Module::find($modules);
        $modules->enable();
    }
}

        return redirect()->back();

    }
}
