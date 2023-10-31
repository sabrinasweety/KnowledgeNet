@extends('admin.master')
@section('content')
<h1>Paidcourse</h1>
<a href="{{url('/paid/form')}}" class='btn btn-primary'>Create paidcourse</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Paidcourse Name</th>
      <th scope="col">Description</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($paidcourses as $paidcourse)
    <tr>
      <th scope="row">{{ $paidcourse->id }}</th>
      <td>{{$paidcourse->name}}</td>
      <td>{{$paidcourse->description}}</td>
    
    </tr>
    @endforeach
  </tbody>
</table>
{{ $paidcourses->links() }}
@endsection