{{--@component('dashboard::components.sidebarItem')--}}
{{--    @slot('url', route('dashboard.home'))--}}
{{--    @slot('name', trans('dashboard.home'))--}}
{{--    @slot('icon', 'fas fa-tachometer-alt')--}}
{{--    @slot('active', request()->routeIs('dashboard.home'))--}}
{{--@endcomponent--}}

{{-- @include('dashboard.countries.partials.actions.sidebar') --}}
{{-- @include('dashboard.shipping_companies.partials.actions.sidebar') --}}
{{-- @include('dashboard.currencies.partials.actions.sidebar') --}}
{{--@include('dashboard.governorates.partials.actions.sidebar')--}}
{{--@include('dashboard.locations.partials.actions.sidebar')--}}
{{--@include('dashboard.accounts.sidebar')--}}
{{-- @include('dashboard.brands.partials.actions.sidebar') --}}
{{--@include('dashboard.categories.partials.actions.sidebar')--}}
{{-- @include('dashboard.classifications.partials.actions.sidebar') --}}
{{-- @include('dashboard.sliders.partials.actions.sidebar') --}}
{{--@include('dashboard.products.partials.actions.sidebar')--}}
{{--@include('dashboard.offers.partials.actions.sidebar')--}}
{{-- @include('dashboard.collections.partials.actions.sidebar') --}}
{{-- @include('dashboard.testers.partials.actions.sidebar') --}}
{{--@include('dashboard.coupons.partials.actions.sidebar')--}}
{{--@include('dashboard.orders.partials.actions.sidebar')--}}

{{--@include('dashboard.producttypes.sidebar')--}}

{{--@include('dashboard.attributeproducts.sidebar')--}}


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li class="active"><a href="{{route('dashboard.home')}}"><i class="fa fa-home" aria-hidden="true"></i>
                @lang('dashboard.home')</a></li>
        <h5>@lang('site.management')</h5>
        <li class="active"><a href="{{route('dashboard.orders.index')}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                @lang('orders.plural')</a></li>

        <li><a href="{{route('dashboard.sizes.index')}}"><i class="fa fa-line-chart" aria-hidden="true"></i>
                @lang('sizes.plural')</a></li>

        <li><a href="{{route('dashboard.categories.index')}}"><i class="fa fa-th" aria-hidden="true"></i>
                @lang('categories.plural')</a></li>
        <li><a href="{{route('dashboard.customers.index')}}"><i class="fa fa-users" aria-hidden="true"></i>
                @lang('customers.plural')</a></li>


        <li><a href="{{route('dashboard.countries.index')}}"><i class="fa fa-globe" aria-hidden="true"></i>
                @lang('countries.plural')</a></li>


        <li><a href="{{route('dashboard.locations.index')}}"><i class="fa fa-gg-circle" aria-hidden="true"></i>
                @lang('locations.plural')</a></li>

        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>  @lang('products.plural') <span data-toggle="collapse"
                      href="#sub-item-1" class="icon pull-right"><em  class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="{{route('dashboard.products.index')}}">
                        @lang('products.plural')
                    </a></li>
                <li><a class="" href="{{route('dashboard.producttypes.index')}}">
                        @lang('product_types.plural')
                    </a></li>
                <li><a class="" href="{{route('dashboard.brands.index')}}">
                        @lang('brands.plural')
                    </a></li>

                <li><a class="" href="{{route('dashboard.attributeproducts.index')}}">
                        @lang('products_attribute.plural')
                    </a></li>

            </ul>
        </li>
        <li><a href="{{route('dashboard.shipping_prices.index')}}"><i class="fa fa-truck" aria-hidden="true"></i>
                @lang('shipping_companies.plural')</a></li>
        <li><a href="{{route('dashboard.pages.index')}}"><i class="fa fa-file-o" aria-hidden="true"></i>
                @lang('pages.plural')</a></li>
        <h5>@lang('site.analytics')</h5>
        <li><a href="{{route('dashboard.orders.index')}}"><i class="fa fa-line-chart" aria-hidden="true"></i>
                @lang('site.sales report')</a></li>
{{--        <li><a href=""><i class="fa fa-user-circle-o" aria-hidden="true"></i>--}}
{{--                account</a></li>--}}
        <li><a href="{{route('dashboard.admins.index')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                @lang('admins.plural')</a></li>
        <li><a href="{{route('dashboard.settings.index')}}"><i class="fa fa-cog" aria-hidden="true"></i>
                @lang('site.settings')</a></li>
    </ul>
</div><!--/.sidebar-->





