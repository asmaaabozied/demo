@can('create', \App\Models\Offer::class)
    @if(is_object($target) && method_exists($target, 'getMorphClass'))
        <a href="{{ route('dashboard.offers.create', ['target_type' => $target->getMorphClass(), 'target_id' => $target->id]) }}"
           class="btn btn-outline-success btn-sm">
            <i class="fas fa fa-fw fa-plus"></i>
            @lang('offers.actions.create')
        </a>
    @else
        <a href="{{ route('dashboard.offers.create', ['target_type' => $target]) }}"
           class="btn btn-outline-success btn-sm">
            <i class="fas fa fa-fw fa-plus"></i>
            @lang('offers.actions.create')
        </a>
    @endif
@endcan
