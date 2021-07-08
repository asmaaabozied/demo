@extends('layouts.yo3an_wagef.master')

@section('content')
<section class="menuSec">
  <div class="row">
      {{ BsForm::put(LaravelLocalization::localizeURL(url('/cart/update')), ['id' => 'cart-update']) }}
      {{ BsForm::close() }}
    <div class="col-lg-7 col-md-12 rWbg forMobOnly">
      <div class="centerImg">
        <img src="{{ asset('front/yo3an_wagef') }}/img/1.png" alt="" data-aos="fade-in"
        data-aos-easing="linear"
      data-aos-duration="700"> 
      </div>
    </div>
    <div class="col-lg-5 col-md-12 cartPage cartBigDiv">
      <div class="logTit">
        <a href="{{ url('/') }}" class="bk">
          <i class="fas fa-chevron-circle-left"></i>
        </a>
        <h6>@lang('front.cart')</h6>
      </div>
      <div class="cartItem col-12">
        <table class="table table-hover table-responsive">
          <tbody>
            @foreach(app('cart')->getItems() as $item)
            <tr>
              <td width="20%">
                <img src="{{ $item->item->getFirstMediaUrl() }}" onclick="window.location='{{ $item->item->getWebUrl() }}';" alt="">
              </td>
              <td>
              <span class="cartItmNa" onclick="window.location='{{ $item->item->getWebUrl() }}';">{{ $item->item->name }} </span>
              </td>
              <td><span class="bl">x</span></td>
              <td class="itmDet">
                <span>
                  <div class="input-group">
                      <input type="hidden"
                              form="cart-update"
                              name="cart[{{ $item->item->getMorphClass() }}{{ $item->item->id }}][additional]"
                              value="{{ $item->item->id }}">
                      <input type="hidden"
                              form="cart-update"
                              name="cart[{{ $item->item->getMorphClass() }}{{ $item->item->id }}][item_id]"
                              value="{{ $item->item->id }}">
                      <input type="hidden"
                              form="cart-update"
                              name="cart[{{ $item->item->getMorphClass() }}{{ $item->item->id }}][item_type]"
                              value="{{ $item->item->getMorphClass() }}">
                      <input type="hidden"
                              form="cart-update"
                              name="cart[{{ $item->item->getMorphClass() }}{{ $item->item->id }}][milk_size]"
                              value="{{ $item->milk_size }}">
                      <input type="hidden" form="cart-update" id="xs-size" name="cart[{{ $item->item->getMorphClass() }}{{ $item->item->id }}][size_id]" value="{{ $item->size_id }}">
                      <input type="hidden"
                              form="cart-update"
                              min="1"
                              max="100"
                              id="cart{{ $item->item->id }}qty"
                              name="cart[{{ $item->item->getMorphClass() }}{{ $item->item->id }}][qty]"
                              value="{{ $item->qty }}">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-number" data-type="minus" data-field="cart[{{ $item->item->id }}][qty]">
                          <i class="fas fa-minus"></i>
                        </button>
                    </span>
                    <input type="text" name="cart[{{ $item->item->id }}][qty]" class="form-control input-number"
                    onchange="$('#cart{{ $item->item->id }}qty').val($(this).val());updateCart();"
                  value="{{ $item->qty }}" min="1" max="100">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-number" data-type="plus" data-field="cart[{{ $item->item->id }}][qty]">
                            <i class="fas fa-plus"></i>
                        </button>
                    </span>
                  </div>
                </span>
              </td>
              <td>
              <h5>
                    @isset($item->size_id)
                        {{ price(app('cart')->getItemPrice($item)) }}
                    @else
                        {{ price($item->item->getPrice()) }}
                    @endisset
              </h5>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="clearfix"></div>
          
          <h5 class="cpTot">@lang('front.total'): <span id="cart_total">{{ price(app('cart')->getTotal()) }}</span</h5>
      </div>
      <a href="{{ url('checkout') }}" class="basicBtn">@lang('front.purchase')</a>
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
