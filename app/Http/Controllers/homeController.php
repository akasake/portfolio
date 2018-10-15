<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function show(){
        $data['skills'] = \DB::table('skills')->get();
        return view ('welcome', $data);
    }
}
