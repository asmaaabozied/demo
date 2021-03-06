<!DOCTYPE html>
<html dir="{{ Locales::getDir() }}" lang="{{ app()->getLocale() }}" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <title>{{ $title ? $title .' | '. config('app.name', 'Laravel') : config('app.name', 'Laravel')}}</title>--}}
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/styles.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    @if(Locales::getDir() == 'rtl')
        <link href="{{asset('dashboard/css/style_ar.css')}}" rel="stylesheet">

    @endif

    @stack('styles')
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only"> {{ config('app.name') }}</span>
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
                            <li> <a href="{{ route('dashboard.locale', $locale->code) }}"
                                    class="dropdown-item {{ app()->getLocale() == $locale->code ? 'active' : '' }}" >
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

{{--<div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main">--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-12">--}}
{{--            <h1 class="page-header">overview</h1>--}}
{{--            <ul class="pull-right ovUl">--}}
{{--                <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">--}}
{{--                        <span>today <i class="fa fa-chevron-down"></i> </span>--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                        <li>--}}
{{--                            <ul class="dropdown-settings">--}}
{{--                                <li><a href="#">--}}
{{--                                        <em class="fa fa-cog"></em> Settings 1--}}
{{--                                    </a></li>--}}
{{--                                <li class="divider"></li>--}}
{{--                                <li><a href="#">--}}
{{--                                        <em class="fa fa-cog"></em> Settings 2--}}
{{--                                    </a></li>--}}
{{--                                <li class="divider"></li>--}}
{{--                                <li><a href="#">--}}
{{--                                        <em class="fa fa-cog"></em> Settings 3--}}
{{--                                    </a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div><!--/.row-->--}}

{{--    <div class="panel panel-container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xs-6 col-md-3 col-lg-3 padR0">--}}
{{--                <div class="panel panel-teal panel-widget border-right">--}}
{{--                    <div class="row no-padding">--}}
{{--                        <div class="text-muted">total profit</div>--}}
{{--                        <div class="large">120.000$ <span class="spanP">+10%</span> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-6 col-md-3 col-lg-3 padR0">--}}
{{--                <div class="panel panel-blue panel-widget border-right">--}}
{{--                    <div class="row no-padding">--}}
{{--                        <div class="text-muted">total profit</div>--}}
{{--                        <div class="large">120.000$ <span class="spanM">+10%</span> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-6 col-md-3 col-lg-3 padR0">--}}
{{--                <div class="panel panel-orange panel-widget border-right">--}}
{{--                    <div class="row no-padding">--}}
{{--                        <div class="text-muted">total profit</div>--}}
{{--                        <div class="large">120.000$ <span class="spanP">+10%</span> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xs-6 col-md-3 col-lg-3 padR0">--}}
{{--                <div class="panel panel-red panel-widget ">--}}
{{--                    <div class="row no-padding">--}}
{{--                        <div class="text-muted">total profit</div>--}}
{{--                        <div class="large">120.000$ <span class="spanP">+10%</span> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div><!--/.row-->--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-7 chartL">--}}
{{--            <div class="adProDiv">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="col-md-12 bludModalDiv">--}}
{{--                        <button type="button" class="" data-toggle="modal" data-target="#addPro"><i class="fa fa-plus-circle"></i> add products</button>--}}
{{--                        <div id="addPro" class="modal fade" role="dialog">--}}
{{--                            <div class="modal-dialog">--}}

{{--                                <!-- Modal content-->--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                                        <h4 class="modal-title">Modal Header</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <p>Some text in the modal.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-footer">--}}
{{--                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="col-xs-12 col-md-12 col-lg-12 padR0">--}}
{{--                        <div class="panel panel-blue panel-widget border-right">--}}
{{--                            <div class="row no-padding">--}}
{{--                                <div class="text-muted">total products</div>--}}
{{--                                <div class="large">5000 </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xs-12 col-md-12 col-lg-12 padR0">--}}
{{--                        <div class="panel panel-blue panel-widget border-right">--}}
{{--                            <div class="row no-padding">--}}
{{--                                <div class="text-muted">total categories</div>--}}
{{--                                <div class="large">400 </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="clearfix"></div>--}}
{{--            <div class="panel panel-default">--}}
{{--                <div class="panel-heading">--}}
{{--                    <span class=" clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>  <small>sales</small>--}}
{{--                    <ul class="pull-right panel-settings panel-button-tab-right">--}}
{{--                        <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">--}}
{{--                                <span>months <i class="fa fa-chevron-down"></i> </span>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                <li>--}}
{{--                                    <ul class="dropdown-settings">--}}
{{--                                        <li><a href="#">--}}
{{--                                                <em class="fa fa-cog"></em> Settings 1--}}
{{--                                            </a></li>--}}
{{--                                        <li class="divider"></li>--}}
{{--                                        <li><a href="#">--}}
{{--                                                <em class="fa fa-cog"></em> Settings 2--}}
{{--                                            </a></li>--}}
{{--                                        <li class="divider"></li>--}}
{{--                                        <li><a href="#">--}}
{{--                                                <em class="fa fa-cog"></em> Settings 3--}}
{{--                                            </a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="panel-body">--}}
{{--                    <div class="canvas-wrapper">--}}
{{--                        <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="panel panel-default bgW">--}}
{{--                <div class="panel-heading">--}}
{{--                    <span class=" clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>  <small>active users</small>--}}

{{--                    <div class="ppR">--}}
{{--                        <ul class="pull-right panel-settings panel-button-tab-right">--}}
{{--                            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">--}}
{{--                                    <span>today <i class="fa fa-chevron-down"></i> </span>--}}
{{--                                </a>--}}
{{--                                <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <li>--}}
{{--                                        <ul class="dropdown-settings">--}}
{{--                                            <li><a href="#">--}}
{{--                                                    <em class="fa fa-cog"></em> Settings 1--}}
{{--                                                </a></li>--}}
{{--                                            <li class="divider"></li>--}}
{{--                                            <li><a href="#">--}}
{{--                                                    <em class="fa fa-cog"></em> Settings 2--}}
{{--                                                </a></li>--}}
{{--                                            <li class="divider"></li>--}}
{{--                                            <li><a href="#">--}}
{{--                                                    <em class="fa fa-cog"></em> Settings 3--}}
{{--                                                </a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="p500"> <em class="fa fa-user"></em> <span> 500</span></div>--}}
{{--                </div>--}}
{{--                <div class="panel-body">--}}
{{--                    <div class="col-md-12 no-padding">--}}
{{--                        <div class="row progress-labels">--}}
{{--                            <div class="col-sm-6">registered users</div>--}}
{{--                            <div class="col-sm-6" style="text-align: right;">800</div>--}}
{{--                        </div>--}}
{{--                        <div class="progress">--}}
{{--                            <div data-percentage="0%" style="width: 80%;" class="progress-bar progress-bar-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                        <div class="row progress-labels">--}}
{{--                            <div class="col-sm-6">users</div>--}}
{{--                            <div class="col-sm-6" style="text-align: right;">1000</div>--}}
{{--                        </div>--}}
{{--                        <div class="progress">--}}
{{--                            <div data-percentage="0%" style="width: 60%;" class="progress-bar progress-bar-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-5 tableR">--}}
{{--            <div class="col-12 no-padding recOrd">--}}
{{--                <h6 class="reOH">recent orders</h6>--}}
{{--                <table>--}}
{{--                    <thead>--}}
{{--                    <th>date</th>--}}
{{--                    <th>order</th>--}}
{{--                    <th>customer</th>--}}
{{--                    <th>status</th>--}}
{{--                    <th>total</th>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td>01/02/2000</td>--}}
{{--                        <td>76654</td>--}}
{{--                        <td>john john</td>--}}
{{--                        <td class="com"> <span class="fa fa-circle"></span>completed</td>--}}
{{--                        <td>50$</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>01/02/2000</td>--}}
{{--                        <td>76654</td>--}}
{{--                        <td>john john</td>--}}
{{--                        <td class="pen"> <span class="fa fa-circle"></span> pending</td>--}}
{{--                        <td>50$</td>--}}
{{--                    </tr>--}}

{{--                    <tr>--}}
{{--                        <td>01/02/2000</td>--}}
{{--                        <td>76654</td>--}}
{{--                        <td>john john</td>--}}
{{--                        <td class="can"> <span class="fa fa-circle"></span>cancelled</td>--}}
{{--                        <td>50$</td>--}}
{{--                    </tr>--}}

{{--                    <tr>--}}
{{--                        <td>01/02/2000</td>--}}
{{--                        <td>76654</td>--}}
{{--                        <td>john john</td>--}}
{{--                        <td class="com"> <span class="fa fa-circle"></span>completed</td>--}}
{{--                        <td>50$</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>01/02/2000</td>--}}
{{--                        <td>76654</td>--}}
{{--                        <td>john john</td>--}}
{{--                        <td class="com"> <span class="fa fa-circle"></span>completed</td>--}}
{{--                        <td>50$</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td colspan="5">--}}
{{--                            <a class="pull-right seeAll" data-toggle="dropdown" href="#">--}}
{{--                                <span>see all</span>--}}
{{--                            </a>--}}

{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}

{{--                </table>--}}
{{--            </div>--}}
{{--            <div class="col-12 no-padding">--}}
{{--                <div class="panel panel-default">--}}
{{--                    <div class="panel-heading">--}}
{{--                        <span class=" clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span> <small>weekly orders</small>--}}
{{--                        <ul class="pull-right panel-settings panel-button-tab-right">--}}
{{--                            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">--}}
{{--                                    <span>this week <i class="fa fa-chevron-down"></i> </span>--}}
{{--                                </a>--}}
{{--                                <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <li>--}}
{{--                                        <ul class="dropdown-settings">--}}
{{--                                            <li><a href="#">--}}
{{--                                                    <em class="fa fa-cog"></em> Settings 1--}}
{{--                                                </a></li>--}}
{{--                                            <li class="divider"></li>--}}
{{--                                            <li><a href="#">--}}
{{--                                                    <em class="fa fa-cog"></em> Settings 2--}}
{{--                                                </a></li>--}}
{{--                                            <li class="divider"></li>--}}
{{--                                            <li><a href="#">--}}
{{--                                                    <em class="fa fa-cog"></em> Settings 3--}}
{{--                                                </a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="panel-body">--}}
{{--                        <div class="canvas-wrapper">--}}
{{--                            <canvas class="main-chart" id="bar-chart" height="354" width="1064" style="width: 1064px; height: 354px;"></canvas>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div><!--/.row-->--}}


{{--</div>	<!--/.main-->--}}
{{--<div class="col-lg-2 forFullWid">--}}
{{--    <div class="topSell">--}}
{{--        <h6>top selling</h6>--}}
{{--        <div class="TopItem">--}}
{{--            <img src="img/user.png" alt="">--}}
{{--            <small>amal essa</small>--}}
{{--            <span>300$</span>--}}
{{--        </div>--}}
{{--        <div class="TopItem">--}}
{{--            <img src="img/user.png" alt="">--}}
{{--            <small>amal essa</small>--}}
{{--            <span>300$</span>--}}
{{--        </div>--}}
{{--        <div class="TopItem">--}}
{{--            <img src="img/user.png" alt="">--}}
{{--            <small>amal essa</small>--}}
{{--            <span>300$</span>--}}
{{--        </div>--}}
{{--        <div class="TopItem">--}}
{{--            <img src="img/user.png" alt="">--}}
{{--            <small>amal essa</small>--}}
{{--            <span>300$</span>--}}
{{--        </div>--}}
{{--        <h6>popular categories</h6>--}}
{{--        <div class="doughnut">--}}
{{--            <canvas class="chart" id="doughnut-chart" height="251" width="502" style="width: 502px; height: 251px;"></canvas>--}}
{{--            <div class="chartLabels">--}}
{{--                <label for="" class="bl">shoes <span>v0</span> </label>--}}
{{--                <label for="" class="sma">mobile <span>0v</span> </label>--}}
{{--                <label for="" class="org">bags <span>0v</span> </label>--}}
{{--                <label for="" class="bro">shirts <span>0v</span> </label>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}
<script src="{{asset('dashboard/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/chart.min.js')}}"></script>
<script src="{{asset('dashboard/js/chart-data.js')}}"></script>
<script src="{{asset('dashboard/js/easypiechart.js')}}"></script>
<script src="{{asset('dashboard/js/easypiechart-data.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('dashboard/js/custom.js')}}"></script>
@yield('scripts')

{{--<script>--}}
{{--    window.onload = function () {--}}
{{--        var chart1 = document.getElementById("line-chart").getContext("2d");--}}
{{--        window.myLine = new Chart(chart1).Line(lineChartData, {--}}
{{--            responsive: true,--}}
{{--            scaleLineColor: "rgba(0,0,0,.2)",--}}
{{--            scaleGridLineColor: "rgba(0,0,0,.05)",--}}
{{--            scaleFontColor: "#c5c7cc"--}}
{{--        });--}}
{{--        var chart2 = document.getElementById("bar-chart").getContext("2d");--}}
{{--        window.myBar = new Chart(chart2).Bar(barChartData, {--}}
{{--            responsive: true,--}}
{{--            scaleLineColor: "rgba(0,0,0,.2)",--}}
{{--            scaleGridLineColor: "rgba(0,0,0,.05)",--}}
{{--            scaleFontColor: "#c5c7cc"--}}
{{--        });--}}
{{--        var chart3 = document.getElementById("doughnut-chart").getContext("2d");--}}
{{--        window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {--}}
{{--            responsive: true,--}}
{{--            segmentShowStroke: true--}}
{{--        });--}}
{{--        var chart4 = document.getElementById("pie-chart").getContext("2d");--}}
{{--        window.myPie = new Chart(chart4).Pie(pieData, {--}}
{{--            responsive: true,--}}
{{--            segmentShowStroke: false--}}
{{--        });--}}
{{--        var chart5 = document.getElementById("radar-chart").getContext("2d");--}}
{{--        window.myRadarChart = new Chart(chart5).Radar(radarData, {--}}
{{--            responsive: true,--}}
{{--            scaleLineColor: "rgba(0,0,0,.05)",--}}
{{--            angleLineColor: "rgba(0,0,0,.2)"--}}
{{--        });--}}
{{--        var chart6 = document.getElementById("polar-area-chart").getContext("2d");--}}
{{--        window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {--}}
{{--            responsive: true,--}}
{{--            scaleLineColor: "rgba(0,0,0,.2)",--}}
{{--            segmentShowStroke: false--}}
{{--        });--}}
{{--    };--}}

{{--</script>--}}


@stack('scripts')
</body>
</html>