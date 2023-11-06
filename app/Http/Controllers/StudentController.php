<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Paidcourse;
use App\Models\Teacher;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{
    public function list(){
        $students=Student::with(['paidcourse','teacher'])->paginate(4);
        return view('admin.pages.student.list',compact('students'));
    }
    public function createform(){
        $paidcourses=Paidcourse::all();
        $teachers=Teacher::all();

        return view('admin.pages.student.form',compact('paidcourses','teachers'));
    }
    public function store(Request $request){
        $validate=Validator::make($request->all(),[
        'paidcourse_id'=>'required',
        'teacher_id'=>'required|numeric',
        'student_name'=>'required',
        'student_description'=>'required',



        ]);
        if($validate->fails())
        {
  
          // notify()->error($validate->getMessageBag());
          // return redirect()->back();
  
          return redirect()->back()->withErrors($validate);
        }
    //dd($request->all());
    Student::create([


        
        'paidcourse_id'=>$request->paidcourse_id,
        'teacher_id'=>$request->teacher_id,
        'name'=>$request->student_name,
        'description'=>$request->student_description

    ]);
    return redirect()->back();
    }
}
