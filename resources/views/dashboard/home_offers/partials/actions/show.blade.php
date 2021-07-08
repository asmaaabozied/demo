@can('view', $home_offer)
    <a href="{{ route('dashboard.home-offers.show', $home_offer) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
