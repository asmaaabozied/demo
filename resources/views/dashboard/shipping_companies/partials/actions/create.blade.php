@can('create', \App\Models\ShippingCompany::class)
    <a href="{{ route('dashboard.shipping_companies.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('shipping_companies.actions.create')
    </a>
@endcan
