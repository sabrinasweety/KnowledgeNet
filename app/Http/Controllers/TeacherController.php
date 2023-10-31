<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Paidcourse;


class TeacherController extends Controller
{
    public function list(){
        $teachers=Teacher::all();
        return view('admin.pages.teacher.list',compact('teachers'));
     
    }
    public function createform(){
        $paidcourses=Paidcourse::all();
        $students=Student::all();
        return view('admin.pages.teacher.form',compact('paidcourses','students'));
    }
    
    public function store(Request $request){
    //dd($request->all());
    Teacher::create([


        
        'paidcourse_id'=>$request->paidcourse_id,
        'student_id'=>$request->student_id,
        'name'=>$request->teacher_name,
        'description'=>$request->teacher_description

    ]);
    return redirect()->back();
    }
    }

