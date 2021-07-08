@can('update', [$area, $governorate])
    <a href="{{ route('dashboard.governorates.areas.edit', [$governorate, $area]) }}" class="btn btn-outline-primary btn-sm">
        <i class="fas fa fa-fw fa-edit"></i>
    </a>
@endcan
