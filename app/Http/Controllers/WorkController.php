<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function show(){
        // get data from work model
        return view ('work/index');
    }
    public function showType($type){
        // get data from work model
        $data['works'] = \DB::table('works')->where('type' , $type)->get();
        return view ('work/' . $type, $data);
    }

} 
