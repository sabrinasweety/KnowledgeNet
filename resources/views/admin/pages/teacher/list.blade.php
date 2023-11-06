@extends('admin.master')
@section('content')
<h1>Teachers</h1>
<a href="{{url('/teacher/form')}}" class='btn btn-primary'>Add Teacher</a>
<table class="table">
  <thead>
  <tr>
      <th scope="col">#</th>
      
      <th scope="col">Teacher_Name</th>
      <th scope="col">Teacher_status</th>
      <th scope="col">Action</th>
    

    </tr>
  </thead>
  <tbody>
    @foreach($teachers as $key=>$teacher)
    <tr>
    <th scope="row">{{ $teacher->id }}</th>
      <td>{{$teacher->name}}</td>
      <td>{{$teacher->status}}</td>
      <td>
          <a class="btn btn-success" href="">View</a>
        <a class="btn btn-success" href="">Delete</a>
        <a class="btn btn-success" href="">Edit</a>

      </td>
      
      
    </tr>
    @endforeach
    
  </tbody>
</table>
{{$teachers->links()}}


@endsection
