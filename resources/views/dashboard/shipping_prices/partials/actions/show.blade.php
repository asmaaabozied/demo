@can('view', $shipping_price)
    <a href="{{ route('dashboard.shipping_prices.show', $shipping_price) }}" class="btn btn-outline-dark btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@endcan
