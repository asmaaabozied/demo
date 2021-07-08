@include('dashboard.home_offers.partials.filter')

@component('dashboard::components.table-box')
    @slot('title', $title ?? trans('home_offers.actions.list'))
    @slot('tools')
        @if((isset($createButton) && $createButton) || ! isset($createButton))
            @include('dashboard.home_offers.partials.actions.create')
        @endif
    @endslot

    <thead>
    <tr>
        <th>@lang('home_offers.attributes.name')</th>
        <th class="d-none d-md-table-cell">@lang('home_offers.attributes.country_id')</th>
        <th style="width: 160px">...</th>
    </tr>
    </thead>
    <tbody>
    @forelse($home_offers as $home_offer)
        <tr>
            <td>
                <a href="{{ route('dashboard.home-offers.show', $home_offer) }}"
                   class="text-decoration-none text-ellipsis">
                    {{ $home_offer->name }}
                </a>
            </td>
            <td class="d-none d-md-table-cell">
                <a href="{{ route('dashboard.countries.show', $home_offer->country) }}"
                   class="text-decoration-none text-ellipsis">
                    {{ $home_offer->country->name }}
                </a>
            </td>

            <td style="width: 160px">
                @include('dashboard.home_offers.partials.actions.show')
                @include('dashboard.home_offers.partials.actions.edit')
                @include('dashboard.home_offers.partials.actions.delete')
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="100" class="text-center">@lang('home_offers.empty')</td>
        </tr>
    @endforelse

    @if($home_offers->hasPages())
        @slot('footer')
            {{ $home_offers->links() }}
        @endslot
    @endif
@endcomponent
