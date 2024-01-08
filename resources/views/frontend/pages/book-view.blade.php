@extends('frontend.master')


@section('content')
<div class="team-item">
                    <img class="img-fluid w-100" src="{{url('/uploads/'.$singleBook->logo)}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">{{$singleBook->name}}</h5>
                        <p class="mb-2">{{$singleBook->description}}</p>
                        <p class="mb-2">{{$singleBook->price}}</p>
                        <div class="d-flex justify-content-center">
                            <a class="mx-1 p-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="mx-1 p-1" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        
                        <a type="submit" class="btn btn-primary" href="{{route('checkout',$singleBook->id)}}">Buy Now</a>
                        <a type="submit" class="btn btn-primary" href="{{route('add.toCart',$singleBook->id)}}">Add to cart</a>

                
            </div>
                </div>

                @endsection