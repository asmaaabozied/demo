{{--@extends('layouts.yo3an_wagef.master')--}}

{{--@section('content')--}}

@extends('frontend.master')

@section('content')
<section class="menuSec">
    <div class="row">

      <div class="col-lg-7 col-md-12 rWbg forMobOnly">
        <div class="centerImg">
          <img src="{{ asset('front/yo3an_wagef') }}/img/1.png" alt="" data-aos="fade-in"
          data-aos-easing="linear"
        data-aos-duration="700">
        </div>
      </div>
      <div class="col-lg-5 col-md-12 cartBigDiv">
          <div class=" row">
            {{-- <h5 class="adDetails">Invoice No.{{ $order->id }}</h5> --}}
            <h5 class="adDetails">@lang('orders.attributes.id')</h5>
            <div class="cartTot">
              <h6>#{{ $order->id }} </h6>
            </div>

            <h5 class="adDetails">@lang('orders.attributes.address')</h5>
            <div class="cartTot">
              <h6>{{ $order->city }}, {{ $order->area }} , @lang('orders.attributes.block'): {{ $order->block }} , {{ $order->street }} , @lang('orders.attributes.house'): {{ $order->house }}</h6>
            </div>

            <h5 class="adDetails">@lang('orders.attributes.phone')</h5>
            <div class="cartTot">
              <h6>{{ $order->phone }} </h6>
            </div>
            <hr>
            @if (isset($payment))
            <h1>
                @if ($payment=="success")
                    @lang('orders.invoice.payment_successful')
                @else
                @lang('orders.invoice.payment_unsuccessful')
                <div class="twoFbtns">
                    <button class="logreg" type="button" style="background-color:#F4C400; border-color:#F4C400; font-size: 14pt" onclick="window.location='{{ url('/checkout') }}';" >
                        @lang('orders.invoice.return_checkout')
                    </button>
                    <button class="logreg" type="button" style="background-color:red; border-color:red; font-size: 14pt" onclick="window.location='{{ url('/') }}';">
                        @lang('front.cancel')
                    </button>
                </div>
                @endif
            </h1>
            <hr>
            @endif
            <div class="clearfix"></div>
            <h5>@lang('front.order_summary')</h5>
            @foreach($order->items as $item)
            <a class="cartItem col-12">
              <img src="{{ $item->item->getFirstMediaUrl('default', 'thumb') }}" alt="">
              <span class="cartItmNa" >{{ $item->item->name }} </span>
              <div class="input-group">
                <input type="text" name="quant[1]"
                class="form-control input-number" value="{{ $item->qty }}" min="1" max="100" disabled readonly>
              </div>
              <h5>
                    {{ price($item->item->getPrice()) }}
              </h5>
            </a>
            @endforeach
            <div class="cartTot">
              <div class="rTot">
                <table>
                  <tr>
                    <td>@lang('front.sub_total')</td>
                    <td>{{ price($order->subtotal) }}</td>
                  </tr>
                  <tr>
                    <td>@lang('orders.attributes.shipping_price')</td>
                    <td>{{ price($order->shipping_price) }}</td>
                  </tr>
                  <tr>
                    <td>@lang('front.total')</td>
                    <td>{{ price($order->total+$order->shipping_price) }}</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-7 col-md-12 rWbg forDeskOnly">
          <div class="centerImg">
            <img src="{{ asset('front/yo3an_wagef') }}/img/1.png" alt="" data-aos="fade-in"
            data-aos-easing="linear"
          data-aos-duration="700">
          </div>
      </div>
    </div>
  </section>
@endsection
