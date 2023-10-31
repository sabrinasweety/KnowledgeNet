@extends('admin.master')
@section('content')
<form action="{{route('student.store')}}" method="post">
    @csrf

<div class="form-group">
    <label for="">Student Name</label>
    <input type="text" class="form-control" id=""  placeholder="Enter Name" name="name">
    
   
  </div>
  <div class="form-group">
    <label for="">Select Paidcourse:</label>
   <select class="form-control" name="paidcourse_id" id="">
   @foreach ($paidcourses as $paidcourse)
    <option value="{{$paidcourse->id}}">{{$paidcourse->name}}</option>
    @endforeach

</select>
   </div>
   <div class="form-group">
    <label for="">Select Teacher:</label>
   <select class="form-control" name="teacher_id" id="">

    @foreach ($teachers as $teacher )
    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
    @endforeach
   
   </select>
  </div>

  <div class="form-group">
    <label for="">Upload Image: </label>
    <input type="file" class="form-control">
  </div>

  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" class="form-control" id="" name="student_description" cols="10" rows="5"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection








