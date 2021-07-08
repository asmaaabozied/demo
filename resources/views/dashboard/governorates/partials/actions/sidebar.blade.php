@component('dashboard::components.sidebarItem')
    @slot('can', ['ability' => 'viewAny', 'model' => \App\Models\Governorate::class])
    @slot('url', route('dashboard.governorates.index'))
    @slot('name', trans('governorates.plural'))
    @slot('active', request()->routeIs('*governorates*'))
    @slot('icon', 'fas fa-flag')
    @slot('tree', [
        [
            'name' => trans('governorates.actions.list'),
            'url' => route('dashboard.governorates.index'),
            'can' => ['ability' => 'viewAny', 'model' => \App\Models\Governorate::class],
            'active' => request()->routeIs('*governorates.index')
            || request()->routeIs('*governorates.show')
            || request()->routeIs('*governorates.cities*'),
        ],
        [
            'name' => trans('governorates.actions.create'),
            'url' => route('dashboard.governorates.create'),
            'can' => ['ability' => 'create', 'model' => \App\Models\Governorate::class],
            'active' => request()->routeIs('*governorates.create'),
        ],
    ])
@endcomponent
