@extends('frontend.master')

@section('content')
    <section class="menuSec">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 706px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear"
                         data-aos-duration="700" class="aos-init aos-animate">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 searchBigDiv">
                <div class="logTit">
                    <a onclick="history.back()" class="bk">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                    <h6>@lang('site.search')</h6>
                </div>
                <div class="col-12">
                    <form action="" class="perfSerch">
                        <input type="text" placeholder="@lang('site.search') @lang('products.plural')" id="myInputs" onkeyup="getMySearchs()">
                        <i class="fa fa-search"></i>
                    </form>
                    @foreach(\App\Models\Product::get() as $product)
                        <a class="MenuRow product_row">
                            <div class="row">
                                <img src="{{ $product->getFirstMediaUrl() }}" alt=""
                                     onclick="window.location='{{ $product->getProductUrl() }}';">
                                <div>
                                    <span class="foNam">{{$product->name}}</span>
                                    <h6><p>{!! $product->description !!}<br></p></h6>
                                </div>
                                <div class="priDiv">
                                    <div class="foPrice">{{ price($product->price) }}</div>
                                    <div class="clearfix"></div>

                                    <button class=" btn addToCart"
                                            onclick="addToCart('product-cart-form2-{{ $product->id }}')">@lang('front.add_to_cart')</button>


                                    {{ BsForm::post(LaravelLocalization::localizeURL(url('/cart')), ['id' => 'product-cart-form2-'.$product->id]) }}
                                    {{ Form::hidden('item_id', $product->id) }}
                                    {{ Form::hidden('buy_now', 0) }}
                                    {{ Form::hidden('qty', 1) }}
                                    {{ Form::hidden('item_type', $product->getMorphClass()) }}
                                    {{ BsForm::close() }}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
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
        function getMySearchs() {
            var input, filter, ul, li, a, i, j, txtValue;
            input = document.getElementById("myInputs");
            filter = input.value.toLowerCase();
            ul = document.getElementsByClassName("product_row");
            li = document.getElementsByClassName("foNam");
            for (i = 0; i < li.length; i++) {
                txtValue = li[i].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    ul[i].style.display = "";
                } else {
                    ul[i].style.display = "none";
                }
            }


        }
    </script>
@endsection