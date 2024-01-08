@extends('frontend.master')


@section('content')


<div class="owl-carousel courses-carousel">
            @foreach ($paidcourses as $paidcourse)
        
        
            <div class="courses-item position-relative">
                <img class="img-fluid" src="{{url('/uploads/'.$paidcourse->image)}}"alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">{{$paidcourse->name}}</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>{{$paidcourse->description}}</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="{{route('single.paidcourse',$paidcourse->id)}}">Course Detail</a>
                    </div>
                </div>
            </div>
       
        
            @endforeach
            </div>

            @endsection