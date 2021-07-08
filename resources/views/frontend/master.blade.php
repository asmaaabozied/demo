<!DOCTYPE html>
<html dir="{{ Locales::getDir() }}" lang="{{ app()->getLocale() }}" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo </title>
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">


@if(Locales::getDir() == 'rtl')
        <link rel="stylesheet" href="{{asset('frontend/css/style_ar.css')}}">
        {{--        <link rel="stylesheet" href="{{ asset(mix('/css/vali.rtl.css')) }}">--}}


    @endif
</head>
<body>
<header class="noArr">
    <div class="row">
        <div class="headerMenu">
            <div class="row">
                <div class="col-md-9 pad0 leftNav">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="fit">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{'/'}}">@lang('site.home') <span
                                                class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('search')}}">
                                        @lang('site.search')
                                    </a>
                                </li>
                                @guest()
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="{{route('login')}}">@lang('dashboard.auth.login.title')</a>
                                    </li>
                                @endguest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.location')}}">@lang('locations.plural')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('myorder')}}">@lang('orders.my_orders')</a>
                                </li>

{{--                                <li class="nav-item">--}}

{{--                                    <a class="nav-link" href="{{route('order status')}}">@lang('site.order status')</a>--}}
{{--                                </li>--}}

                            </ul>
                        </div>
                    </nav>
                </div>
                <div class=" col-md-3 rightDrb row">
                    @if(Locales::getCode()=="ar")
                        <a hreflang="en" class="col-md-1 langDiv"
                           href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                            {{ 'En' }}
                        </a>
                    @else
                        <a hreflang="ar" class="col-md-1 langDiv"
                           href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                            {{ 'Ar' }}
                        </a>
                    @endif
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" id="fav" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-heart"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="fav">
                            <a class="dropdown-item" href="{{route('favoriteproduct')}}">@lang('products.wishlist')</a>
                            {{--                            <a class="dropdown-item" href="#">Action</a>--}}
                            {{--                            <a class="dropdown-item" href="#">Action</a>--}}
                        </div>
                    </div>
                    {{--                    <div class="drobdown">--}}
                    {{--                        <a class="btn dropdown-toggle" href="#" role="button" id="cartBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--                            <span class="cart_counter">30</span>--}}
                    {{--                            <i class="fas fa-shopping-cart"></i>--}}
                    {{--                        </a>--}}
                    {{--                        <div class="dropdown-menu" aria-labelledby="cartBtn">--}}
                    {{--                            <a class="dropdown-item" href="#">cart</a>--}}
                    {{--                            <a class="dropdown-item" href="#">Action</a>--}}
                    {{--                            <a class="dropdown-item" href="#">Action</a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" id="cartBtn" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cart-plus"></i>
                            <span class="cart_counter">
                  @if(count(session('cart', [])) >0 )
                                    @php
                                        $qty = 0;
                                    @endphp
                                    @foreach(app('cart')->getItems() as $item)
                                        @php
                                            $qty += $item->qty;
                                        @endphp
                                    @endforeach
                                    {{  $qty }}
                                @endif
                  </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="cartBtn">
                            <a class="dropdown-item" href="{{ url('/cart') }}">@lang('front.go_to_cart')</a>
                            <a class="dropdown-item" href="{{ url('/checkout') }}">@lang('front.buy_now')</a>
                        </div>
                    </div>




                    <div class="drobdown">
                        <a class="btn dropdown-toggle profHead" href="#" role="button" id="profile"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- <img src="img/icon.png" alt=""> -->
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profile">
                            <a class="dropdown-item" href="{{route('order status')}}">@lang('site.order status')</a>
                            <a class="dropdown-item" href="{{route('profile')}}">@lang('customers.profile')</a>
                            @if(\Illuminate\Support\Facades\Auth::id())

                                <a class="dropdown-item" href="{{ route('logouts') }}">@lang('dashboard.auth.logout')


                                </a>



                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobNav" style="left: 0px; right: 0px;">
    <div class="row">
        @if(Locales::getCode()=="ar")

        <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"> <img src="{{asset('frontend/img/flag.png')}}" alt="">     {{ 'English' }}</a>
        @else

            <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"> <img src="{{asset('frontend/img/flag.png')}}" alt="">     {{ 'Arabic' }}</a>

        @endif
        <button class="btn"><i class="fa fa-times"></i></button>
    </div>
    <div class="pi_di">
{{--        <button class="btn piBtn">PICK UP</button>--}}
        <button class="btn"  onclick="window.location='{{ route('pickup') }}';">@lang('site.pickup')</button>
        <button class="btn">@lang('site.DELIVERY')</button>

{{--        <button class="btn">DELIVERY</button>--}}
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <ul class="navbar-nav">

        <li class="nav-item active">
            <a class="nav-link" href="{{'/'}}">@lang('site.home') <span
                        class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('search')}}">
                @lang('site.search')
            </a>
        </li>
        @guest()
            <li class="nav-item">
                <a class="nav-link"
                   href="{{route('login')}}">@lang('dashboard.auth.login.title')</a>
            </li>
        @endguest
        <li class="nav-item">
            <a class="nav-link" href="{{route('front.location')}}">@lang('locations.plural')</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('myorder')}}">@lang('orders.my_orders')</a>
        </li>
    </ul>
    <footer>
        <div class="col-12 rights">
            <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer">
                <span>©</span>
                جميع الحقوق محفوظة لشركه اسم_الشركة  بدعم من ويب اند ابز
                <a href="http://www.wna.net.kw" target="_blank"><img src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>
            </div>
        </div>
    </footer>
