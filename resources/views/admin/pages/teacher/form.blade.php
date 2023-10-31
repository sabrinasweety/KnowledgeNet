@extends('admin.master')
@section('content')
<form action="{{route('teacher.store')}}" method="post">
    @csrf

    <div class="form-group">
    <label for="">Teacher Name</label>
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
    <label for="">Select student:</label>
   <select class="form-control" name="student_id" id="">

    @foreach ($students as $student )
    <option value="{{$student->id}}">{{$student->name}}</option>
    @endforeach
   
   </select>
  </div>

  <div class="form-group">
    <label for="">Upload Image: </label>
    <input type="file" class="form-control">
  </div>

  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" class="form-control" id="" name="teacher_description" cols="10" rows="5"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection








