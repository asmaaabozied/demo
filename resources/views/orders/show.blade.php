@extends('layouts.yo3an_wagef.master')

@section('content')
    <!--Process ===================================================================================-->

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
            <h5>@lang('front.order_summary') (@lang('orders.attributes.id'): {{ $order->id }})</h5>
            @foreach($order->items as $item)
            <div class="cartItem col-12">
                <img src="{{ $item->item->getFirstMediaUrl('default', 'thumb') }}" alt="">
                <span class="cartItmNa" >{{ $item->item->name }} <!--span class="bl">x</span--> </span>
                <div class="input-group">
                    <input type="text" name="quant[1]" 
                    class="form-control input-number" value="{{ $item->qty }}" min="1" max="100">
                </div>
                <div class="prANord">
                    <h5>
                        @isset($item->size_id)
                            {{ price(app('cart')->getItemPrice($item)) }}
                        @else
                            {{ price($item->item->getPrice()) }}
                        @endisset
                    </h5>
                </div>
            </div>
            @lang('orders.invoice.total'): {{ price($order->total) }}
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
