@can('view', $offer)
    <a href="{{ $offer->target->getDashboardUrl() }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
