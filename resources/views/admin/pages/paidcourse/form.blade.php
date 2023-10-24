@extends('admin.master')
@section('content')


<form action="{{route('paid.store')}}" method="post">
    @csrf





<div class="form-group">
    <label for="">Paidcourse Name</label>
    <input type="text" class="form-control" id=""  placeholder="Enter Name" input="paidcourse_name">
   
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" class="form-control" id="" input="paidcourse_description" cols="10" rows="5"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection