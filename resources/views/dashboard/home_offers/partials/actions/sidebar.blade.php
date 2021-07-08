@component('dashboard::components.sidebarItem')
    @slot('', ['ability' => 'viewAny', 'model' => \App\Models\HomeOffer::class])
    @slot('url', route('dashboard.home-offers.index'))
    @slot('name', trans('home_offers.plural'))
    @slot('active', request()->routeIs('*home-offers*'))
    @slot('icon', 'fas fa-th')
    @slot('tree', [
        [
            'name' => trans('home_offers.actions.list'),
            'url' => route('dashboard.home-offers.index'),
            '' => ['ability' => 'viewAny', 'model' => \App\Models\HomeOffer::class],
            'active' => request()->routeIs('*home-offers.index')
            || request()->routeIs('*home-offers.show'),
        ],
        [
            'name' => trans('home_offers.actions.create'),
            'url' => route('dashboard.home-offers.create'),
            '' => ['ability' => 'create', 'model' => \App\Models\HomeOffer::class],
            'active' => request()->routeIs('*home-offers.create'),
        ],
    ])
@endcomponent
