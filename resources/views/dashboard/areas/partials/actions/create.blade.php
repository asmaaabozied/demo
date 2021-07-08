@can('create', \App\Models\Area::class)
    <a href="{{ route('dashboard.areas.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('areas.actions.create')
    </a>
@endcan
