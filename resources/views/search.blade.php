@extends('layouts.yo3an_wagef.master')

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
      <div class="col-lg-5 col-md-12 searchBigDiv">
        <div class="logTit">
          <a href="" class="bk">
            <i class="fas fa-chevron-circle-left"></i>
          </a>
          <h6>search</h6>
        </div>
        <div class="col-12">
          <form action="{{ route('front.search') }}" method="GET" class="perfSerch">
            <input type="text" name="name" placeholder="Perfumes">
            <i class="fa fa-search"></i>
          </form>
          @foreach ($products as $product)
            {{ BsForm::post(LaravelLocalization::localizeURL(url('/cart')), ['id' => 'product-cart-form2-'.$product->id]) }}
            {{ Form::hidden('item_id', $product->id) }}
            {{ Form::hidden('buy_now', 0) }}
            {{ Form::hidden('qty', 1) }}
            {{ Form::hidden('item_type', $product->getMorphClass()) }}
            {{ BsForm::close() }}
          <a class="MenuRow">
            <div class="row">
              <img src="{{ $product->getFirstMediaUrl() }}" onclick="window.location='{{ $product->getWebUrl() }}';" alt="">
              <div>
                <span class="foNam" onclick="window.location='{{ $product->getWebUrl() }}';">{{$product->name}}</span>
                <h6><p onclick="window.location='{{ $product->getWebUrl() }}';">{!! $product->description !!}<br></p></h6>
              </div>
              <div class="priDiv">
                <div class="foPrice">{{ price($product->price) }}</div>
                <button type="button" class=" btn addToCart" onclick="addToCart('product-cart-form2-{{ $product->id }}')">@lang('front.add_to_cart')</button>
            </div>
            </div>
          </a>
          @endforeach
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
