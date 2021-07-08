@component('dashboard::components.sidebarItem')
    @slot('url', route('dashboard.home'))
    @slot('name', trans('dashboard.home'))
    @slot('icon', 'fas fa-tachometer-alt')
    @slot('active', request()->routeIs('dashboard.home'))
@endcomponent

 @include('dashboard.countries.partials.actions.sidebar')
 @include('dashboard.shipping_companies.partials.actions.sidebar')
 @include('dashboard.currencies.partials.actions.sidebar')
@include('dashboard.governorates.partials.actions.sidebar')
@include('dashboard.locations.partials.actions.sidebar')
@include('dashboard.accounts.sidebar')
{{-- @include('dashboard.brands.partials.actions.sidebar')--}}
@include('dashboard.categories.partials.actions.sidebar')
{{-- @include('dashboard.classifications.partials.actions.sidebar')--}}
{{-- @include('dashboard.sliders.partials.actions.sidebar')--}}
@include('dashboard.products.partials.actions.sidebar')
@include('dashboard.offers.partials.actions.sidebar')
{{-- @include('dashboard.collections.partials.actions.sidebar')--}}
{{-- @include('dashboard.testers.partials.actions.sidebar')--}}
@include('dashboard.coupons.partials.actions.sidebar')
@include('dashboard.orders.partials.actions.sidebar')

@include('dashboard.producttypes.sidebar')

@include('dashboard.attributeproducts.sidebar')




{{--<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">--}}
{{--    <ul class="nav menu">--}}
{{--        <li class="active"><a href="index.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i>--}}
{{--                Dashboard</a></li>--}}
{{--        <h5>managment</h5>--}}
{{--        <li class="parent dBMob"><a data-toggle="collapse" href="#sub-item-1">--}}
{{--                <i class="fa fa-gg-circle" aria-hidden="true"></i> english <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>--}}
{{--            </a>--}}
{{--            <ul class="children collapse" id="sub-item-1">--}}
{{--                <li><a class="" href="#">--}}
{{--                        arabic--}}
{{--                    </a></li>--}}
{{--                <li><a class="" href="#">--}}
{{--                        french--}}
{{--                    </a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="parent dBMob"><a data-toggle="collapse" href="#sub-item-1">--}}
{{--                <i class="fa fa-gg-circle" aria-hidden="true"></i> john john <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>--}}
{{--            </a>--}}
{{--            <ul class="children collapse" id="sub-item-1">--}}
{{--                <li><a class="" href="#">setting</a></li>--}}
{{--                <li><a class="" href="#">setting</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href="{{route('dashboard.products.index')}}"><i class="fa fa-shopping-bag" aria-hidden="true"></i>--}}
{{--               @lang('products.plural')</a></li>--}}
{{--        <li><a href=""><i class="fa fa-th" aria-hidden="true"></i>--}}
{{--                category</a></li>--}}
{{--        <li><a href=""><i class="fa fa-users" aria-hidden="true"></i>--}}
{{--                customers</a></li>--}}
{{--        <li><a href=""><i class="fa fa-globe" aria-hidden="true"></i>--}}
{{--                country</a></li>--}}
{{--        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">--}}
{{--                <i class="fa fa-gg-circle" aria-hidden="true"></i> currency <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>--}}
{{--            </a>--}}
{{--            <ul class="children collapse" id="sub-item-1">--}}
{{--                <li><a class="" href="#">--}}
{{--                        dinar--}}
{{--                    </a></li>--}}
{{--                <li><a class="" href="#">--}}
{{--                        dollar--}}
{{--                    </a></li>--}}
{{--                <li><a class="" href="#">--}}
{{--                        ruby--}}
{{--                    </a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li><a href=""><i class="fa fa-truck" aria-hidden="true"></i>--}}
{{--                shipping</a></li>--}}
{{--        <li><a href=""><i class="fa fa-file-o" aria-hidden="true"></i>--}}
{{--                pages</a></li>--}}
{{--        <h5>analytics</h5>--}}
{{--        <li><a href=""><i class="fa fa-line-chart" aria-hidden="true"></i>--}}
{{--                sales report</a></li>--}}
{{--        <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i>--}}
{{--                account</a></li>--}}
{{--        <li><a href=""><i class="fa fa-cog" aria-hidden="true"></i>--}}
{{--                setting</a></li>--}}
{{--    </ul>--}}
{{--</div><!--/.sidebar-->--}}
