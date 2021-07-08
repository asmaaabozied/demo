@component('dashboard::components.sidebarItem')
{{--    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Producttype::class])--}}
    @slot('url', route('dashboard.producttypes.index'))
    @slot('name', trans('product_types.plural'))
    @slot('active', request()->routeIs('*producttypes*'))
    @slot('icon', 'fas fa-shopping-cart')
    @slot('tree', [
        [
            'name' => trans('product_types.actions.list'),
            'url' => route('dashboard.producttypes.index'),
            'active' => request()->routeIs('*producttypes.index')
            || request()->routeIs('*producttypes.show'),
        ],

        [
            'name' => trans('product_types.actions.create'),
            'url' => route('dashboard.producttypes.create'),
            'active' => request()->routeIs('*producttypes.create'),
        ],
    ])
@endcomponent
