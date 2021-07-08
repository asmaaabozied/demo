<!DOCTYPE html>
<html dir="{{ Locales::getDir() }}" lang="{{ app()->getLocale() }}" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <title>{{ $title ? $title .' | '. config('app.name', 'Laravel') : config('app.name', 'Laravel')}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Vali -->
    @if(Locales::getDir() == 'rtl')
        <link rel="stylesheet" href="{{ asset(mix('/css/vali.rtl.css')) }}">
    @else
        <link rel="stylesheet" href="{{ asset(mix('/css/vali.css')) }}">
    @endif

    @stack('styles')
    @livewireStyles
</head>
<body class="app sidebar-mini">
<div id="app">
    <!-- Navbar-->
    <header class="app-header" style="background-color:#3F66B0;">
        <a class="app-header__logo" style="background-color:#3F66B0;" href="{{ url('/') }}" target="_blank">
            {{ config('app.name') }}
        </a>
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- Language Menu-->
            <li class="dropdown">
                <a class="app-nav__item text-decoration-none"
                   href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                    <img src="{{ Locales::getFlag() }}" alt="">
                    <span class="d-none d-md-inline">
                        {{ Locales::getName() }}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right p-0">
                    @foreach(Locales::get() as $locale)
                        <a href="{{ route('dashboard.locale', $locale->code) }}"
                           class="dropdown-item {{ app()->getLocale() == $locale->code ? 'active' : '' }}">
                            <img src="{{ $locale->flag }}" alt="">
                            {{ $locale->name }}
                        </a>
                    @endforeach
                </div>
            </li>
        {{--            <!--Notification Menu-->--}}
        {{--            <li class="dropdown">--}}
        {{--                <a class="app-nav__item"--}}
        {{--                   href="#" data-toggle="dropdown"--}}
        {{--                   aria-label="Show notifications">--}}
        {{--                    <i class="fas fa-bell fa-lg"></i>--}}
        {{--                </a>--}}
        {{--                <ul class="app-notification dropdown-menu dropdown-menu-right">--}}
        {{--                    <li class="app-notification__title">You have 4 new notifications.</li>--}}
        {{--                    <div class="app-notification__content">--}}
        {{--                        <li>--}}
        {{--                            <a class="app-notification__item" href="javascript:;">--}}
        {{--                                <span class="app-notification__icon">--}}
        {{--                                    <span class="fa-stack fa-lg">--}}
        {{--                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>--}}
        {{--                                        <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>--}}
        {{--                                    </span>--}}
        {{--                                </span>--}}
        {{--                                <div>--}}
        {{--                                    <p class="app-notification__message">Lisa sent you a mail</p>--}}
        {{--                                    <p class="app-notification__meta">2 min ago</p>--}}
        {{--                                </div>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li><a class="app-notification__item" href="javascript:;"><span--}}
        {{--                                        class="app-notification__icon"><span class="fa-stack fa-lg"><i--}}
        {{--                                                class="fa fa-circle fa-stack-2x text-danger"></i><i--}}
        {{--                                                class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>--}}
        {{--                                <div>--}}
        {{--                                    <p class="app-notification__message">Mail server not working</p>--}}
        {{--                                    <p class="app-notification__meta">5 min ago</p>--}}
        {{--                                </div>--}}
        {{--                            </a></li>--}}
        {{--                        <li><a class="app-notification__item" href="javascript:;"><span--}}
        {{--                                        class="app-notification__icon"><span class="fa-stack fa-lg"><i--}}
        {{--                                                class="fa fa-circle fa-stack-2x text-success"></i><i--}}
        {{--                                                class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>--}}
        {{--                                <div>--}}
        {{--                                    <p class="app-notification__message">Transaction complete</p>--}}
        {{--                                    <p class="app-notification__meta">2 days ago</p>--}}
        {{--                                </div>--}}
        {{--                            </a></li>--}}
        {{--                        <div class="app-notification__content">--}}
        {{--                            <li><a class="app-notification__item" href="javascript:;"><span--}}
        {{--                                            class="app-notification__icon"><span class="fa-stack fa-lg"><i--}}
        {{--                                                    class="fa fa-circle fa-stack-2x text-primary"></i><i--}}
        {{--                                                    class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>--}}
        {{--                                    <div>--}}
        {{--                                        <p class="app-notification__message">Lisa sent you a mail</p>--}}
        {{--                                        <p class="app-notification__meta">2 min ago</p>--}}
        {{--                                    </div>--}}
        {{--                                </a></li>--}}
        {{--                            <li><a class="app-notification__item" href="javascript:;"><span--}}
        {{--                                            class="app-notification__icon"><span class="fa-stack fa-lg"><i--}}
        {{--                                                    class="fa fa-circle fa-stack-2x text-danger"></i><i--}}
        {{--                                                    class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>--}}
        {{--                                    <div>--}}
        {{--                                        <p class="app-notification__message">Mail server not working</p>--}}
        {{--                                        <p class="app-notification__meta">5 min ago</p>--}}
        {{--                                    </div>--}}
        {{--                                </a></li>--}}
        {{--                            <li><a class="app-notification__item" href="javascript:;"><span--}}
        {{--                                            class="app-notification__icon"><span class="fa-stack fa-lg"><i--}}
        {{--                                                    class="fa fa-circle fa-stack-2x text-success"></i><i--}}
        {{--                                                    class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>--}}
        {{--                                    <div>--}}
        {{--                                        <p class="app-notification__message">Transaction complete</p>--}}
        {{--                                        <p class="app-notification__meta">2 days ago</p>--}}
        {{--                                    </div>--}}
        {{--                                </a></li>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <li class="app-notification__footer"><a href="#">See all notifications.</a></li>--}}
        {{--                </ul>--}}
        {{--            </li>--}}
        <!-- User Menu-->
            <li class="dropdown">
                <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                    <i class="fa fa-user fa-lg"></i>
                </a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
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
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <img class="app-sidebar__user-avatar"
                 src="{{ auth()->user()->getFirstMediaUrl('avatars') }}"
                 alt="{{ auth()->user()->name }}">
            <div>
                <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
                <p class="app-sidebar__user-designation">{{ auth()->user()->email }}</p>
            </div>
        </div>
        <ul class="app-menu">
            @include('layouts.sidebar')
        </ul>
    </aside>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1>{{ $title }}</h1>
            </div>
            @isset($breadcrumbs)
                {{ Breadcrumbs::render(...$breadcrumbs) }}
            @endisset
        </div>
        @include('flash::message')
        {{ $slot }}
    </main>
</div>
<!-- Scripts -->
<script src="{{ asset(mix('/js/vali.js')) }}"></script>
<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJsmUJvk2JTFUr88JHZIxt9MC39X2It9E&callback=initMap" async defer></script>
<script type="text/javascript">
var map,
  mapWarpper = document.getElementById('map'),
  markersArray = [];

function initMap() {
  // Create the map object
  map = new google.maps.Map(document.getElementById('map'), {
    center: {
      lat: 24.804219,
      lng: 45.860100
    },
    zoom: 6
  });
  // Get the cords
  google.maps.event.addListener(map, 'click', function(event) {
    var dataUrl = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+event.latLng.lat()+','+event.latLng.lng()+'&sensor=true';
    
	$('#lat').val(event.latLng.lat());
	$('#lng').val(event.latLng.lng());
    
    $.ajax({
      type: 'GET',
      url: dataUrl,
      success: function(data){
          $('.address').text(data.results[0].formatted_address);
          console.log(data.results[0].formatted_address)
      },
      error: function(){
        console.log('ERROR!!!')
      }
    })
    
    
    
  });
  // Make the marker
  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng);
  });

}
// Function that clear the markers
function clearOverlays() {
  for (var i = 0; i < markersArray.length; i++ ) {
    markersArray[i].setMap(null);
  }
  markersArray.length = 0;
}
// Function that place the marker
function placeMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  clearOverlays();
  markersArray.push(marker);
}
</script>


<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@stack('scripts')
@livewireScripts
</body>
</html>
