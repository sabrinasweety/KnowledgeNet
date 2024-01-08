<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Paidcourse;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaidcourseController extends Controller
{
    public function list()


    {  $paidcourses=Paidcourse::with(['teacher'])->paginate(10);
       // $paidcourses=Paidcourse::paginate(2);
        return view('admin.pages.paidcourse.list',compact("paidcourses"));
    }

    public function view($id){

        $paidcourse=Paidcourse::find($id);
        $teachers=Teacher::all();
        return view('admin.pages.paidcourse.view',compact('teachers','paidcourse'));
    }
    public function delete($id){

        $paidcourse=Paidcourse::find($id);
        if($paidcourse){
            $paidcourse->delete($id);
            notify()->success(' Deleted Successfully.');
      return redirect()->back();
        }
    }

    public function edit($id)
    {
      $paidcourse=Paidcourse::find($id);

      $teachers=Teacher::all();
      

      return view('admin.pages.paidcourse.edit',compact('teachers','paidcourse'));
     
    }

    public function update(Request $request,$id)
    {
        $paidcourse=Paidcourse::find($id);

        if($paidcourse)
        {

          $fileName=$paidcourse->image;
          if($request->hasFile('image'))
          {
              $file=$request->file('image');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
             
              $file->storeAs('/uploads',$fileName);
    
          }

          $paidcourse->update([
            'teacher_id'=>$request->teacher_id,
                'name'=>$request->paidcourse_name,
                'price'=>$request->paidcourse_price,
                'description'=>$request->paidcourse_description,
                
                'image'=>$fileName
                
          ]);

          notify()->success('Paidcourse updated successfully.');
          return redirect()->back();
        }
    }








    public function createform()
    { $teachers=Teacher::all();
        return view('admin.pages.paidcourse.form',compact('teachers'));
    }
    public function store(Request $request)
{ $validate=Validator::make($request->all(),[
            'teacher_id'=>'required',
            
            'paidcourse_name'=>'required',
            'paidcourse_price'=>'required|numeric|min:10',
    //return dd($request->all());
]);

if($validate->fails())
{
  return redirect()->back()->withErrors($validate);
}
  $fileName=null;
      if($request->hasFile('image'))
      {
          $file=$request->file('image');
          $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
         
          $file->storeAs('/uploads',$fileName);

      }




    Paidcourse::create(
        [
            'teacher_id'=>$request->teacher_id,
                'name'=>$request->paidcourse_name,
                'price'=>$request->paidcourse_price,
                'link'=>$request->paidcourse_link,
                'description'=>$request->paidcourse_description,

                
                'image'=>$fileName
        ]
    );

    return redirect()->back();

}}

