@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\ShippingCompany::class])
    @slot('url', route('dashboard.shipping_companies.index'))
    @slot('name', trans('shipping_companies.plural'))
    @slot('active', request()->routeIs('*shipping_companies*'))
    @slot('icon', 'fas fa-truck')
    @slot('tree', [
        [
            'name' => trans('shipping_companies.actions.list'),
            'url' => route('dashboard.shipping_companies.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\ShippingCompany::class],
            'active' => request()->routeIs('*shipping_companies.index')
            || request()->routeIs('*shipping_companies.show')
            || request()->routeIs('*shipping_companies.cities*'),
        ],
        [
            'name' => trans('shipping_companies.actions.create'),
            'url' => route('dashboard.shipping_companies.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\ShippingCompany::class],
            'active' => request()->routeIs('*shipping_companies.create'),
        ],
    ])
@endcomponent
