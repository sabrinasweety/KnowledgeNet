@extends('admin.master')
@section('content')
<h1>Students</h1>
<a href="{{route('student.form')}}" class='btn btn-primary'>Add Student</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student_Name</th>
      <th scope="col">Taken Course</th>
      <th scope="col">Taken Teacher</th>
      <th scope="col">Student_image</th>
      <th scope="col">Student_Description</th>
      <th scope="col">Student_status</th>
    

    </tr>
  </thead>
  <tbody>
    @foreach($students as $key=>$student)
    <tr>
    <th scope="row">{{$key+1}}</th>
    
      <td>{{$student->name}}</td>
      <td>{{$student->paidcourse->name}}</td>
      <td>{{$student->teacher_id}}</td>
      <td>image here</td>
      <td>{{$student->status}}</td>
      <td>
        <a class="btn btn-success" href="">View</a>
        <a class="btn btn-success" href="">Delete</a>
        <a class="btn btn-success" href="">Edit</a>

      </td>
      
      
    </tr>
    @endforeach
    
  </tbody>
</table>
{{$students->links()}}

@endsection
