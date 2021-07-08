@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Offer::class])
    @slot('url', '#')
    @slot('name', trans('offers.plural'))
    @slot('active', request()->routeIs('*offers*'))
    @slot('icon', 'fas fa-tags')
    @slot('tree', [
        [
            'name' => trans('offers.products'),
            'url' => route('dashboard.offers.index', ['target_type' => $type = \App\Models\Product::class]),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Offer::class],
            'active' => request()->routeIs('*offers.index')
            && request('target_type') == $type,
        ],
        [
            'name' => trans('offers.categories'),
            'url' => route('dashboard.offers.index', ['target_type' => $type = \App\Models\Category::class]),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Offer::class],
            'active' => request()->routeIs('*offers.index')
            && request('target_type') == $type,
        ],
    ])
@endcomponent
