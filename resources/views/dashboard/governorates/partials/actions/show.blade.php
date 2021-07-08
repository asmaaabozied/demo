@can('view', $governorate)
    <a href="{{ route('dashboard.governorates.show', $governorate) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
