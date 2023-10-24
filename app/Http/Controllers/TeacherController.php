<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list(){
        return view('admin.pages.teacher.list');
    }
    public function createform(){
        return view('admin.pages.teacher.form');
    }
    public function store(Request $request){
    dd($request->all());
    }
}
