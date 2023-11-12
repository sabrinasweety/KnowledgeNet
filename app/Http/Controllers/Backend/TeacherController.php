<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;



class TeacherController extends Controller
{
    public function list(){
        $teachers=Teacher::paginate(2);
        return view('admin.pages.teacher.list',compact('teachers'));
     
    }
    public function createform(){
        
        return view('admin.pages.teacher.form');
    }
    
    public function store(Request $request){
    //dd($request->all());
    Teacher::create([


        
        
        'name'=>$request->name,
        'description'=>$request->teacher_description

    ]);
    return redirect()->back();
    }
    }

