@component('dashboard::components.table-box')
    @slot('title', $title ?? trans('offers.plural'))
    @slot('tools')
        @if(isset($target) && ! $target->availableOffer)
            @include('dashboard.offers.partials.actions.create')
        @elseif(! isset($target))
            @include('dashboard.offers.partials.actions.create', ['target' => request('target_type')])
        @endif
    @endslot

    <thead>
    <tr>
        <th>@lang('offers.attributes.name')</th>
        <th class="d-none d-md-table-cell">@lang('offers.attributes.discount_value')</th>
        <th class="d-none d-md-table-cell">@lang('offers.attributes.discount_type')</th>
        <th class="d-none d-md-table-cell">@lang('offers.attributes.from')</th>
        <th class="d-none d-md-table-cell">@lang('offers.attributes.to')</th>
        <th style="width: 160px">...</th>
    </tr>
    </thead>
    <tbody>
    @forelse($offers as $offer)
        <tr>
            <td>
                {{ $offer->name }}
            </td>
            <td>
                {{ $offer->percent }} {{ $offer->discount_type=="percentage" ? $offer->percent.'%' : price($offer->percent) }}
            </td>
            <td>
                {{ $offer->discount_type=="percentage" ? __('offers.attributes.percentage') : __('offers.attributes.price') }}
            </td>
            <td>
                {{ $offer->from->toDateString() }}
            </td>
            <td>
                {{ $offer->to->toDateString() }}
            </td>

            <td style="width: 160px">
                @include('dashboard.offers.partials.actions.show')
                @include('dashboard.offers.partials.actions.edit')
                @include('dashboard.offers.partials.actions.delete')
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="100" class="text-center">@lang('offers.empty')</td>
        </tr>
    @endforelse

    @if(method_exists($offers, 'hasPages') && $offers->hasPages())
        @slot('footer')
            {{ $offers->links() }}
        @endslot
    @endif
@endcomponent
