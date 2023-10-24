@extends('admin.master')
@section('content')
<form action="{{route('book.store')}}" method="post">
    @csrf

<div class="form-group">
    <label for="">Books Name</label>
    <input type="text" class="form-control" id=""  placeholder="Enter Name" input="book_name">
   
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" class="form-control" id="" input="book_description" cols="10" rows="5"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection