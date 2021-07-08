@can('create', \App\Models\Governorate::class)
    <a href="{{ route('dashboard.governorates.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('governorates.actions.create')
    </a>
@endcan
