<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
  public function registration()
  {
    return view('frontend.pages.registration');
    
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
