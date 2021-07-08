<x-layout :title="$home_offer->name" :breadcrumbs="['dashboard.categories.show', $home_offer]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('home_offers.attributes.name')</th>
                        <td>{{ $home_offer->name }}</td>
                    </tr>

                    <tr>
                        <th width="200">@lang('front.order')</th>
                        <td>{{ $home_offer->order }}</td>
                    </tr>

                    <tr>
                        <th width="200">@lang('home_offers.attributes.description')</th>
                        <td>{!! $home_offer->description !!}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('home_offers.attributes.country_id')</th>
                        <td>
                            <a href="{{ route('dashboard.countries.show', $home_offer->country) }}"
                               class="text-decoration-none text-ellipsis">
                                {{ $home_offer->country->name }}
                            </a>
                        </td>
                    </tr>
                    @if($image = $home_offer->getFirstMediaUrl())
                        <tr>
                            <th width="200">@lang('home_offers.attributes.image')</th>
                            <td>
                                <img src="{{ $image }}"
                                     class="img img-size-64 mw-100"
                                     alt="{{ $home_offer->name }}">
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.home_offers.partials.actions.edit')
                    @include('dashboard.home_offers.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
