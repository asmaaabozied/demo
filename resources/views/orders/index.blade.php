@extends('layouts.yo3an_wagef.master')

@section('content')
<section class="menuSec">
  <div class="row">
    
    <div class="col-lg-7 col-md-12 rWbg forMobOnly">
      <div class="centerImg">
        <img src="{{ asset('yo3an_wagef') }}/img/Group 3982.png" alt=""data-aos="fade-in"
        data-aos-easing="linear"
      data-aos-duration="700"> <!-- yellow-->
        <img src="{{ asset('yo3an_wagef') }}/img/Path 4353.png" alt="" data-aos="fade-in"
        data-aos-easing="linear"
      data-aos-duration="700"> <!-- cooker-->
        <div class="clearfix"></div>
        <img src="{{ asset('yo3an_wagef') }}/img/Path 4352.png" alt="" class="yoTitle" 
        data-aos="fade-up"
        data-aos-easing="linear"
      data-aos-duration="1000"> <!-- title-->
        <img src="{{ asset('yo3an_wagef') }}/img/Group 3984.png" alt=""
        data-aos="fade-up"
        data-aos-easing="linear"
      data-aos-duration="1500"> <!-- yo3an-->
      </div>
  </div>
    <div class="col-lg-5 col-md-12 cartBigDiv chkOt">
        <div class="row">
            <h5> @lang('orders.my_orders') </h5>
            @foreach ($orders as $order)                
            <div class="cartItem col-12">
                <span class="cartItmNa" > @lang('orders.singular'): {{ $order->id }}
                <div class="prANord">
                    <h5>
                        {{ price($order->total) }}
                    </h5>
                    <button class="btn ordAg" onclick="window.location='{{ url('/orders/'.$order->id) }}'">@lang('orders.details')</button>
                </div>
                <button class="btn ordAg" onclick="window.location='{{ url('/re-order/'.$order->id) }}'">@lang('orders.re_order')</button>
            </div>
          <hr>
          @endforeach
        </div>
    </div>
    <div class="col-lg-7 col-md-12 rWbg forDeskOnly">
        <div class="centerImg">
          <img src="{{ asset('yo3an_wagef') }}/img/Group 3982.png" alt=""data-aos="fade-in"
          data-aos-easing="linear"
        data-aos-duration="700"> <!-- yellow-->
          <img src="{{ asset('yo3an_wagef') }}/img/Path 4353.png" alt="" data-aos="fade-in"
          data-aos-easing="linear"
        data-aos-duration="700"> <!-- cooker-->
          <div class="clearfix"></div>
          <img src="{{ asset('yo3an_wagef') }}/img/Path 4352.png" alt="" class="yoTitle" 
          data-aos="fade-up"
          data-aos-easing="linear"
        data-aos-duration="1000"> <!-- title-->
          <img src="{{ asset('yo3an_wagef') }}/img/Group 3984.png" alt=""
          data-aos="fade-up"
          data-aos-easing="linear"
        data-aos-duration="1500"> <!-- yo3an-->
        </div>
    </div>
  </div>
</section>

@endsection
