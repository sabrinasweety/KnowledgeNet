<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function form(){
        return view('admin.pages.customer.form');
    }
}
