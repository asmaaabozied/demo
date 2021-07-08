@can('update', $shipping_price)
    <a href="{{ route('dashboard.shipping_prices.edit', $shipping_price) }}" class="btn btn-outline-primary btn-sm">
        <i class="fas fa fa-fw fa-edit"></i>
    </a>
@endcan
