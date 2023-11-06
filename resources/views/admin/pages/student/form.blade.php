@extends('admin.master')
@section('content')
<form action="{{route('student.store')}}" method="post">
    @csrf

<div class="form-group">
    <label for="">Student Name</label>
    <input type="text" class="form-control" id=""  placeholder="Enter Name" name="student_name">
    
    @error('student_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Select Paidcourse:</label>
    <input type="text" class="form-control" id=""  placeholder="Enter Name" name="paidcourse_id">
   

   </div>
   <div class="form-group">
    <label for="">Select Teacher:</label>
    <input type="text" class="form-control" id=""  placeholder="Enter Name" name="teacher_id">
    
   
  </div>

  <div class="form-group">
    <label for="">Upload Image: </label>
    <input type="file" class="form-control">
  </div>

  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" class="form-control" id="" name="student_description" cols="10" rows="5"></textarea>
    @error('student_description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection








