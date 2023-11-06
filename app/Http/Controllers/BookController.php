<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{public function list(){
    $books=Book::with(['student'])->paginate(2);
    return view('admin.pages.book.list',compact("books"));
}
public function createform(){
    $students=Student::all();
    return view('admin.pages.book.form',compact("students"));
}
public function store(Request $request){

    $validate=Validator::make($request->all(),[
     'book_name'=>'required',
     'purchase_id'=>'required|numeric',
     'student_id'=>'required|numeric'
    ]);

    if($validate->fails()){
        return redirect()->back()->withErrors($validate);
    }



//dd($request->all());
Book::create([

'name'=>$request->book_name,
'description'=>$request->book_description,
'logo'=>$request->book_logo,
'author_name'=>$request->author_name,
'purchase_id'=>$request->purchase_id,
'student_id'=>$request->student_id




]);
return redirect()->back();

}
    
}
