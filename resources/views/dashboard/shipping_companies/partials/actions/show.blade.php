@can('view', $shipping_company)
    <a href="{{ route('dashboard.shipping_companies.show', $shipping_company) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
