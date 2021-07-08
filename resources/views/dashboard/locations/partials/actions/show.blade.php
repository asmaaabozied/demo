@can('view', $location)
    <a href="{{ route('dashboard.locations.show', $location) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
