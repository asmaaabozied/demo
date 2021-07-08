@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\ShippingPrice::class])
    @slot('url', route('dashboard.shipping_prices.index'))
    @slot('name', trans('shipping_prices.plural'))
    @slot('active', request()->routeIs('*shipping_prices*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('shipping_prices.actions.list'),
            'url' => route('dashboard.shipping_prices.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\ShippingPrice::class],
            'active' => request()->routeIs('*shipping_prices.index')
            || request()->routeIs('*shipping_prices.show')
            || request()->routeIs('*shipping_prices.cities*'),
        ],
        [
            'name' => trans('shipping_prices.actions.create'),
            'url' => route('dashboard.shipping_prices.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\ShippingPrice::class],
            'active' => request()->routeIs('*shipping_prices.create'),
        ],
    ])
@endcomponent
