{{--<x-layout :title="trans('dashboard.home')" :breadcrumbs="['dashboard.home']">--}}

{{--    <div class="row">--}}
{{--        <div class="col-md-6 col-lg-4">--}}
{{--            <div class="widget-small primary coloured-icon"><i class="icon fas fa-users fa-3x"></i>--}}
{{--                <div class="info">--}}
{{--                    <h4>@lang('customers.count')</h4>--}}
{{--                    <p><b><a href="{{ route('dashboard.customers.index') }}">{{ number_format($customersCount) }}</a></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-4">--}}
{{--            <div class="widget-small info coloured-icon"><i class="icon fas fa-flag fa-3x"></i>--}}
{{--                <div class="info">--}}
{{--                    <h4>@lang('categories.count')</h4>--}}
{{--                    <p><b><a href="{{ route('dashboard.categories.index') }}">{{ number_format($categoriesCount) }}</a></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-4">--}}
{{--            <div class="widget-small primary coloured-icon"><i class="icon fa fa-shopping-cart fa-3x"></i>--}}
{{--                <div class="info">--}}
{{--                    <h4>@lang('products.count')</h4>--}}
{{--                    <p><b><a href="{{ route('dashboard.products.index') }}">{{ number_format($productsCount) }}</a></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-12">--}}
{{--            <h5 class="mb-4">@lang('orders.statistics')</h5>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-4">--}}
{{--            <div class="widget-small warning coloured-icon"><i class="icon fas fa-cogs fa-3x"></i>--}}
{{--                <div class="info">--}}
{{--                    <h4>@lang('orders.statuses.'. $status = \App\Models\Order::PENDING)</h4>--}}
{{--                    <p><b><a href="{{ route('dashboard.orders.index', ['status' => $status]) }}">{{ number_format($pendingCount) }}</a></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-4">--}}
{{--            <div class="widget-small primary coloured-icon"><i class="icon fas fa-refresh fa-3x"></i>--}}
{{--                <div class="info">--}}
{{--                    <h4>@lang('orders.statuses.'. $status = \App\Models\Order::IN_PROGRESS)</h4>--}}
{{--                    <p><b><a href="{{ route('dashboard.orders.index', ['status' => $status]) }}">{{ number_format($inProgressCount) }}</a></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-4">--}}
{{--            <div class="widget-small danger coloured-icon"><i class="icon fas fa-times fa-3x"></i>--}}
{{--                <div class="info">--}}
{{--                    <h4>@lang('orders.statuses.'. $status = \App\Models\Order::REJECTED)</h4>--}}
{{--                    <p><b><a href="{{ route('dashboard.orders.index', ['status' => $status]) }}">{{ number_format($rejectedCount) }}</a></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-4">--}}
{{--            <div class="widget-small danger coloured-icon"><i class="icon fas fa-times fa-3x"></i>--}}
{{--                <div class="info">--}}
{{--                    <h4>@lang('orders.statuses.'. $status = \App\Models\Order::CANCELED)</h4>--}}
{{--                    <p><b><a href="{{ route('dashboard.orders.index', ['status' => $status]) }}">{{ number_format($canceledCount) }}</a></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-4">--}}
{{--            <div class="widget-small primary coloured-icon"><i class="icon fas fa-check fa-3x"></i>--}}
{{--                <div class="info">--}}
{{--                    <h4>@lang('orders.statuses.'. $status = \App\Models\Order::DELIVERED)</h4>--}}
{{--                    <p><b><a href="{{ route('dashboard.orders.index', ['status' => $status]) }}">{{ number_format($deliveredCount) }}</a></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 col-lg-4">--}}
{{--            <div class="widget-small primary coloured-icon"><i class="icon fas fa-money fa-3x"></i>--}}
{{--                <div class="info">--}}
{{--                    <h4>@lang('orders.earnings')</h4>--}}
{{--                    <p><b><a href="{{ route('dashboard.orders.index', ['status' => $status]) }}">{{ price($earnings) }}</a></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- Pending orders -->--}}
{{--    @component('dashboard::components.table-box')--}}
{{--        @slot('title', trans('orders.actions.pending'))--}}

{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>@lang('orders.attributes.id')</th>--}}
{{--            <th>@lang('orders.attributes.recieve_type')</th>--}}
{{--            <th>@lang('locations.singular')</th>--}}
{{--            <th>@lang('orders.attributes.shipping_price')</th>--}}
{{--            <th>@lang('orders.attributes.total')</th>--}}
{{--            <th>@lang('orders.attributes.opened_at')</th>--}}
{{--            <th style="width: 160px">...</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @forelse($orders as $order)--}}
{{--            <tr @if($order->status=='pending') style="background: #f5e3b5" @endif>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('dashboard.orders.show', $order) }}"--}}
{{--                       class="text-decoration-none text-ellipsis">--}}
{{--                        #{{ $order->id }}--}}
{{--                    </a>--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @if($order->pickup!="") --}}
{{--                        @lang('orders.attributes.pickup')--}}
{{--                    @else--}}
{{--                        @lang('orders.attributes.delivery')--}}
{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @if($order->pickup=="")--}}
{{--                        {{ $order->address }}--}}
{{--                    @else--}}
{{--                        {{ $order->location->name ?? ''}}--}}
{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>{{ price($order->shipping_price) }}</td>--}}
{{--                <td>{{ price($order->total) }}</td>--}}
{{--                <td>{{ $order->opened_at }}</td>--}}

{{--                <td style="width: 160px">--}}
{{--                    @include('dashboard.orders.partials.actions.show')--}}
{{--                    @include('dashboard.orders.partials.actions.edit')--}}
{{--                    @include('dashboard.orders.partials.actions.delete')--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="100" class="text-center">@lang('orders.empty')</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}
{{--        @if($orders->count()>0)--}}
{{--        <tr style="background: silver">--}}
{{--            <td colspan="4" class="text-center">@lang('orders.attributes.total')</td>--}}
{{--            <td>{{ price($orders->sum('total')) }}</td>--}}
{{--            <td></td>--}}
{{--            <td></td>--}}
{{--        </tr>--}}
{{--        @endif--}}

{{--        @if($orders->hasPages())--}}
{{--            @slot('footer')--}}
{{--                {{ $orders->links() }}--}}
{{--            @endslot--}}
{{--        @endif--}}
{{--    @endcomponent--}}

{{--<!--div style="width: ">--}}
{{--    {!! $ordersChart->container() !!}--}}
{{--</div-->--}}
{{--<!--canvas id="myChart"></canvas-->--}}

{{--<div class="container">--}}
{{--    <h3>@lang('orders.orders_week_report')</h3>--}}
{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <div class="card rounded">--}}
{{--                <div class="card-body py-3 px-3">--}}
{{--                    {!! $ordersChart->container() !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{-- ChartScript --}}
{{--@if($ordersChart)--}}
{{--{!! $ordersChart->script() !!}--}}
{{--@endif--}}

{{--</x-layout>--}}
@extends('layouts.vali.master')
@section('title')
    @lang('products.plural')
@endsection
@section('content')

    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> @lang('dashboard.home')</h1>
{{--                <ul class="pull-right ovUl">--}}
{{--                    <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#"--}}
{{--                                            aria-expanded="false">--}}
{{--                            <span>today <i class="fa fa-chevron-down"></i> </span>--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                            <li>--}}
{{--                                <ul class="dropdown-settings">--}}
{{--                                    <li><a href="#">--}}
{{--                                            <em class="fa fa-cog"></em> Settings 1--}}
{{--                                        </a></li>--}}
{{--                                    <li class="divider"></li>--}}
{{--                                    <li><a href="#">--}}
{{--                                            <em class="fa fa-cog"></em> Settings 2--}}
{{--                                        </a></li>--}}
{{--                                    <li class="divider"></li>--}}
{{--                                    <li><a href="#">--}}
{{--                                            <em class="fa fa-cog"></em> Settings 3--}}
{{--                                        </a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </div>
        </div><!--/.row-->

        <div class="panel panel-container">
            <div class="row">
                <div class="col-xs-6 col-md-3 col-lg-3 padR0">
                    <div class="panel panel-teal panel-widget border-right">
                        <div class="row no-padding">
                            <div class="text-muted">@lang('shipping_companies.plural')</div>
                            <div class="large">{{\App\Models\ShippingPrice::count()}}$ <span class="spanP"></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 padR0">
                    <div class="panel panel-blue panel-widget border-right">
                        <div class="row no-padding">
                            <div class="text-muted">@lang('orders.plural')</div>
                            <div class="large">{{\App\Models\Order::count()}}$ <span class="spanM"></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 padR0">
                    <div class="panel panel-orange panel-widget border-right">
                        <div class="row no-padding">
                            <div class="text-muted">@lang('customers.plural')</div>
                            <div class="large">{{\App\Models\Customer::count()}}$ <span class="spanP"></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 col-lg-3 padR0">
                    <div class="panel panel-red panel-widget ">
                        <div class="row no-padding">
                            <div class="text-muted">@lang('countries.plural')</div>
                            <div class="large">{{\App\Models\Country::count()}}$ <span class="spanP"></span></div>
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
        <div class="row">
            <div class="col-md-7 chartL">
                <div class="adProDiv">
                    <div class="col-md-6">
                        <div class="col-md-12 bludModalDiv">
                            <button type="button" class=""><a href="{{route('dashboard.products.create')}}"><i
                                            class="fa fa-plus-circle"></i></a> <a
                                        href="{{route('dashboard.products.create')}}">@lang('site.add') @lang('products.plural')</a>
                            </button>
                            <div id="addPro" class="modal fade" role="dialog" style="display: none;">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    {{--                                    <div class="modal-content">--}}
                                    {{--                                        <div class="modal-header">--}}
                                    {{--                                            <button type="button" class="close" data-dismiss="modal">×</button>--}}
                                    {{--                                            <h4 class="modal-title">Modal Header</h4>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="modal-body">--}}
                                    {{--                                            <p>Some text in the modal.</p>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="modal-footer">--}}
                                    {{--                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-xs-12 col-md-12 col-lg-12 padR0">
                            <div class="panel panel-blue panel-widget border-right">
                                <div class="row no-padding">
                                    <div class="text-muted">@lang('products.plural')</div>
                                    <div class="large">{{\App\Models\Product::count()}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12 col-lg-12 padR0">
                            <div class="panel panel-blue panel-widget border-right">
                                <div class="row no-padding">
                                    <div class="text-muted">@lang('categories.plural') </div>
                                    <div class="large">{{\App\Models\Category::count()}} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class=" clickable panel-toggle panel-button-tab-left"><em
                                    class="fa fa-toggle-up"></em></span> <small>sales</small>
                        <ul class="pull-right panel-settings panel-button-tab-right">
                            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span>months <i class="fa fa-chevron-down"></i> </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <ul class="dropdown-settings">
                                            <li><a href="#">
                                                    <em class="fa fa-cog"></em> Settings 1
                                                </a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">
                                                    <em class="fa fa-cog"></em> Settings 2
                                                </a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">
                                                    <em class="fa fa-cog"></em> Settings 3
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="line-chart" height="196" width="588"
                                    style="width: 471px; height: 157px;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default bgW">
                    <div class="panel-heading">
                        <span class=" clickable panel-toggle panel-button-tab-left"><em
                                    class="fa fa-toggle-up"></em></span> <small>@lang('site.active') @lang('site.users')</small>

                        <div class="ppR">
                            <ul class="pull-right panel-settings panel-button-tab-right">
                                <li class="dropdown">
                                    <a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#"
                                       aria-expanded="false">
                                        <span>today <i class="fa fa-chevron-down"></i> </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <ul class="dropdown-settings">
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Settings 1
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Settings 2
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Settings 3
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="p500"><em class="fa fa-user"></em> <span> {{\App\Models\User::count()}}</span></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12 no-padding">
                            <div class="row progress-labels">
                                <div class="col-sm-6">registered users</div>
                                <div class="col-sm-6" style="text-align: right;">800</div>
                            </div>
                            <div class="progress">
                                <div data-percentage="0%" style="width: 80%;" class="progress-bar progress-bar-blue"
                                     role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row progress-labels">
                                <div class="col-sm-6">users</div>
                                <div class="col-sm-6" style="text-align: right;">1000</div>
                            </div>
                            <div class="progress">
                                <div data-percentage="0%" style="width: 60%;" class="progress-bar progress-bar-blue"
                                     role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 tableR">
                <div class="col-12 no-padding recOrd">
                    <h6 class="reOH">@lang('orders.plural')</h6>
                    <table>
                        <thead>
                        <tr>
                            <th>@lang('site.date')</th>
                            <th>@lang('orders.plural')</th>
                            <th>@lang('customers.plural')</th>
                            <th>@lang('site.status')</th>
                            <th>@lang('site.total')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Models\Order::latest()->paginate(5) as $value)
                            <tr>
                                <td>{{ $value->created_at->diffForHumans() ?? '' }}</td>
                                <td>{{$value->id ?? ''}}</td>
                                <td>{{$value->customer->name ?? ''}}</td>
                                <td class="com"><span class="fa fa-circle"></span>{{$value->status}}</td>
                                <td>{{$value->total}}$</td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan="5">
                                <a class="pull-right seeAll" href="{{route('dashboard.orders.index')}}">
                                    <span>
                                        @lang('site.see all')
                                    </span>
                                </a>

                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>
                <div class="col-12 no-padding">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class=" clickable panel-toggle panel-button-tab-left"><em
                                        class="fa fa-toggle-up"></em></span> <small>weekly orders</small>
                            <ul class="pull-right panel-settings panel-button-tab-right">
                                <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown"
                                                        href="#" aria-expanded="false">
                                        <span>this week <i class="fa fa-chevron-down"></i> </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <ul class="dropdown-settings">
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Settings 1
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Settings 2
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Settings 3
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="canvas-wrapper">
                                <canvas class="main-chart" id="bar-chart" height="136" width="410"
                                        style="width: 328px; height: 109px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->


    </div>


    <div class="col-lg-2 forFullWid">
        <div class="topSell">
            <h6>top selling</h6>
            @foreach(\App\Models\Customer::paginate(4) as $customer)
            <div class="TopItem">
                <img src="{{ $customer->getAvatar() }}" alt="" width="20px" height="20px" class="img-circle img-size-20 mr-2">
                <small><a href="{{route('dashboard.customers.show',$customer->id)}}">
                    {{$customer->name ?? ''}}
                    </a></small>

            </div>
            @endforeach
            <h6>@lang('site.categories')</h6>
            <div class="doughnut">
                <canvas class="chart" id="doughnut-chart" height="683" width="1367"
                        style="width: 1094px; height: 547px;"></canvas>
                <div class="chartLabels">
                    @foreach(\App\Models\Category::paginate(4) as $catogery)
                    <label for="" class="bl"> <span>v0</span> {{$catogery->name ?? ''}}</label>

                    @endforeach
                </div>
            </div>

        </div>
    </div>






@endsection

@section('scripts')

    <script>
        window.onload = function () {
            var chart1 = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
            var chart2 = document.getElementById("bar-chart").getContext("2d");
            window.myBar = new Chart(chart2).Bar(barChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
            var chart3 = document.getElementById("doughnut-chart").getContext("2d");
            window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
                responsive: true,
                segmentShowStroke: true
            });
            var chart4 = document.getElementById("pie-chart").getContext("2d");
            window.myPie = new Chart(chart4).Pie(pieData, {
                responsive: true,
                segmentShowStroke: false
            });
            var chart5 = document.getElementById("radar-chart").getContext("2d");
            window.myRadarChart = new Chart(chart5).Radar(radarData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.05)",
                angleLineColor: "rgba(0,0,0,.2)"
            });
            var chart6 = document.getElementById("polar-area-chart").getContext("2d");
            window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                segmentShowStroke: false
            });
        };

    </script>



@endsection