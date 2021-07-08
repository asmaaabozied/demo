@component('dashboard::components.sidebarItem')
{{--    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Producttype::class])--}}
    @slot('url', route('dashboard.attributeproducts.index'))
    @slot('name', trans('products_attribute.plural'))
    @slot('active', request()->routeIs('*attributeproducts*'))
    @slot('icon', 'fas fa-shopping-cart')
    @slot('tree', [
        [
            'name' => trans('products_attribute.actions.list'),
            'url' => route('dashboard.attributeproducts.index'),
            'active' => request()->routeIs('*attributeproducts.index')
            || request()->routeIs('*attributeproducts.show'),
        ],

        [
            'name' => trans('products_attribute.actions.create'),
            'url' => route('dashboard.attributeproducts.create'),
            'active' => request()->routeIs('*attributeproducts.create'),
        ],
    ])
@endcomponent
