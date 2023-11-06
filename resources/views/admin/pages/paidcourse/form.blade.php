@extends('admin.master')
@section('content')


<form action="{{route('paid.store')}}" method="post">
    @csrf





<div class="form-group">
    <label for="">Paidcourse Name</label>
    <input type="text"    name="paidcourse_name"    class="form-control" id=""  placeholder="Enter Name" input="paidcourse_name">
    @error('paidcourse_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>
  
  
  <div class="form-group">
    <label for="">Description</label>
    <textarea name="description"         class="form-control" id="" input="description" cols="10" rows="5"></textarea>
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection