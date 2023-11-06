<?php

namespace App\Http\Controllers;

use App\Models\Paidcourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
{ $validate=Validator::make($request->all(),[
    'paidcourse_name'=>'required',
    
    'description'=>'required'
    //return dd($request->all());
]);

if($validate->fails())
{

  // notify()->error($validate->getMessageBag());
  // return redirect()->back();

  return redirect()->back()->withErrors($validate);
}
    Paidcourse::create(
        [
            'name'=>$request->paidcourse_name,
            'description'=>$request->description,
        ]
    );

    return redirect()->back();

}}

