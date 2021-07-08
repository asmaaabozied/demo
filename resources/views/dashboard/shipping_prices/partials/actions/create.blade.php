@can('create', \App\Models\ShippingPrice::class)
    <a href="{{ route('dashboard.shipping_prices.create') }}" class="btn btn-outline-success btn-sm">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('shipping_prices.actions.create')
    </a>
@endcan
