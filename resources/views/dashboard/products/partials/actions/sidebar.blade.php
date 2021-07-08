@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Product::class])
    @slot('url', route('dashboard.products.index'))
    @slot('name', trans('products.plural'))
    @slot('active', request()->routeIs('*products*'))
    @slot('icon', 'fas fa-shopping-cart')
    @slot('tree', [
        [
            'name' => trans('products.actions.in_stock_list'),
            'url' => route('dashboard.products.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Product::class],
            'active' => request()->routeIs('*products.index')
            || request()->routeIs('*products.show'),
        ],
        [
            'name' => trans('products.actions.out_of_stock_list'),
            'url' => route('dashboard.products.index')."/?in_stock=false",
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Product::class],
            'active' => request()->routeIs('*products.index')
            || request()->routeIs('*products.show'),
        ],
        [
            'name' => trans('products.actions.create'),
            'url' => route('dashboard.products.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Product::class],
            'active' => request()->routeIs('*products.create'),
        ],
    ])
@endcomponent
