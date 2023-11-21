<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
  public function registration()
  {
    return view('frontend.pages.registration');
    
  }
  public function profileview()
  {
    return view('frontend.pages.profile');
  }


public function profileedit(){
 
  return view('frontend.pages.profileedit');
}



public function profileupdate(Request $request){
//dd($request->all());
$validate=Validator::make($request->all(),[
  'name'=>'required|min:2',
  'email'=>'required|email',
  'role'=>'required'
    
        ]);  
   if($validate->fails()){
  notify()->error('vul hoise');
 return redirect()->back();
}


$user=User::find(auth()->user()->id);
if($user){

$user->update([
  'name'=>$request->name,
      'email'=>$request->email,
      'role'=>'customer',
      'password'=>bcrypt($request->password),
]);

notify()->success('updated successfully');
return redirect()->back();




}


}



  public function store(Request $request){
    //dd($request->all());
    User::create([
        'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'customer',
            'password'=>bcrypt($request->password),




    ]);
    notify()->success('Registration Successful!!');
    return redirect()->back();
  }

  public function login()
  {
    return view('frontend.pages.login');
  }
  public function dologin(Request $request)
  {
    //dd($request->all());
$credentials=$request->except('_token');
//dd($credentials);
if(auth()->attempt($credentials)){
    notify()->success('successfully logged in');
    return redirect()->route('home');

}
notify()->error('Invalid ');
return redirect()->back();
  }
  public function logout(){
    auth()->logout();
    notify()->success('succesfully logout');
    return redirect()->route('home');
  }
}
