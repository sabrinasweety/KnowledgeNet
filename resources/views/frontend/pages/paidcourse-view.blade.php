
@extends('frontend.master')


@section('content')

<div class="owl-carousel courses-carousel">
<div class="courses-item position-relative">
<img class="img-fluid" src="{{url('/uploads/'.$singlePaidcourse->image)}}"alt="">
                <div class="courses-text">
                    <h4 class="text-center text-white px-3">{{$singlePaidcourse->name}}</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                            <span class="text-white"><i class="fa fa-user mr-2"></i>{{$singlePaidcourse->description}}</span>
                            <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                        </div>
                    </div>
                    <div class="w-100 bg-white text-center p-4" >
                        
                                <a type="submit" class="btn btn-primary" href="{{route('frontendenroll.form',$singlePaidcourse->id)}}">Enroll Now</a>

                        </form>
                    </div>
                </div>
            </div>

</div>
            @endsection


