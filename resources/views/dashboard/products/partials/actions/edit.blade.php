@can('update', $product)
    <a href="{{ route('dashboard.products.edit', $product) }}" class="btn btn-outline-primary btn-sm">
        <i class="fas fa fa-fw fa-edit"></i>
    </a>
@endcan
