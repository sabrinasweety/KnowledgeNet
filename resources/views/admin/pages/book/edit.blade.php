@extends('admin.master')
@section('content')
<form action="{{route('book.update',$book->id)}}" method="post">
@csrf
@method('put')

<div class="form-group">
    <label for="">Book Name</label>
    <input type="text" class="form-control" id=""  placeholder="Enter Name" name="book_name">
   @error('book_name')
   <div class="alert alert-danger">{{$message}}</div>
   @enderror

  </div>
  <div class="form-group">
    <label for="">Logo</label>
    <input type="file" class="form-control" id=""  placeholder="Enter Name" name="book_logo">
   
  </div>
  <div class="form-group">
    <label for="">Student_ID</label>
    <input type="number" class="form-control" id=""  placeholder="Enter Name" name="student_id">
    @error('student_id')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
   
  </div>
  <div class="form-group">
    <label for="">Purchase_ID</label>
    <input type="number" class="form-control" id=""  placeholder="Enter Name" name="purchase_id">
    @error('purchase_id')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
   
  </div>
  <div class="form-group">
    <label for="">Author Name</label>
    <input type="text" class="form-control" id=""  placeholder="Enter Name" name="author_name">
   
  </div>
  <div class="form-group">
    <label for="">Price</label>
    <input type="text" class="form-control" id=""  placeholder="Enter price" name="price">
   
  </div>
  <div class="form-group">
    <label for="">Book Description</label>
    <textarea class="form-control" class="form-control" id="" input name="book_description" cols="10" rows="5"></textarea>
</div>
  
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection