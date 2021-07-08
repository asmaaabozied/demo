@extends('frontend.master')

@section('content')

    <section class="menuSec">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="700" class="aos-init aos-animate">

                </div>
            </div>
            <div class="col-lg-5 col-md-12 receiptPage">
                <div class="logTit">
                    <a onclick="history.back()"  class="bk">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                    <h6></h6>
                    <div class="clearfix"></div>
                    <div class="printBtns">
                        @if ($payment=="failed")
                            <button class="btn pAg" onclick="window.location='{{ url('/checkout') }}';">@lang('site.pay again')</button>
                        @endif
{{--                        <button class="btn">@lang('site.download')</button>--}}
                        <button class="btn" onClick="window.print()">@lang('site.print')</button>
                    </div>
                </div>
                <div class=" myRow" style="height: 584px;">
                    <h5 class="adDetails">@lang('orders.invoice.singular')</h5>

                    @if ($payment=="success")
                        <h6 class="adDetails"> @lang('orders.invoice.payment_successful')</h6>
                    @else
                        <h6 class="adDetails"> @lang('orders.invoice.payment_unsuccessful')</h6>
                    @endif
                    <div class="clearfix"></div>
                    <br>
                    <br>
                    <h4 class="adDetails">@lang('orders.attributes.id').</h4>
                    <div class="cartTot">
                        <h6>#{{ $order->id }} </h6>

                    </div>
                    <h4 class="adDetails">@lang('orders.attributes.address')</h4>
                    <div class="cartTot">
                        <h6>{{ $order->city }}, {{ $order->area }} , @lang('orders.attributes.block')
                            : {{ $order->block }} , {{ $order->street }} , @lang('orders.attributes.house')
                            : {{ $order->house }}</h6>

                    </div>

                    <h4 class="adDetails">@lang('orders.attributes.phone')</h4>
                    <div class="cartTot">
                        <h6>{{ $order->phone }} </h6>
                    </div>
                    <div class="clearfix"></div>
                    <h5>Summary Order</h5>
                    <div class="wasForm">
                        <div class=" row">
                            <div class="cartItem col-12">
                                <table class="table table-hover table-responsive">
                                    <tbody>
                                    @foreach($order->items as $item)

                                        <tr>
                                            <td width="20%">
                                                <img src="{{ $item->item->getFirstMediaUrl('default', 'thumb') }}"
                                                     alt="">
                                            </td>
                                            <td>
                                                <span class="cartItmNa">{{ $item->item->name }} </span>
                                            </td>
                                            <td><span class="bl">x</span></td>
                                            <td>
                    <span class="qtyItms">
{{ $item->qty }}

                    </span>

                                            </td>
                                            <td>
                                                <h5><span>   {{ price($item->item->getPrice()) }}</span></h5>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="cartTot col-12">
                        <div class="rTot">
                            <table>
                                <tbody>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="forMobOnly">
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
