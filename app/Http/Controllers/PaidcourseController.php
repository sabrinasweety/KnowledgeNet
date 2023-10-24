<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaidcourseController extends Controller
{
    public function list()
    {
        return view('admin.pages.paidcourse.list');
    }

    public function createform()
    {
        return view('admin.pages.paidcourse.form');
    }
    public function store(Request $request)
{
    return dd($request->all());
}}

