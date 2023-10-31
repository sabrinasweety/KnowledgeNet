@extends('admin.master')
@section('content')
<h1>Teachers</h1>
<a href="{{url('/teacher/form')}}" class='btn btn-primary'>Add Teacher</a>
<table class="table">
  <thead>
  <tr>
      <th scope="col">#</th>
      <th scope="col">Teacher_Name</th>
      <th scope="col">Taken Course</th>
      <th scope="col">Taken Student</th>
      <th scope="col">Teacher_image</th>
      <th scope="col">Teacher_Description</th>
      <th scope="col">Teacher_status</th>
    

    </tr>
  </thead>
  <tbody>
    @foreach($teachers as $key=>$teacher)
    <tr>
    <th scope="row">{{$key+1}}</th>
    
      <td>{{$teacher->name}}</td>
      <td>{{$teacher->paidcourse_id}}</td>
      <td>{{$teacher->student_id}}</td>
      <td>image here</td>
      <td>{{$teachers->status}}</td>
      <td>
        <a class="btn btn-success" href="">View</a>
        <a class="btn btn-success" href="">Delete</a>
        <a class="btn btn-success" href="">Edit</a>

      </td>
      
      
    </tr>
    @endforeach
    
  </tbody>
</table>


@endsection
