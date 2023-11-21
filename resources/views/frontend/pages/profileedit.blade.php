@extends('frontend.master')
@section('content')

<form action="{{route('profile.update')}}" method='post'>
    @csrf
    @method('put')

  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input value="{{auth()->user()->email}}" required name='email'   type="Enter email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input value="{{auth()->user()->name}}"required type="Edit Name" class="form-control" id="" placeholder="name" name='name'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Role</label>
    <input value="{{auth()->user()->role}}" required type="role" class="form-control" id="" placeholder="role" name='role'>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection