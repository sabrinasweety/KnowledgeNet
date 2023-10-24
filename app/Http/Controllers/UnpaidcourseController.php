<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnpaidcourseController extends Controller
{
    public function list()
    {
        return view('admin.pages.unpaidcourse.list');
    }

public function createform(){
    return view('admin.pages.unpaidcourse.form');
}
public function store(Request $request){

    //return($request->all());

    Unpaidcourse::create([
        'name'=>$request->unpaidcourse_name,
        'description'=>$request->unpaidcourse_description,
    ]);

    return redirect()->back();

}}