</div>
@yield('content')

<div class="modal fade" id="addToCartModal" tabindex="-1" role="dialog" aria-labelledby="addToCartModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addToCartModalLabel">@lang('front.cart')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="{{ asset('front/yo3an_wagef') }}/img/shopping-bag.png" width="20%">
                <h5 class="mt-3">@lang('front.want_to_checkout')</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('front.continue')</button>
                <button type="button" onclick="window.location='{{ url('/cart') }}'"
                        class="btn btn-warning">@lang('front.go_to_cart')</button>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/slick/slick.min.js')}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>

@if(Locales::getDir() == 'rtl')
    <script src="{{asset('frontend/js/main_ar.js')}}"></script>

@endif
@yield('scripts')
<script>
    AOS.init();
</script>


<script>


    function getMySearch() {
        var input, filter, ul, li, a, i, j, txtValue;
        input = document.getElementById("myInput");
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

    function addToCart(form_id) {
        $.ajax({
            type: "POST",
            url: "{{ LaravelLocalization::localizeURL(url('/cart')) }}",
            data: $('#' + form_id).serialize(),
            dataType: "json",
            success: function (res) {
                if (res.message == "Done") {
                    $('#addToCartModal').modal('show');
                    $('.cart_counter').show();
                    $('.cart_counter').html(res.cart_counter);
                }
            }
        });
    }

    function updateCart() {
        $.ajax({
            type: "PUT",
            url: "{{ LaravelLocalization::localizeURL(url('/cart/update')) }}",
            data: $('#cart-update').serialize(),
            dataType: "json",
            success: function (res) {
                if (res.message == "Done") {
                    $('.cart_counter').show();
                    $('.cart_counter').html(res.cart_counter);
                    $('#cart_total').html(res.cart_total);
                }
            }
        });
    }

    function calculate_shipping(id) {
        $.ajax({
            type: "GET",
            url: "/ar/calculate-shipping/"+id,
            dataType: "json",
            success: function(res) {
                $('#area').val(res.area);
                $('.shipping_price').html(res.formatted);
                $('#shipping_price').val(res.price);
                $('#total_price').html(res.total_formatted);
            }
        });
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('form input').keyup(function() {
        $('.'+$(this).attr('id')+'_error').hide();
    });


    {{--$(document).ready(function(){--}}

    {{--    // Delete--}}
    {{--    $('#delete').click(function(){--}}
    {{--        var id = $(this).data('id');--}}

    {{--        // Selecting image source--}}
    {{--        // var imgElement_src = $( '#img_'+id ).attr("src");--}}

    {{--        // AJAX request--}}
    {{--        $.ajax({--}}
    {{--            url: '{{route('deleteaddress.delete',id)}}',--}}
    {{--            type: 'post',--}}
    {{--            data: {path: imgElement_src},--}}
    {{--            success: function(response){--}}

    {{--                // Changing image source when remove--}}
    {{--                if(response == 1){--}}
    {{--                    $("#img_" + id).attr("src","images/noimage.png");--}}
    {{--                }--}}
    {{--            }--}}
    {{--        });--}}
    {{--    });--}}
    {{--});--}}

</script>
</body>
</html>