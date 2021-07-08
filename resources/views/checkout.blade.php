@extends('layouts.yo3an_wagef.master')

@section('content')

<section class="menuSec ">
    <div class="row">
        <div class="col-lg-7 col-md-12 rWbg forMobOnly">
            <div class="centerImg">
            <img src="{{ asset('front/yo3an_wagef') }}/img/1.png" alt="" data-aos="fade-in"
            data-aos-easing="linear"
            data-aos-duration="700"> 
            </div>
        </div>
        <div class="col-lg-5 col-sm-12 col-xs-12 chkFinl">
            <div class="logTit">
            <a href="" class="bk">
                <i class="fas fa-chevron-circle-left"></i>
            </a>
            <h6>@lang('front.checkout')</h6>
            </div>
            <form action="{{ LaravelLocalization::localizeURL(url('checkout')) }}"
                    id="checkout" method="POST" class="">
                @csrf
                @guest
                <div class="chRow1">
                    {{-- <h4>create an account</h4>
                    <input type="text" placeholder="name">
                    <input type="password" placeholder="password"> --}}
                    <small>@lang('front.have_account')
                        <button class="btn" type="button" onclick="window.location='{{ url('/login') }}';">@lang('dashboard.auth.login.title')</button></small>
                </div>
                @endguest
                <div class="chRow2">
                    <h4>@lang('front.shipping_details')</h4>
                    <div class="row">
                        <!-- username -->
                        <div class="col-lg-6 col-sm-12">
                            <input type="text" id="user[name]" name="user[name]" onchange="$('.confirm_name').html($(this).val());"
                            required
                            value="@auth{{ auth()->user()->name }}@else{{ data_get(old('user'), 'name') }}@endauth"  placeholder="{{ __('orders.attributes.name') }}">
                            <input type="hidden" name="country" value="4">
                        </div>
                            <!-- phone -->
                        <div class="col-lg-6 col-sm-12">
                            <input type="text" id="user[phone]" name="user[phone]"
                            value="@auth{{ auth()->user()->phone }}@else{{ data_get(old('user'), 'phone') }}@endauth" placeholder="{{ __('admins.attributes.phone') }}">
                        </div>
                        <!-- email  -->
                        <div class="col-lg-6 col-sm-12">
                            <input type="email" id="user[email]" name="user[email]"
                            required
                            value="@auth {{ auth()->user()->email }} @else {{ data_get(old('user'), 'email') }} @endauth" placeholder="{{ __('admins.attributes.email') }}">
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <select onchange="if($(this).val()=='pickup') { $('.pickup').show();$('.delivery').hide(); } else { $('.delivery').show();$('.pickup').hide(); }" required>
                                <option value="">@lang('orders.attributes.recieve_type')</option>
                                <option value="pickup">@lang('orders.attributes.pickup')</option>
                                <option value="delivery">@lang('orders.attributes.delivery')</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-sm-12 pickup" style="display: none">
                            <select name="pickup">
                                <option value="">@lang('orders.attributes.choose_branch')</option>
                                @foreach(\App\Models\Location::get() as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- city  -->
                        <div class="col-lg-6 col-sm-12 delivery" style="display: none">
                            <select id="mySelect" onchange="getAreas($(this).val()); $('#city').val($('#mySelect option:selected').html())">
                                <option value="">@lang('orders.attributes.city')</option>
                                @foreach(\App\Models\Governorate::get() as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" id="city" name="user[city]" >
                        </div>
                        <!-- area  -->
                        <div class="col-lg-6 col-sm-12 delivery" style="display: none">
                                <select id="area_select" onchange="calculate_shipping($(this).val());">
                            <option value="">@lang('orders.attributes.area')</option>
                            </select>
                        </div>
                        <!-- block  -->
                        <div class="col-lg-6 col-sm-12 delivery" style="display: none">
                            <input type="text" name="block" placeholder="@lang('orders.attributes.block')">
                        </div>
                        <!-- avenue -->
                        <div class="col-lg-6 col-sm-12 delivery" style="display: none">
                            <input type="text" name="avenue" placeholder="@lang('orders.attributes.avenue')">
                        </div>
                        <!-- street  -->
                        <div class="col-lg-6 col-sm-12 delivery" style="display: none">
                            <input type="hidden" id="area" name="user[area]" >
                            <input type="text" name="street" placeholder="@lang('orders.attributes.street')">
                        </div>
                        <!-- house  -->
                        <div class="col-lg-6 col-sm-12 delivery" style="display: none">
                            <input type="text" name="house" placeholder="@lang('orders.attributes.house')">
                            <input class="form-check-input"
                            type="hidden"
                            form="checkout"
                            id="shipping_price"
                            name="shipping_price"
                            value="">
                        </div>
                        <!-- address  -->
                        <div class="col-lg-12 col-sm-12 delivery" style="display: none">
                            <input type="text" id="user[address]" name="user[address]"
                                
                                value="{{ data_get(old('user'), 'address') }}" onchange="$('.confirm_address').html($(this).val());" placeholder="@lang('orders.attributes.address')">
                        </div>
                    </div>
                </div>
            <div class="ordrDtls">
                <h5>@lang('front.order_summary')</h5>
                  
                <div class="cartItem col-12">
            <table class="table table-hover table-responsive">
                @foreach(app('cart')->getItems() as $item)
                <tr>
                    <td width="20%">
                        <img src="{{ $item->item->getFirstMediaUrl() }}" onclick="window.location='{{ $item->item->getWebUrl() }}';" alt="">
                    </td>
                    <td>
                        <span class="cartItmNa" onclick="window.location='{{ $item->item->getWebUrl() }}';">{{ $item->item->name }}  </span>
                    </td>
                    <td><span class="bl">x</span></td>
                    <td>
                        <span class="qtyItms">{{ $item->qty }}</span>
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
                <tr>
                <tr>
                <td>@lang('front.sub_total')</td>
                <td>{{ price(app('cart')->getSubTotal()) }}</td>
                </tr>
                <tr>
                    <td>@lang('shipping_prices.price')</td>
                    <td class="shipping_price"></td>
                </tr>
                <tr>
                    <td>@lang('front.discount')</td>
                    <td>{{ price(app('cart')->getDiscount()) }}</td>
                </tr>
                <tr>
                <td>@lang('front.total')</td>
                <td id="total_price">{{ price(app('cart')->getTotal()) }}</td>
                </tr>
            </table>
            <div class="clearfix"></div>
                </div>
                <div class="col-12 pad0">
                    <div class="subs aos-init aos-animate" data-aos="fade-left">
                        <form action="{{ LaravelLocalization::localizeURL(url('/coupons')) }}" method="post"
                                id="coupon-form">
                            @csrf
                            <input name="code" form="coupon-form" required type="text"
                                    class="{{ $errors->has('code') ? ' is-invalid' : '' }}"
                                    placeholder="@lang('front.discount_code')">
                            @error('code')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                            <span class="subsSvg" onclick="$('#coupon-form').submit();">
                                <svg id="Group_4012" data-name="Group 4012" xmlns="http://www.w3.org/2000/svg" width="25.158" height="23.358" viewBox="0 0 25.158 23.358">
                                    <g id="Group_694" data-name="Group 694">
                                    <g id="Group_693" data-name="Group 693">
                                        <path id="Path_3385" data-name="Path 3385" d="M604.623,344.329l-23.361-10.781a.9.9,0,0,0-1.1,1.353l7.681,10.243-7.681,10.243a.9.9,0,0,0,.02,1.1.909.909,0,0,0,.7.337.892.892,0,0,0,.378-.084l23.357-10.781a.9.9,0,0,0,0-1.63Z" transform="translate(-579.988 -333.467)" fill="#fff"/>
                                    </g>
                                    </g>
                                </svg>
                            </span>
                        </form>
                    </div>
                </div>
                <div class="col-12 pad0">
                    <h2 class="Ctitle">@lang('front.payment_methods')</h2>
                    <div class="payMethod aos-init aos-animate" data-aos="fade-left">
                        <div class="singleMethod">
                                <label for="payment-cash">
                                    <input type="radio"
                                        form="checkout"
                                        name="payment_method"
                                        id="payment-cash"
                                        checked
                                        onchange="$('.confirm_payment_method').html($('.payment-cash-label').val());"
                                        value="كاش">
                                    @lang('front.pay_on_delivery')
                                </label>
                                <label for="knet">
                                    <input type="radio"
                                        form="checkout"
                                        name="payment_method"
                                        id="knet"
                                        value="knet">
                                    @lang('front.knet')
                                </label>
                                <label for="mada">
                                    <input type="radio"
                                        form="checkout"
                                        name="payment_method"
                                        id="mada"
                                        value="mada">
                                    @lang('front.mada')
                                </label>
                                <label for="BENEFIT">
                                    <input type="radio"
                                        form="checkout"
                                        name="payment_method"
                                        id="knet"
                                        value="benefit">
                                    @lang('front.benefit')
                                </label>
                                <label for="visa">
                                    <input type="radio"
                                        form="checkout"
                                        name="payment_method"
                                        id="visa"
                                        value="visa">
                                    @lang('front.visa')
                                </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 aos-init aos-animate pad0" data-aos="flip-up">
                    <button class="btn fiOrder" id="pay_btn" type="submit">@lang('front.purchase')</button>
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
