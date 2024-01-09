@extends('admin.master')
@section('content')
<h1>Paidcourse</h1>
<a href="{{route('paidcourse.form')}}" class='btn btn-primary'>Create paidcourse</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Paidcourse Name</th>
     
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($paidcourses as $paidcourse)
    <tr>
      <th scope="row">{{ $paidcourse->id }}</th>
      <td>{{$paidcourse->name}}</td>
      
      <td>{{$paidcourse->price}}</td>
      
      <td>
      <img width="20%" src="{{url('/uploads/'.$paidcourse->image)}}" alt=""></td>
      <td>{{$paidcourse->description}}</td>
      <td>{{$paidcourse->status}}</td>
      <td><a class="btn btn-success" href="{{route('paid.view',$paidcourse->id)}}">View</td>
      <td><a class="btn btn-primary" href="{{route('paid.edit',$paidcourse->id)}}">Edit</td>
      <td><a class="btn btn-secondary" href="{{route('paid.delete',$paidcourse->id)}}">Delete</td>
      
    
    </tr>
    @endforeach
  </tbody>
</table>
{{ $paidcourses->links() }}
@endsection