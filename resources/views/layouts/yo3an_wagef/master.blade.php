<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WNA demo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('front/yo3an_wagef') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front/yo3an_wagef') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/yo3an_wagef') }}/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/yo3an_wagef') }}/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('front/yo3an_wagef') }}/css/style.css">
    <!-- <link rel="stylesheet" href="{{ asset('front/yo3an_wagef') }}/css/style_dallas.css"> -->
    @if(Locales::getDir() == 'rtl')
    <link rel="stylesheet" href="{{ asset('front/yo3an_wagef') }}/css/style_ar.css"> 
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
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item @if(url()->current() == LaravelLocalization::localizeURL('/')) active @endif">
                      <a class="nav-link" href="{{ url('/') }}">@lang('front.home') <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @if(url()->current() == LaravelLocalization::localizeURL('/location')) active @endif">
                      <a class="nav-link" href="{{ url('/location') }}">@lang('front.location')</a>
                    </li>
                    @guest
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/login') }}">@lang('front.login')</a>
                    </li>
                    @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/orders') }}">@lang('orders.my_orders')</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logoutForm').submit()">@lang('dashboard.auth.logout')</a>
                        <form style="display: none" action="{{ route('logout') }}" method="post" id="logoutForm">
                        @csrf
                        </form>
                    </li>
                    @endguest
                    {{-- <li class="nav-item">
                      <a class="nav-link" href="myOrdrs.html">Order status</a>
                    </li> --}}
                  </ul>
                </div>
              </nav>
            </div>
            <div class="dropdown show col-md-1 rightDrb">
              <a class="btn dropdown-toggle" href="#" role="button" id="cartBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <div class="col-md-1 langDiv">
              @if(Locales::getCode()=="ar")
                <a hreflang="en"
                        href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                        {{ 'En' }}
                </a>
              @else
                <a hreflang="ar"
                        href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                        {{ 'Ar' }}
                </a>
              @endif
            </div>
          </div>
        </div>
      </div>
    </header>
      
      @yield('content')

  <!-- Modal -->
  <div class="modal fade" id="addToCartModal" tabindex="-1" role="dialog" aria-labelledby="addToCartModalLabel" aria-hidden="true">
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
		  <button type="button" onclick="window.location='{{ url('/cart') }}'" class="btn btn-warning">@lang('front.go_to_cart')</button>
		</div>
	  </div>
	</div>
  </div>
<!--End pop up =========================================================================================================-->


<script src="{{ asset('front/yo3an_wagef') }}/js/jquery-3.5.1.min.js"></script>
<script src="{{ asset('front/yo3an_wagef') }}/js/popper.min.js"></script>
<script src="{{ asset('front/yo3an_wagef') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('front/yo3an_wagef') }}/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script src="{{ asset('front/yo3an_wagef') }}/js/main.js"></script>
<script>
  AOS.init();
</script>

<script>
    function addToCart(form_id) {
        $.ajax({
            type: "POST",
            url: "{{ LaravelLocalization::localizeURL(url('/cart')) }}",
            data: $('#'+form_id).serialize(),
            dataType: "json",
            success: function(res) {
                if(res.message=="Done") {
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
                success: function(res) {
                    if(res.message=="Done") {
                      $('.cart_counter').show();
                      $('.cart_counter').html(res.cart_counter);
                      $('#cart_total').html(res.cart_total);
                    }
                }
            });
    }

    function getAreas(id) {
        $.ajax({
            type: "GET",
            url: "/ar/select/areas/"+id,
            data: "",
            success: function(res) {
                $('#area_select').html(res);
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

    $(document).ready(function() {
        $('#loginForm').on("submit", function(e) {
            e.preventDefault();
            var log_email = $('#log_email').val();
            var log_pass = $('#log_pass').val();
            var dataArray = "log_email="+log_email+"&log_pass="+log_pass;
            $.ajax({
                type: "POST",
                url: "{{ route('post_login') }}",
                data: dataArray,
                dataType: "json",
                beforeSend: function() {
                    $('#login_btn').prop('disabled', true);
                    $('#login_btn').html(' loading... ');
                },
                success: function(res) {
                    if(res.status==1) {
                        window.location="{{ url()->current() }}";
                    } else {
                        alert(res.message);
                    }
                    $('#login_btn').prop('disabled', false);
                    $('#login_btn').html("{{__('dashboard.auth.login.submit') }}");
                },
                error: function (request, status, error) {
                    $.each(request.responseJSON.errors, function(key,value) {
                        $('#'+key+'_error').show().html(value);
                        console.log(key);
                    });
                    $('#login_btn').prop('disabled', false);
                    $('#login_btn').html("{{__('dashboard.auth.login.submit') }}");
                }
            });
        });

        $('#profileForm').on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('profile_update') }}",
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('#profileForm .basicA').prop('disabled', true);
                    $('#profileForm .basicA').html(' loading... ');
                },
                success: function(res) {
                    if(res.status==1) {
                        window.location="{{ url()->current() }}";
                    } else {
                        alert(res.message);
                    }
                    $('#profileForm .basicA').prop('disabled', false);
                    $('#profileForm .basicA').html("{{__('admins.actions.save') }}");
                },
                error: function (request, status, error) {
                    $.each(request.responseJSON.errors, function(key,value) {
                        $('.'+key+'_error').show().html(value);
                        console.log(key);
                    });
                    $('#profileForm .basicA').prop('disabled', false);
                    $('#profileForm .basicA').html("{{__('admins.actions.save') }}");
                }
            });
        });

        $('#registerForm').on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('post_register') }}",
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('#registerForm .basicA').prop('disabled', true);
                    $('#registerForm .basicA').html(' loading... ');
                },
                success: function(res) {
                    if(res.status==1) {
                        window.location="{{ url()->current() }}";
                    } else {
                        alert(res.message);
                    }
                    $('#registerForm .basicA').prop('disabled', false);
                    $('#registerForm .basicA').html("{{__('dashboard.auth.register.submit') }}");
                },
                error: function (request, status, error) {
                    $.each(request.responseJSON.errors, function(key,value) {
                        $('#registerForm .'+key+'_error').show().html(value);
                        console.log(key);
                    });
                    $('#registerForm .basicA').prop('disabled', false);
                    $('#registerForm .basicA').html("{{__('dashboard.auth.register.submit') }}");
                }
            });
        });
    });
</script>

</body>
</html>
