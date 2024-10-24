<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function create(){
        return view('create');
    }
    public function store(request $request){
        return $request;
    }
}
