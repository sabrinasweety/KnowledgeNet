<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        return view('admin.pages.student.list');
    }
    public function createform(){
        return view('admin.pages.student.form');
    }
    public function store(Request $request){
    dd($request->all());
    }
}
