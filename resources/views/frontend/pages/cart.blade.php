@extends('frontend.master')

@section('content')

<div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span class="ml-2">Continue Shopping</span></div>
                    <hr>
                    <h6 class="mb-0">Shopping cart</h6>
                    <div class="d-flex justify-content-between"><span>You have 
                    @if(session()->has('vcart'))
                                    {{ count(session()->get('vcart')) }}
                                @else
                                0
                                @endif
                    items in your cart</span>
                        <div class="d-flex flex-row align-items-center"><span class="text-black-50">Sort by:</span>
                            <div class="price ml-2"><span class="mr-1">price</span><i class="fa fa-angle-down"></i></div>
                        </div>
                    </div>

                    <!--  $cart=session()->get('vcart');
                        $subtotal_array=array_column($cart,'subtotal');
                        $sum=array_sum($subtotal_array);
                        dd($sum); --> 

                        @php
    $vcart = session()->get('vcart');
    $subtotal = 0;

    if (is_array($vcart) && count($vcart) > 0) {
        $subtotal = array_sum(array_column($vcart, 'subtotal'));
    }
@endphp

                  

                    @if(session()->has('vcart'))


                    @foreach (session()->get('vcart') as $item )
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="https://i.imgur.com/QRwjbm5.jpg" width="40">
                            <div class="ml-2"><span class="spec">{{$item['name']}}</span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block">{{$item['quantity']}} x {{$item['price']}} .BDT</span><span class="d-block ml-5 font-weight-bold"> = {{$item['subtotal']}} .BDT</span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                    @endforeach
                    
                   
                   
                    
                </div>
            </div>
            <div class="col-md-4">
            
                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span>{{ $subtotal }} BDT</span></div>
                    <div class="d-flex justify-content-between information"><span>Shipping</span><span>70.00 BDT</span></div>
                    <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span>{{ $subtotal+70 }} BDT</span></div>
                    <a href="{{route('checkout')}}" class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="button"><span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span></a></div>
            </div>
            @else
                    <p> No item<P>
                    @endif
        </div>
            </div>
            </div>
            </div>

           
   
@endsection