@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Area::class])
    @slot('url', route('dashboard.areas.index'))
    @slot('name', trans('areas.plural'))
    @slot('routeActive', '*areas*')
    @slot('icon', 'fas fa-city')
    @slot('tree', [
        [
            'name' => trans('areas.actions.list'),
            'url' => route('dashboard.areas.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Area::class],
            'routeActive' => '*areas.index',
        ],
        [
            'name' => trans('areas.actions.create'),
            'url' => route('dashboard.areas.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Area::class],
            'routeActive' => '*areas.create',
        ],
    ])
@endcomponent
