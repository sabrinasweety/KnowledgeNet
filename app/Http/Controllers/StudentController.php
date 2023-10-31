<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Paidcourse;
use App\Models\Teacher;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        $students=Student::all();
        return view('admin.pages.student.list',compact('students'));
    }
    public function createform(){
        $paidcourses=Paidcourse::all();
        $teachers=Teacher::all();

        return view('admin.pages.student.form',compact('paidcourses','teachers'));
    }
    public function store(Request $request){
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
