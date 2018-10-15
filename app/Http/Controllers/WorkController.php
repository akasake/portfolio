<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function show(){
        // get data from work model
        $data['works'] = \App\Work::getAllWork();
        return view ('work/index', $data);
    }
}
