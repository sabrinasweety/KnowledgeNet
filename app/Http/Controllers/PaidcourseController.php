<?php

namespace App\Http\Controllers;

use App\Models\Paidcourse;
use Illuminate\Http\Request;

class PaidcourseController extends Controller
{
    public function list()


    {
        $paidcourses=Paidcourse::paginate(2);
        return view('admin.pages.paidcourse.list',compact("paidcourses"));
    }

    public function createform()
    {
        return view('admin.pages.paidcourse.form');
    }
    public function store(Request $request)
{
    //return dd($request->all());
    Paidcourse::create(
        [
            'name'=>$request->paidcourse_name,
            'description'=>$request->description,
        ]
    );

    return redirect()->back();

}}

