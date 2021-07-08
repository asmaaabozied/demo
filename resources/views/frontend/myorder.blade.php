@extends('frontend.master')

@section('content')

    <section class="menuSec">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="700" class="aos-init aos-animate">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 cartBigDiv noScrll" style="height: 754px;">
                <div class="logTit">
                    <a onclick="history.back()"  class="bk">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                    <h6>@lang('orders.my_orders')</h6>
                </div>
                <div class="scrollDiv" style="height: 754px;">
                    @foreach($orders as $order)
                        @forelse($order->items as $orderItem)
                            @php($item = $orderItem->item)


                        <div class="wasForm">
                        <div class=" row">
                            <div class="cartItem col-12">
                                <h6>{{$order->id}}</h6>
                                <table class="table table-hover table-responsive">
                                    <tbody><tr>
                                        <td width="20%">
                                            <img src="{{ $item->getFirstMediaUrl('default', 'thumb') }}" alt="" onclick="window.location='{{ $item->getProductUrl() }}';">
                                        </td>
                                        <td>
                                            <span class="cartItmNa"> {{ $item->name ?? ''}} <a href="{{route('detailproduct',$item->id)}}">@lang('products.views')</a></span>
                                            <p class="tblDesc">{!! $item->description !!}</p>
                                        </td>
                                        <td><span class="bl">x</span></td>
                                        <td>
                                            <span class="qtyItms">{{ $orderItem->qty }}</span>
                                        </td>
                                        <td>
                                            <h5>{{ price($item->price) }} </h5>
                                        </td>
                                    </tr>
                                    </tbody></table>
                                <div class="clearfix"></div>
                                <button type="button" class="btn addToCart" data-toggle="popover" title="" data-content="Your order is being prepared">{{$order->status}}</button>
                            </div>
                        </div>
                    </div>

                        @empty



                        @endforelse

                    @endforeach
                </div>
                <div class="forMobOnly">
                    <footer>
                        <div class="col-12 rights">
                            <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>
                                جميع الحقوق محفوظة لشركه اسم_الشركة  بدعم من ويب اند ابز

                                <a href="http://www.wna.net.kw" target="_blank"><img src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 rWbg forDeskOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="700" class="aos-init">
                </div>
                <footer>
                    <div class="col-12 rights">
                        <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>
                            جميع الحقوق محفوظة لشركه اسم_الشركة  بدعم من ويب اند ابز

                            <a href="http://www.wna.net.kw" target="_blank"><img src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>

@endsection
