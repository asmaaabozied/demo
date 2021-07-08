@extends('frontend.master')

@section('content')

    <section class="menuSec">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="700" class="aos-init aos-animate">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 homeGrid newMenu">
                <div class="row">
                    <a onclick="history.back()"  class="bk">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                    <form action="" class="perfSerch">
                        <input type="text" placeholder="" id="myInput" onkeyup="getMySearch()">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
                <div class="gridViewMode">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">
                                <button class="btn btn-link">
                                    @lang('products.plural') <small>({{$products->count()}})</small> <i class="fas fa-chevron-down"></i>
                                </button>
                            </h5>
                        </div>
                        <div>
                            <div class="card-body" style="height: 579px;">
                                <ul>
                                    @foreach($products as $product)
                                    <li class=" column product_row">
                                        <div class="MenuRow">
                                            <div class="row">
                                                <img src="{{ $product->getFirstMediaUrl() }}" alt="" onclick="window.location='{{ $product->getProductUrl() }}';">

                                                <div onclick="window.location='{{ $product->getProductUrl() }}';">
                                                    <span class="foNam" >{{$product->name}}</span>
                                                    <h6><p>{!! $product->description !!}<br></p></h6>
                                                </div>


                                                <div class="priDiv">
                                                    <div class="foPrice">{{ price($product->price) }}</div><div class="clearfix"></div>

                                                    <a class="favourites" id="favourites{{$product->id}}" data-id="{{$product->id}}"><i class=" @if($product->favourite) fas @else far @endif fa-heart slide__heart "></i></a>


                                                    <button class=" btn addToCart" onclick="addToCart('product-cart-form2-{{ $product->id }}')">@lang('front.add_to_cart')</button>


                                                    {{ BsForm::post(LaravelLocalization::localizeURL(url('/cart')), ['id' => 'product-cart-form2-'.$product->id]) }}
                                                    {{ Form::hidden('item_id', $product->id) }}
                                                    {{ Form::hidden('buy_now', 0) }}
                                                    {{ Form::hidden('qty', 1) }}
                                                    {{ Form::hidden('item_type', $product->getMorphClass()) }}
                                                    {{ BsForm::close() }}

                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
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
            jQuery('.favourites').click(function (e) {
                e.preventDefault();

                var id = $(this).data('id');
                jQuery.ajax({
                    url: 'favouritproduct/'+id,
                    method: 'GET',
                    data : {
                        '_token' : '{{ csrf_token() }}',
                    },
                    success: function (result) {
                        console.log(result.status);
                        if(result.status == 'deleted')
                            $(`#favourites${id} i`).addClass('far').removeClass('fas');
                        else if(result.status == 'added')
                            $(`#favourites${id} i`).addClass('fas').removeClass('far');
                        console.log(result);
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