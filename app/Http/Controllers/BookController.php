<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{public function list(){
    return view('admin.pages.book.list');
}
public function createform(){
    return view('admin.pages.book.form');
}
public function store(Request $request){
dd($request->all());
}
    
}
