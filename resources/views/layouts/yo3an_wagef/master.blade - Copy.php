<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yo3an wagef</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('front/yo3an_wagef') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front/yo3an_wagef') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/yo3an_wagef') }}/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/yo3an_wagef') }}/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('front/yo3an_wagef') }}/css/style.css">
    @if(Locales::getDir() == 'rtl')
    <link rel="stylesheet" href="{{ asset('front/yo3an_wagef') }}/css/style_ar.css">
    @endif

  </head>
  <body>

    <header class="noArr">
        <div class="row">
          <div class="col-lg-5 headerArr"></div>
          <div class="col-lg-7 headerMenu">
            <div class="row">
              <div class="col-md-6 pad0 leftNav">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="fit">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item @if(url()->current() == LaravelLocalization::localizeURL('/')) active @endif">
                        <a class="nav-link" href="{{ url('/') }}">@lang('front.menu') <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item @if(url()->current() == LaravelLocalization::localizeURL('/location')) active @endif">
                        <a class="nav-link" href="{{ url('/location') }}">@lang('front.location')</a>
                      </li>
                      @guest
                      <li class="nav-item @if(url()->current() == LaravelLocalization::localizeURL('/login')) active @endif">
                        <a class="nav-link" href="{{ url('/login') }}">@lang('front.login')</a>
                      </li>
                      @else
                      <li class="nav-item @if(url()->current() == LaravelLocalization::localizeURL('/orders')) active @endif">
                        <a class="nav-link" href="{{ url('/orders') }}">@lang('orders.my_orders')</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logoutForm').submit()">@lang('dashboard.auth.logout')</a>
                          <form style="display: none" action="{{ route('logout') }}" method="post" id="logoutForm">
                          @csrf
                          </form>
                      </li>
                      @endguest
                    </ul>
                  </div>
                </div>
              </nav>
              <div class="col-md-4 padR0 midSearch">
                <form action="{{ route('front.search') }}" method="GET">
                  <div class="col-12">
                    <i class="fa fa-search icon"></i>
                    <input class="input-field" type="text" name="name">
                  </div>
                </form>
              </div>
              <div class="dropdown show col-md-1 rightDrb langDiv">
                    @if(Locales::getCode()=="ar")
                      <a hreflang="en" class="btn dropdown-toggle"
                              href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
                              {{ 'English' }}
                      </a>
                    @else
                      <a hreflang="ar" class="btn dropdown-toggle"
                              href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
                              {{ '????????' }}
                      </a>
                    @endif
              </div>
              <div class="dropdown show col-md-1 rightDrb">
                <a class="btn dropdown-toggle" href="#" role="button" id="cartDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40.3" height="34.526" viewBox="0 0 40.3 34.526">
                    <g id="Group_3966" data-name="Group 3966" transform="translate(-33.276 -101)">
                      <path id="Path_4080" data-name="Path 4080" d="M34.549,103.551h7l-1.229-.935c.2.621.408,1.242.612,1.867q.74,2.239,1.475,4.477.887,2.691,1.777,5.392.772,2.341,1.539,4.681c.251.757.489,1.518.748,2.271,0,.013.008.021.013.034a1.277,1.277,0,1,0,2.462-.676c-.2-.621-.408-1.242-.612-1.867q-.74-2.239-1.475-4.477-.887-2.7-1.777-5.4-.772-2.341-1.539-4.681c-.251-.757-.485-1.518-.748-2.271,0-.013-.009-.021-.013-.034A1.315,1.315,0,0,0,41.556,101h-7a1.276,1.276,0,0,0,0,2.551Z" transform="translate(0)" fill="#d3001d"/>
                      <path id="Path_4081" data-name="Path 4081" d="M289.956,542.184q-1.033,1.843-2.071,3.682c-.1.179-.2.353-.3.531a1.287,1.287,0,0,0,1.1,1.918h19.474c.9,0,1.8.017,2.7,0h.038a1.276,1.276,0,1,0,0-2.551H291.427c-.9,0-1.8-.026-2.7,0h-.038c.366.638.736,1.28,1.1,1.918q1.033-1.843,2.071-3.682c.1-.179.2-.353.3-.531a1.275,1.275,0,0,0-2.2-1.284Z" transform="translate(-243.34 -421.834)" fill="#d3001d"/>
                      <circle id="Ellipse_11" data-name="Ellipse 11" cx="2.896" cy="2.896" r="2.896" transform="translate(60.707 128.884)" fill="#d3001d"/>
                      <path id="Path_4082" data-name="Path 4082" d="M658.4,740.715a3.807,3.807,0,0,0,2.5,3.529,3.748,3.748,0,0,0,4.086-1.089,3.746,3.746,0,1,0-6.586-2.441.85.85,0,0,0,1.7,0c0-.068,0-.14.009-.208a.641.641,0,0,1,.008-.089c.013-.17,0,.055-.008.051a1.647,1.647,0,0,1,.1-.417c.013-.034.038-.179.068-.187.008,0-.077.157-.03.072a1.1,1.1,0,0,0,.047-.1,3.873,3.873,0,0,1,.217-.361c.081-.123-.115.132.021-.025.043-.047.085-.1.132-.145s.094-.094.14-.136c.021-.017.042-.038.064-.055s.153-.085.042-.038c-.094.038-.025.021,0,0s.06-.043.094-.064a1.6,1.6,0,0,1,.145-.085c.064-.038.132-.068.2-.1.021-.013.111-.055,0,0-.128.06.043-.013.055-.017a2.633,2.633,0,0,1,.357-.1c.038-.008.077-.013.115-.021.094-.021-.081.009-.081.009.077,0,.157-.017.234-.017a3.419,3.419,0,0,1,.417.013c.157.013-.162-.03.034.009.077.013.149.034.225.051s.128.038.191.06a.973.973,0,0,1,.106.038c0,.013-.157-.081-.072-.03.119.072.251.128.37.2.03.021.06.043.094.064s.094.038,0,0-.03-.025,0,0l.085.072a3.8,3.8,0,0,1,.289.3c.128.14-.06-.1.021.026.034.055.072.106.106.162s.068.115.1.17l.038.077c.081.153.017-.013,0-.021.051.017.106.323.123.378s.026.115.038.17c.034.162,0-.051,0-.055.021.021.013.119.013.145a2.924,2.924,0,0,1,0,.387,1.04,1.04,0,0,0-.008.119c0,.085-.051.072.008-.051a1.319,1.319,0,0,0-.047.225c-.03.119-.077.234-.111.353s.077-.145.021-.047a.424.424,0,0,0-.034.077c-.034.068-.068.132-.106.2s-.068.111-.106.166c-.115.174.081-.085-.017.03a3.226,3.226,0,0,1-.289.3c-.017.017-.119.128-.149.128,0,0,.174-.119.038-.034-.026.017-.047.03-.068.047-.119.076-.242.14-.366.2s.153-.051-.03.013l-.187.064-.2.051c-.03,0-.055.013-.085.017-.187.042.136-.009.026,0a3.424,3.424,0,0,1-.417.017c-.068,0-.136-.009-.208-.013-.026,0-.128-.013,0,0,.14.013-.03-.009-.06-.013a3.211,3.211,0,0,1-.438-.128c-.025-.009-.11-.051,0,0,.123.06-.026-.013-.051-.026-.068-.034-.132-.068-.2-.106s-.123-.081-.187-.123c-.1-.064.013.034.038.034-.017,0-.072-.06-.085-.072a3.144,3.144,0,0,1-.315-.315.5.5,0,0,1-.072-.085c0,.017.1.145.034.038-.042-.064-.085-.123-.123-.187s-.081-.149-.119-.221c-.089-.174.043.136-.026-.055a3.086,3.086,0,0,1-.123-.442.276.276,0,0,0-.017-.085c.064.14.013.119,0,.021s-.013-.179-.013-.268a.861.861,0,0,0-1.722,0Z" transform="translate(-598.543 -608.935)" fill="#d3001d"/>
                      <circle id="Ellipse_12" data-name="Ellipse 12" cx="2.896" cy="2.896" r="2.896" transform="translate(46.05 128.884)" fill="#d3001d"/>
                      <path id="Path_4083" data-name="Path 4083" d="M313.7,740.715a3.807,3.807,0,0,0,2.5,3.529,3.748,3.748,0,0,0,4.086-1.089,3.746,3.746,0,1,0-6.586-2.441.85.85,0,0,0,1.7,0c0-.068,0-.14.009-.208a.632.632,0,0,1,.008-.089c.013-.17,0,.055-.008.051a1.649,1.649,0,0,1,.1-.417c.013-.034.038-.179.068-.187.009,0-.077.157-.03.072a1.09,1.09,0,0,0,.047-.1,3.873,3.873,0,0,1,.217-.361c.081-.123-.115.132.021-.025.043-.047.085-.1.132-.145s.094-.094.14-.136c.021-.017.043-.038.064-.055s.153-.085.043-.038c-.094.038-.026.021,0,0s.06-.043.094-.064a1.6,1.6,0,0,1,.145-.085c.064-.038.132-.068.2-.1.021-.013.111-.055,0,0-.128.06.043-.013.055-.017a2.633,2.633,0,0,1,.357-.1c.038-.008.077-.013.115-.021.094-.021-.081.009-.081.009.077,0,.157-.017.234-.017a3.419,3.419,0,0,1,.417.013c.157.013-.162-.03.034.009.077.013.149.034.225.051s.128.038.191.06a.979.979,0,0,1,.106.038c0,.013-.157-.081-.072-.03.119.072.251.128.37.2.03.021.06.043.094.064s.094.038,0,0-.03-.025,0,0l.085.072a3.8,3.8,0,0,1,.289.3c.128.14-.06-.1.021.026.034.055.072.106.106.162s.068.115.1.17l.038.077c.081.153.017-.013,0-.021.051.017.106.323.123.378s.026.115.038.17c.034.162,0-.051,0-.055.021.021.013.119.013.145a2.934,2.934,0,0,1,0,.387,1.047,1.047,0,0,0-.008.119c0,.085-.051.072.008-.051a1.325,1.325,0,0,0-.047.225c-.03.119-.077.234-.111.353s.077-.145.021-.047a.421.421,0,0,0-.034.077c-.034.068-.068.132-.106.2s-.068.111-.106.166c-.115.174.081-.085-.017.03a3.225,3.225,0,0,1-.289.3c-.017.017-.119.128-.149.128,0,0,.174-.119.038-.034-.026.017-.047.03-.068.047-.119.076-.242.14-.366.2s.153-.051-.03.013l-.187.064-.2.051c-.03,0-.055.013-.085.017-.187.042.136-.009.026,0a3.423,3.423,0,0,1-.417.017c-.068,0-.136-.009-.208-.013-.026,0-.128-.013,0,0,.14.013-.03-.009-.06-.013a3.208,3.208,0,0,1-.438-.128c-.026-.009-.111-.051,0,0,.123.06-.026-.013-.051-.026-.068-.034-.132-.068-.2-.106s-.123-.081-.187-.123c-.1-.064.013.034.038.034-.017,0-.072-.06-.085-.072a3.144,3.144,0,0,1-.315-.315.5.5,0,0,1-.072-.085c0,.017.1.145.034.038-.043-.064-.085-.123-.123-.187s-.081-.149-.119-.221c-.089-.174.043.136-.026-.055a3.09,3.09,0,0,1-.123-.442.275.275,0,0,0-.017-.085c.064.14.013.119,0,.021s-.013-.179-.013-.268a.861.861,0,0,0-1.722,0Z" transform="translate(-268.497 -608.935)" fill="#d3001d"/>
                      <g id="Group_3965" data-name="Group 3965" transform="translate(42.471 106.809)">
                        <path id="Path_4084" data-name="Path 4084" d="M299.085,258l-5.162,13.309H274.088L269.7,258Z" transform="translate(-268.842 -257.133)" fill="#d3001d"/>
                        <path id="Path_4085" data-name="Path 4085" d="M278.944,238.244q-.874,2.251-1.743,4.5-1.39,3.591-2.777,7.177c-.213.549-.425,1.1-.638,1.65.272-.208.549-.417.821-.625H257.213c-.8,0-1.607-.034-2.411,0h-.034c.272.208.549.417.821.625q-.746-2.264-1.488-4.524-1.18-3.578-2.356-7.16c-.183-.549-.361-1.1-.544-1.65l-.821,1.076h28.195c.383,0,.765.008,1.144,0h.051a.85.85,0,0,0,0-1.7H251.574c-.383,0-.765-.008-1.144,0h-.051a.858.858,0,0,0-.821,1.076q.746,2.264,1.488,4.524,1.18,3.578,2.356,7.16c.183.549.361,1.1.544,1.65a.878.878,0,0,0,.821.625h17.395c.8,0,1.607.03,2.411,0h.034a.884.884,0,0,0,.821-.625q.874-2.251,1.743-4.5,1.39-3.591,2.777-7.177c.213-.549.425-1.1.638-1.65a.853.853,0,0,0-.6-1.046A.873.873,0,0,0,278.944,238.244Z" transform="translate(-249.522 -237.611)" fill="#d3001d"/>
                      </g>
                    </g>
                  </svg>                                
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
                <div class="dropdown-menu" aria-labelledby="cartDrop">
                  <a class="dropdown-item" href="{{ url('/cart') }}">@lang('front.go_to_cart')</a>
                  <a class="dropdown-item" href="{{ url('/checkout') }}">@lang('front.buy_now')</a>
                </div>
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
