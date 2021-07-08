@extends('layouts.yo3an_wagef.master')

@section('content')


{{ BsForm::post(LaravelLocalization::localizeURL(url('/cart')), ['id' => 'product-cart-form2-'.$product->id]) }}
{{ Form::hidden('item_id', $product->id) }}
{{ Form::hidden('buy_now', 0) }}
{{ Form::hidden('item_type', $product->getMorphClass()) }}
{{ BsForm::close() }}
<section class="menuSec">
  <div class="row">
    <div class="col-lg-7 col-md-12 rWbg forMobOnly">
      <div class="centerImg">
        <img src="{{ asset('front/yo3an_waged') }}/img/1.png" alt="" data-aos="fade-in"
      data-aos-duration="700">
      </div>
    </div>
   
    <div class="col-lg-5 col-md-12 proDetails">
      <div class="proDetailInner">
        <div class="choItm">
          <img src="{{ $product->getFirstMediaUrl() }}" alt="">
        </div>
        <form action="">
        <div class="itmDet">
          <h5>
            {{ $product->name ?? '' }}
            <span class="spPrice">{{ price($product->price) }}</span>
          </h5>
        </div>
        <div class="itmDet">
          <h4>{!! $product->desccription ?? '' !!}
            <span>
              <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="qty">
                      <i class="fas fa-minus"></i>
                    </button>
                </span>
                <input type="text" name="qty" form="product-cart-form2-{{ $product->id }}" class="form-control input-number" value="1" min="1" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="qty">
                        <i class="fas fa-plus"></i>
                    </button>
                </span>
              </div>
            </span>
          </h4>
        </div>
        <br>

        <div class="itmLabl">
          <label for="">select size</label>
        </div>
        <div class="itmDet wzBord">
            @foreach($product->sizes as $size)
                <label>
                    <input type="radio" name="size_id" id="xs-size" form="product-cart-form2-{{ $product->id }}"
                    value="{{ $size->id }}" {{ $loop->first ? 'checked' : '' }}/>
                    @php
                    $size_name = $size->name;
                    @endphp
                    <span><h5>@lang('sizes.options.'.$size_name)</h5> <small style="font-size: 11pt; color: #d3001d; font-weight:bold">{{ price($size->price) }}</small> </span>
                </label>
            @endforeach
        </div>
        <button type="button" class="subBtn" onclick="addToCart('product-cart-form2-{{ $product->id }}')">@lang('front.add_to_cart')</button>
      </form>

      </div>
    </div>
    
    <div class="col-lg-7 col-md-12 rWbg forDeskOnly">
      <div class="centerImg">
        <img src="{{ asset('front/yo3an_waged') }}/img/1.png" alt="" data-aos="fade-in"
      data-aos-duration="700">
      </div>
    </div>
  </div>
</section>
@endsection
