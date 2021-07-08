{{--@extends('frontend.master')--}}

{{--@section('content')--}}

{{--    <section class="menuSec ">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">--}}
{{--                <div class="centerImg">--}}
{{--                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear"--}}
{{--                         data-aos-duration="700" class="aos-init aos-animate">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5 col-sm-12 col-xs-12 ">--}}
{{--                <div class="chkFinl pad0 col-md-12" style="height: 754px;">--}}
{{--                    <div class="logTit">--}}
{{--                        <a onclick="history.back()" class="bk">--}}
{{--                            <i class="fas fa-chevron-circle-left"></i>--}}
{{--                        </a>--}}
{{--                        <h6>@lang('front.checkout')</h6>--}}
{{--                    </div>--}}


{{--                    <div class="chRow1">--}}
{{--                        @guest--}}
{{--                            <form action="{{ route('loginss') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <h4>@lang('site.login')</h4>--}}
{{--                                <input type="email" placeholder="email" name="email">--}}
{{--                                <input type="password" placeholder="password" name="password">--}}
{{--                                <br><br>--}}
{{--                                <button type="submit" class="btn btn-success text-center" >@lang('dashboard.auth.login.submit')</button>--}}
{{--<br>--}}
{{--                                <small>@lang('front.no_account')--}}
{{--                                    <a href="{{route('register')}}" class="btn"--}}
{{--                                    > @lang('site.register').--}}
{{--                                    </a>--}}
{{--                                </small>--}}
{{--                            </form>--}}
{{--                        @endguest--}}
{{--                        <ul class="nav nav-pills mb-3 pi_di" id="pills-tab" role="tablist">--}}
{{--                            <li class="nav-item btn" role="presentation">--}}
{{--                                <a class="nav-link active" id="p-new-tab" data-toggle="pill"--}}
{{--                                   href="{{route('createaddresss')}}"--}}
{{--                                   onclick="window.location='{{route('createaddresss')}}';" role="tab"--}}
{{--                                   aria-controls="p-new"--}}
{{--                                   aria-selected="true">@lang('addresses.actions.create')</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item btn piBtn" role="presentation">--}}
{{--                                <a class="nav-link" id="p-saved-tab" data-toggle="pill"--}}
{{--                                   href="{{route('showaddress')}}" role="tab" aria-controls="p-saved"--}}
{{--                                   aria-selected="false"--}}
{{--                                   onclick="window.location='{{route('showaddress')}}';">@lang('addresses.actions.save') @lang('addresses.plural')</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}


{{--                    </div>--}}

{{--                    <form action="{{ LaravelLocalization::localizeURL(url('checkout')) }}"--}}
{{--                          id="checkout" method="POST" class="">--}}
{{--                        @csrf--}}

{{--                        <div class="tab-content" id="pills-tabContent">--}}
{{--                            <div class="tab-pane fade show active" id="p-new" role="tabpanel"--}}
{{--                                 aria-labelledby="p-new-tab">--}}
{{--                                <div class="chRow2">--}}
{{--                                    <h4>@lang('front.shipping_details')</h4>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-6 col-sm-12">--}}
{{--                                            <select name="country" id="" class="countriesss">--}}
{{--                                                <option value="">@lang('orders.attributes.city')</option>--}}
{{--                                                @foreach(\App\Models\Country::get()->pluck('name','id') as $key=>$value)--}}
{{--                                                    <option value="{{$key}}">{{$value}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                            <input type="text" name="block"--}}
{{--                                                   placeholder="@lang('orders.attributes.block')">--}}
{{--                                            <input type="text" name="avenue"--}}
{{--                                                   placeholder="@lang('orders.attributes.avenue')">--}}
{{--                                            <input type="tel" placeholder="{{ __('admins.attributes.phone') }}"--}}
{{--                                                   id="user[phone]" name="user[phone]"--}}
{{--                                                   value="@auth{{ auth()->user()->phone }}@else{{ data_get(old('user'), 'phone') }}@endauth">--}}
{{--                                        </div>--}}
{{--                                        --}}{{--                                        <input type="hidden" id="city" name="user[city]" >--}}
{{--                                        --}}{{--                                        <input type="hidden" name="country" value="4">--}}


{{--                                        <div class="col-lg-6 col-sm-12">--}}
{{--                                            <select  name="city_id" id="add_type">--}}
{{--                                                <option value="">@lang('site.city')</option>--}}
{{--                                                @foreach(\App\Models\City::get()->pluck('name2','id') as $key=>$value)--}}
{{--                                                    <option value="{{$key}}">{{$value}}</option>--}}

{{--                                                @endforeach--}}

{{--                                            </select>--}}

{{--                                            <input type="hidden" id="area" name="user[area]">--}}
{{--                                            <input type="text" name="street"--}}
{{--                                                   placeholder="@lang('orders.attributes.street')">--}}
{{--                                            <input type="text" name="house"--}}
{{--                                                   placeholder="@lang('orders.attributes.house')">--}}
{{--                                            <input class="form-check-input"--}}
{{--                                                   type="hidden"--}}
{{--                                                   form="checkout"--}}
{{--                                                   id="shipping_price"--}}
{{--                                                   name="shipping_price"--}}
{{--                                                   value="">--}}
{{--                                            <input type="email" id="user[email]" name="user[email]"--}}
{{--                                                   required--}}
{{--                                                   value="@auth {{ auth()->user()->email }} @else {{ data_get(old('user'), 'email') }} @endauth"--}}
{{--                                                   placeholder="{{ __('admins.attributes.email') }}">--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="ordrDtls">--}}
{{--                                    <h5>@lang('front.order_summary')</h5>--}}
{{--                                    <div class="cartItem col-12">--}}
{{--                                        <table class="table table-hover table-responsive">--}}
{{--                                            <tbody>--}}
{{--                                            @foreach($carts as $item)--}}

{{--                                                <tr>--}}
{{--                                                    <td width="20%">--}}
{{--                                                        <img src="{{ $item->item->getFirstMediaUrl() }}"--}}
{{--                                                             onclick="window.location='{{ $item->item->getWebUrl() }}';"--}}
{{--                                                             alt="">--}}
{{--                                                    </td>--}}
{{--                                                    <td>--}}
{{--                                                        <span class="cartItmNa"--}}
{{--                                                              onclick="window.location='{{ $item->item->getWebUrl() }}';">{{ $item->item->name }}  </span>--}}
{{--                                                    </td>--}}
{{--                                                    <td><span class="bl">x</span></td>--}}
{{--                                                    <td>--}}
{{--                                                        <span class="qtyItms">{{ $item->qty }}</span>--}}
{{--                                                    </td>--}}
{{--                                                    <td>--}}
{{--                                                        {{ price($item->item->getPrice()) }}--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}

{{--                                            @endforeach--}}

{{--                                            <tr>--}}
{{--                                                <td>@lang('front.sub_total')</td>--}}
{{--                                                <td colspan="3"></td>--}}

{{--                                                <td>{{ price(app('cart')->getSubTotal()) }}</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>@lang('front.discount')</td>--}}

{{--                                                <td colspan="3"></td>--}}
{{--                                                <td>{{ price(app('cart')->getDiscount()) }}</td>--}}

{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>@lang('front.total')</td>--}}

{{--                                                <td colspan="3"></td>--}}
{{--                                                <td id="total_price">{{ price(app('cart')->getTotal()) }}</td>--}}

{{--                                            </tr>--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                    </div>--}}

{{--                                    <div class="col-12 pad0">--}}
{{--                                        <div class="subs aos-init aos-animate" data-aos="fade-left">--}}
{{--                                            <form action="{{ LaravelLocalization::localizeURL(url('/coupons')) }}"--}}
{{--                                                  method="post"--}}
{{--                                                  id="coupon-form">--}}
{{--                                                @csrf--}}
{{--                                                <input name="code" form="coupon-form" required type="text"--}}
{{--                                                       class="{{ $errors->has('code') ? ' is-invalid' : '' }}"--}}
{{--                                                       placeholder="@lang('front.discount_code')">--}}
{{--                                                @error('code')--}}
{{--                                                <div class="invalid-feedback" role="alert">--}}
{{--                                                    <strong>{{ $message }}</strong>--}}
{{--                                                </div>--}}
{{--                                                @enderror--}}
{{--                                                <span class="subsSvg" onclick="$('#coupon-form').submit();">--}}
{{--                                <svg id="Group_4012" data-name="Group 4012" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                     width="25.158" height="23.358" viewBox="0 0 25.158 23.358">--}}
{{--                                    <g id="Group_694" data-name="Group 694">--}}
{{--                                    <g id="Group_693" data-name="Group 693">--}}
{{--                                        <path id="Path_3385" data-name="Path 3385"--}}
{{--                                              d="M604.623,344.329l-23.361-10.781a.9.9,0,0,0-1.1,1.353l7.681,10.243-7.681,10.243a.9.9,0,0,0,.02,1.1.909.909,0,0,0,.7.337.892.892,0,0,0,.378-.084l23.357-10.781a.9.9,0,0,0,0-1.63Z"--}}
{{--                                              transform="translate(-579.988 -333.467)" fill="#fff"/>--}}
{{--                                    </g>--}}
{{--                                    </g>--}}
{{--                                </svg>--}}
{{--                            </span>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12 pad0">--}}
{{--                                        <h2 class="Ctitle">@lang('front.payment_methods')</h2>--}}
{{--                                        <div class="payMethod aos-init aos-animate" data-aos="fade-left">--}}
{{--                                            <div class="singleMethod">--}}
{{--                                                <label for="visa">--}}
{{--                                                    <input type="radio" name="pay" id="visa" value="visa"--}}
{{--                                                           form="checkout"--}}
{{--                                                           name="payment_method">--}}
{{--                                                    @lang('front.visa')--}}
{{--                                                    <img src="{{asset('frontend/img/visa2.png')}}" alt="">--}}
{{--                                                </label>--}}


{{--                                                <label for="credit card">--}}
{{--                                                    <input type="radio" name="pay" id="credit card" value="credit card"--}}
{{--                                                           name="payment_method" value="card">--}}
{{--                                                    @lang('front.credit card')--}}

{{--                                                    <img src="{{asset('frontend/img/visa3.png')}}" alt="">--}}
{{--                                                </label>--}}
{{--                                                <label for="paypal">--}}
{{--                                                    <input type="radio" name="pay" id="paypal" value="paypal"--}}
{{--                                                           name="payment_method">--}}
{{--                                                    @lang('front.paypal')--}}
{{--                                                    <img src="{{asset('frontend/img/paypal.png')}}" alt="">--}}
{{--                                                </label>--}}
{{--                                                <label for="cash">--}}
{{--                                                    <input type="radio" name="pay" id="payment-cash"--}}
{{--                                                           checked--}}
{{--                                                           onchange="$('.confirm_payment_method').html($('.payment-cash-label').val());"--}}
{{--                                                           value="كاش" value="bank" form="checkout"--}}
{{--                                                           name="payment_method">--}}
{{--                                                    @lang('front.pay_on_delivery')--}}
{{--                                                    <img src="{{asset('frontend/img/cash.png')}}" alt="">--}}
{{--                                                </label>--}}


{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12 aos-init aos-animate pad0" data-aos="flip-up">--}}

{{--                                        <button class="btn fiOrder" id="pay_btn"--}}
{{--                                                type="submit">@lang('front.purchase')</button>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <br>--}}
{{--                <div class="forMobOnly">--}}

{{--                    <footer>--}}
{{--                        <div class="col-12 rights">--}}
{{--                            <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>--}}
{{--                                ©--}}
{{--                                جميع الحقوق محفوظة لشركه اسم_الشركة بدعم من ويب اند ابز--}}

{{--                                <a href="http://www.wna.net.kw" target="_blank"><img--}}
{{--                                            src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </footer>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="col-lg-7 col-md-12 rWbg forDeskOnly" style="height: 754px;">--}}
{{--                <div class="centerImg">--}}
{{--                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear"--}}
{{--                         data-aos-duration="700" class="aos-init">--}}
{{--                </div>--}}
{{--                <footer>--}}
{{--                    <div class="col-12 rights">--}}
{{--                        <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>--}}
{{--                            جميع الحقوق محفوظة لشركه اسم_الشركة بدعم من ويب اند ابز--}}

{{--                            <a href="http://www.wna.net.kw" target="_blank"><img--}}
{{--                                        src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </footer>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}



{{--@endsection--}}

{{--@section('scripts')--}}

{{--    <script>--}}



{{--        jQuery(document).ready(function () {--}}
{{--            jQuery('.countriesss').change(function (e) {--}}

{{--                var centerId = e.target.value;--}}
{{--                console.log(e.target.value)--}}
{{--                // var country_id = $(this).data('id');--}}
{{--                // console.log($(this).data('id'))--}}
{{--                jQuery.ajax({--}}
{{--                    url: 'getcities/' + centerId,--}}
{{--                    type: 'GET',--}}

{{--                    success: function (result) {--}}
{{--                        console.log(result.data);--}}

{{--                        $('#add_type').empty();--}}


{{--                        var cities =result.data;--}}

{{--                        $.each(cities, function(i, el)--}}
{{--                        {--}}
{{--                            $('#add_type').append( new Option(el.name2,el.id) );--}}

{{--                        });--}}

{{--                    },--}}
{{--                    error: function (err) {--}}
{{--                        console.log(err)--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--        //end of delete--}}

{{--    </script>--}}
{{--@endsection--}}
@extends('frontend.master')

@section('content')

    <section class="menuSec ">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear"
                         data-aos-duration="700" class="aos-init aos-animate">
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-xs-12 ">
                <div class="chkFinl pad0 col-md-12" style="height: 754px;">
                    <div class="logTit">
                        <a onclick="history.back()" class="bk">
                            <i class="fas fa-chevron-circle-left"></i>
                        </a>
                        <h6>@lang('front.checkout')</h6>
                    </div>


                    <div class="chRow1">
                        @guest
                            <form action="{{ route('loginss') }}" method="POST">
                                @csrf
                                <h4>@lang('site.login')</h4>
                                <input type="email" placeholder="email" name="email">
                                <input type="password" placeholder="password" name="password">
                                <br><br>
                                <button type="submit" class="btn btn-success text-center" >@lang('dashboard.auth.login.submit')</button>
                                <br>
                                <small>@lang('front.no_account')
                                    <a href="{{route('register')}}" class="btn"
                                    > @lang('site.register').
                                    </a>
                                </small>
                            </form>
                        @endguest
                        <ul class="nav nav-pills mb-3 pi_di" id="pills-tab" role="tablist">
                            <li class="nav-item btn" role="presentation">
                                <a class="nav-link active" id="p-new-tab" data-toggle="pill"
                                   href="{{route('createaddresss')}}"
                                   onclick="window.location='{{route('createaddresss')}}';" role="tab"
                                   aria-controls="p-new"
                                   aria-selected="true">@lang('addresses.actions.create')</a>
                            </li>
                            <li class="nav-item btn piBtn" role="presentation">
                                <a class="nav-link" id="p-saved-tab" data-toggle="pill"
                                   href="{{route('showaddress')}}" role="tab" aria-controls="p-saved"
                                   aria-selected="false"
                                   onclick="window.location='{{route('showaddress')}}';">@lang('addresses.actions.save') @lang('addresses.plural')</a>
                            </li>
                        </ul>


                    </div>

                    <form action="{{ LaravelLocalization::localizeURL(url('checkout')) }}"
                          id="checkout" method="POST" class="">
                        @csrf

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="p-new" role="tabpanel"
                                 aria-labelledby="p-new-tab">
                                <div class="chRow2">
                                    <h4>@lang('front.shipping_details')</h4>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <select name="country" id="" class="countriesss">
                                                <option value="">@lang('site.countries')</option>
                                                @foreach(\App\Models\Country::get()->pluck('name','id') as $key=>$value)
                                                    <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                            <input type="text" name="block"
                                                   placeholder="@lang('orders.attributes.block')">
                                            <input type="text" name="avenue"
                                                   placeholder="@lang('orders.attributes.avenue')">
                                            <input type="tel" placeholder="{{ __('admins.attributes.phone') }}"
                                                   id="user[phone]" name="user[phone]"
                                                   value="@auth{{ auth()->user()->phone }}@else{{ data_get(old('user'), 'phone') }}@endauth">
                                        </div>
                                        {{--                                        <input type="hidden" id="city" name="user[city]" >--}}
                                        {{--                                        <input type="hidden" name="country" value="4">--}}


                                        <div class="col-lg-6 col-sm-12">
                                            <select  name="city_id" id="add_type">
                                                <option value="">@lang('site.city')</option>
                                                {{--                                                @foreach(\App\Models\City::get()->pluck('name2','id') as $key=>$value)--}}
                                                {{--                                                    <option value="{{$key}}">{{$value}}</option>--}}

                                                {{--                                                @endforeach--}}

                                            </select>

                                            <input type="hidden" id="area" name="user[area]">
                                            <input type="text" name="street"
                                                   placeholder="@lang('orders.attributes.street')">
                                            <input type="text" name="house"
                                                   placeholder="@lang('orders.attributes.house')">
                                            <input class="form-check-input"
                                                   type="hidden"
                                                   form="checkout"
                                                   id="shipping_price"
                                                   name="shipping_price"
                                                   value="">
                                            <input type="email" id="user[email]" name="user[email]"
                                                   required
                                                   value="@auth {{ auth()->user()->email }} @else {{ data_get(old('user'), 'email') }} @endauth"
                                                   placeholder="{{ __('admins.attributes.email') }}">

                                        </div>
                                    </div>
                                </div>
                                <div class="ordrDtls">
                                    <h5>@lang('front.order_summary')</h5>
                                    <div class="cartItem col-12">
                                        <table class="table table-hover table-responsive">
                                            <tbody>
                                            @foreach($carts as $item)

                                                <tr>
                                                    <td width="20%">
                                                        <img src="{{ $item->item->getFirstMediaUrl() }}"
                                                             onclick="window.location='{{ $item->item->getWebUrl() }}';"
                                                             alt="">
                                                    </td>
                                                    <td>
                                                        <span class="cartItmNa"
                                                              onclick="window.location='{{ $item->item->getWebUrl() }}';">{{ $item->item->name }}  </span>
                                                    </td>
                                                    <td><span class="bl">x</span></td>
                                                    <td>
                                                        <span class="qtyItms">{{ $item->qty }}</span>
                                                    </td>
                                                    <td>
                                                        {{ price($item->item->getPrice()) }}
                                                    </td>
                                                </tr>

                                            @endforeach

                                            <tr>
                                                <td>@lang('front.sub_total')</td>
                                                <td colspan="3"></td>

                                                <td>{{ price(app('cart')->getSubTotal()) }}</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('front.discount')</td>

                                                <td colspan="3"></td>
                                                <td>{{ price(app('cart')->getDiscount()) }}</td>

                                            </tr>
                                            <tr>
                                                <td>@lang('front.total')</td>

                                                <td colspan="3"></td>
                                                <td id="total_price">{{ price(app('cart')->getTotal()) }}</td>

                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-12 pad0">
                                        <div class="subs aos-init aos-animate" data-aos="fade-left">
                                            {{--<form action="{{ LaravelLocalization::localizeURL(url('/coupons')) }}"
                                                  method="post"
                                                  id="coupon-form">--}}
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
                                <svg id="Group_4012" data-name="Group 4012" xmlns="http://www.w3.org/2000/svg"
                                     width="25.158" height="23.358" viewBox="0 0 25.158 23.358">
                                    <g id="Group_694" data-name="Group 694">
                                    <g id="Group_693" data-name="Group 693">
                                        <path id="Path_3385" data-name="Path 3385"
                                              d="M604.623,344.329l-23.361-10.781a.9.9,0,0,0-1.1,1.353l7.681,10.243-7.681,10.243a.9.9,0,0,0,.02,1.1.909.909,0,0,0,.7.337.892.892,0,0,0,.378-.084l23.357-10.781a.9.9,0,0,0,0-1.63Z"
                                              transform="translate(-579.988 -333.467)" fill="#fff"/>
                                    </g>
                                    </g>
                                </svg>
                            </span>
                                            {{--</form>--}}
                                        </div>
                                    </div>
                                    <div class="col-12 pad0">
                                        <h2 class="Ctitle">@lang('front.payment_methods')</h2>
                                        <div class="payMethod aos-init aos-animate" data-aos="fade-left">
                                            <div class="singleMethod">
                                                <label for="visa">
                                                    <input type="radio" id="visa" value="1"
                                                           form="checkout"
                                                           name="payment_method">
                                                    knet
                                                    <img src="{{asset('frontend/img/visa2.png')}}" alt="">
                                                </label>


                                                <label for="credit card">
                                                    <input type="radio" id="credit card" value="2"
                                                           name="payment_method" value="card">
                                                    @lang('front.credit card')

                                                    <img src="{{asset('frontend/img/visa3.png')}}" alt="">
                                                </label>

                                                <label for="cash">
                                                    <input type="radio" id="payment-cash"
                                                           checked
                                                           onchange="$('.confirm_payment_method').html($('.payment-cash-label').val());"
                                                           value="كاش" value="bank" form="checkout"
                                                           name="payment_method">
                                                    @lang('front.pay_on_delivery')
                                                    <img src="{{asset('frontend/img/cash.png')}}" alt="">
                                                </label>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 aos-init aos-animate pad0" data-aos="flip-up">

                                        <button class="btn fiOrder" id="pay_btn"
                                                type="submit">@lang('front.purchase')</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <div class="forMobOnly">

                    <footer>
                        <div class="col-12 rights">
                            <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>
                                ©
                                جميع الحقوق محفوظة لشركه اسم_الشركة بدعم من ويب اند ابز

                                <a href="http://www.wna.net.kw" target="_blank"><img
                                            src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>
                            </div>
                        </div>
                    </footer>
                </div>

            </div>
            <div class="col-lg-7 col-md-12 rWbg forDeskOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear"
                         data-aos-duration="700" class="aos-init">
                </div>
                <footer>
                    <div class="col-12 rights">
                        <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>
                            جميع الحقوق محفوظة لشركه اسم_الشركة بدعم من ويب اند ابز

                            <a href="http://www.wna.net.kw" target="_blank"><img
                                        src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>



@endsection

@section('scripts')

    <script>



        jQuery(document).ready(function () {
            jQuery('.countriesss').change(function (e) {

                var centerId = e.target.value;
                console.log(e.target.value)
                // var country_id = $(this).data('id');
                // console.log($(this).data('id'))
                jQuery.ajax({
                    url: 'getcities/' + centerId,
                    type: 'GET',

                    success: function (result) {
                        console.log(result.data);

                        $('#add_type').empty();


                        var cities =result.data;

                        $.each(cities, function(i, el)
                        {
                            $('#add_type').append( new Option(el.name2,el.id) );

                        });

                    },
                    error: function (err) {
                        console.log(err)
                    }
                });
            });
        });
        //end of delete

    </script>
@endsection
