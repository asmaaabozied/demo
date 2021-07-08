<!DOCTYPE html>
<html dir="{{ Locales::getDir() }}" lang="{{ app()->getLocale() }}" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/font-awesome.min.css')}}" rel="stylesheet">
    <script src="{{asset('dashboard/js/ckeditor.js')}}"></script>
    <link href="{{asset('dashboard/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/styles.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-colvis-1.6.4/b-flash-1.6.4/b-html5-1.6.4/b-print-1.6.4/datatables.min.css"/>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>


    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>

    @if(Locales::getDir() == 'rtl')
        <link href="{{asset('dashboard/css/style_ar.css')}}" rel="stylesheet">

    @endif

    @section('styles')
        <style>


            .buttons-excel {
                background-color: #0B90C4;
                margin: 5px;

            }

            .buttons-pdf {

                background-color: #8677A7;
                margin: 5px;
            }

            .buttons-copy {
                background-color: #9cc2cb;
                margin: 5px;


            }

            .buttons-print {
                background-color: #2ea8e5;
                margin: 5px;
            }
        </style>
</head>
<body>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only"> {{ config('app.name') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><img src="{{asset('dashboard/img/logo.png')}}" alt=""></a>
            <ul class="nav navbar-top-links navbar-right dNonMob">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <img src="{{ Locales::getFlag() }}" alt="">
                        <span><small> {{ Locales::getName() }}</small><i class="fa fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu dropdown-lang">
                        @foreach(Locales::get() as $locale)
                            <li><a href="{{ route('dashboard.locale', $locale->code) }}"
                                   class="dropdown-item {{ app()->getLocale() == $locale->code ? 'active' : '' }}">
                                    <img src="{{ $locale->flag }}" alt="">
                                    {{ $locale->name }}</a></li>

                        @endforeach
                    </ul>
                </li>


                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        {{--                        {{ auth()->user()->getFirstMediaUrl('avatars') }}--}}
                        <img src="{{asset('dashboard/img/user.png')}}" alt="" class="uImg">
                        <span><small>{{auth()->user()->name ?? ''}}</small><i class="fa fa-chevron-down"></i></span>
                    </a>
                    <ul class="dropdown-menu dropdown-lang">
                        <li>
                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault();document.getElementById('logoutForm').submit()">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                @lang('dashboard.auth.logout')
                            </a>
                            <form style="display: none;" action="/ar/logout" method="post" id="logoutForm">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
@include('layouts.sidebar')

@yield('content')
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}

<script src="{{asset('dashboard/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/chart.min.js')}}"></script>
<script src="{{asset('dashboard/js/chart-data.js')}}"></script>
<script src="{{asset('dashboard/js/easypiechart.js')}}"></script>
<script src="{{asset('dashboard/js/easypiechart-data.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap-datepicker.js')}}"></script>
{{--<script src="{{asset('dashboard/js/ckeditor.js')}}"></script>--}}
<script src="{{asset('dashboard/js/sample.js')}}"></script>
<script src="{{asset('dashboard/js/custom.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-colvis-1.6.4/b-flash-1.6.4/b-html5-1.6.4/b-print-1.6.4/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
@yield('scripts')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-file-uploader"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJsmUJvk2JTFUr88JHZIxt9MC39X2It9E&callback=initMap" async defer></script>--}}


<script>
    new Vue({
        el: '#app'
    })

    $("#pac-input").focusin(function() {
        $(this).val('');
    });




    $("#customCheck3").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });

    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
    Number.prototype.format = function (n) {
        var r = new RegExp('\\d(?=(\\d{3})+' + (n > 0 ? '\\.' : '$') + ')', 'g');
        return this.toFixed(Math.max(0, Math.floor(n))).replace(r, '$&,');
    };

    $('.count').each(function () {
        $(this).prop('counter', 0).animate({
            counter: $(this).text()
        }, {
            duration: 10000,
            easing: 'easeOutExpo',
            step: function (step) {
                $(this).text('' + step.format());
            }
        });
    });
    $(document).ready(function () {
        $('#table').dataTable({

            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print', 'copy'
            ],
            "language": {
                'search': "@lang('site.search')",


                "paginate": {

                    "previous": "@lang('site.previous')",
                    "next": "@lang('site.next')",
                    'Show': 'dddd',


                }

            }

        });
    });

    //delete
    $('.delete').click(function (e) {

        var that = $(this)

        e.preventDefault();

        var n = new Noty({
            text: "@lang('site.confirm_delete')",
            type: "error",
            killer: true,
            buttons: [
                Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                    that.closest('form').submit();
                }),

                Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                    n.close();
                })
            ]
        });

        n.show();

    });//end of delete


    //update
    $('.update').click(function (e) {

        var that = $(this)

        e.preventDefault();

        var n = new Noty({
            text: "@lang('site.confirm_update')",
            type: "warning",
            killer: true,
            buttons: [
                Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                    that.closest('form').submit();
                }),

                Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                    n.close();
                })
            ]
        });

        n.show();

    });//end of update


</script>

{{--<script type="text/javascript">--}}
{{--    var map,--}}
{{--        mapWarpper = document.getElementById('map'),--}}
{{--        markersArray = [];--}}

{{--    function initMap() {--}}
{{--        // Create the map object--}}
{{--        map = new google.maps.Map(document.getElementById('map'), {--}}
{{--            center: {--}}
{{--                lat: 24.804219,--}}
{{--                lng: 45.860100--}}
{{--            },--}}
{{--            zoom: 6--}}
{{--        });--}}
{{--        // Get the cords--}}
{{--        google.maps.event.addListener(map, 'click', function(event) {--}}
{{--            var dataUrl = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+event.latLng.lat()+','+event.latLng.lng()+'&sensor=true';--}}

{{--            $('#lat').val(event.latLng.lat());--}}
{{--            $('#lng').val(event.latLng.lng());--}}

{{--            $.ajax({--}}
{{--                type: 'GET',--}}
{{--                url: dataUrl,--}}
{{--                success: function(data){--}}
{{--                    $('.address').text(data.results[0].formatted_address);--}}
{{--                    console.log(data.results[0].formatted_address)--}}
{{--                },--}}
{{--                error: function(){--}}
{{--                    console.log('ERROR!!!')--}}
{{--                }--}}
{{--            })--}}



{{--        });--}}
{{--        // Make the marker--}}
{{--        google.maps.event.addListener(map, 'click', function(event) {--}}
{{--            placeMarker(event.latLng);--}}
{{--        });--}}

{{--    }--}}
{{--    // Function that clear the markers--}}
{{--    function clearOverlays() {--}}
{{--        for (var i = 0; i < markersArray.length; i++ ) {--}}
{{--            markersArray[i].setMap(null);--}}
{{--        }--}}
{{--        markersArray.length = 0;--}}
{{--    }--}}
{{--    // Function that place the marker--}}
{{--    function placeMarker(location) {--}}
{{--        var marker = new google.maps.Marker({--}}
{{--            position: location,--}}
{{--            map: map--}}
{{--        });--}}
{{--        clearOverlays();--}}
{{--        markersArray.push(marker);--}}
{{--    }--}}
{{--</script>--}}

@stack('scripts')
</body>
</html>