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
                    <h6>@lang('products.wishlist') </h6>
                </div>
                <div class="scrollDiv" style="height: 754px;">
                    @foreach($products as $product)

                        <div id="producthide{{$product->id}}">
                    <div class="wasForm wi4list">
                        <div class=" row">
                            <div class="cartItem col-12">

                                <table class="table table-hover table-responsive">
                                    {{ BsForm::post(LaravelLocalization::localizeURL(url('/cart')), ['id' => 'product-cart-form2-'.$product->id]) }}
                                    {{ Form::hidden('item_id', $product->id) }}
                                    {{ Form::hidden('buy_now', 0) }}
                                    {{ Form::hidden('qty', 1) }}
                                    {{ Form::hidden('item_type', $product->getMorphClass()) }}
                                    {{ BsForm::close() }}
                                    <tbody><tr>
                                        <td width="20%">
                                            <img src="{{ $product->getFirstMediaUrl() }}" alt="" onclick="window.location='{{ $product->getProductUrl() }}';">

                                        </td>
                                        <td>
                                            <span class="cartItmNa" onclick="window.location='{{ $product->getProductUrl() }}';">{{$product->name ?? ''}} </span>
                                            <p class="tblDesc">{!! $product->description !!}</p>

                                        </td>

                                        <td>
                                            <span class="">{{$product->price}} KWD</span>
                                        </td>
                                        <td>
                                            <a  class="delete" data-id="{{$product->id}}"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    </tbody></table>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                        <button class=" btn addToCart"  type="button"  onclick="addToCart('product-cart-form2-{{ $product->id }}')">@lang('front.add_to_cart')</button>

                        </div>

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

@section('scripts')

    <script>

        jQuery(document).ready(function () {
            jQuery('.delete').click(function (e) {
                e.preventDefault();
                // var current = jQuery(this);
                // var url = current.data('url');
                var product_id = $(this).data('id');
                console.log($(this).data('id'))
                jQuery.ajax({
                    url: 'deleteproduct/'+$(this).data('id')+'/delete',
                    type: 'GET',

                    success: function (result) {
                        console.log(result);
                        $(`#producthide${product_id}`).css('display', 'none');

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