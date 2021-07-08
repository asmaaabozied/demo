@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs

<table class="table table-bordered align-items-center table-sm">
    <thead class="thead-light">
    <tr>
        <th>{{ trans('shipping_prices.attributes.country_id') }}</th>
        <th>{{ trans('shipping_prices.attributes.first_price') }}</th>
        <th>{{ trans('shipping_prices.attributes.second_price') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Models\Country::whereNull('is_default')->get() as $country)
        @php
            if (isset($shipping_company)) {
                $firstPrice = optional($shipping_company->prices()->where('country_id', $country->id)->first())->first_price;
                $secondPrice = optional($shipping_company->prices()->where('country_id', $country->id)->first())->second_price;
            }
            $firstPrice = $firstPrice ?? data_get(old($country->id), 'first_price');
            $secondPrice = $secondPrice ?? data_get(old($country->id), 'second_price');
        @endphp
        <tr>
            <td>
                <img src="{{ $country->getFirstMediaUrl('flags') }}"
                     class="img-circle mr-2" style="height: 22px; width: 22px;">
                {{ $country->name }}
                <input type="hidden" name="prices[{{ $country->id }}][country_id]" value="{{ $country->id }}">
            </td>
            <td>
                <input type="text"
                       name="prices[{{ $country->id }}][first_price]"
                       value="{{ $firstPrice }}"
                       class="form-control">
            </td>
            <td>
                <input type="text"
                       name="prices[{{ $country->id }}][second_price]"
                       value="{{ $secondPrice }}"
                       class="form-control">
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@isset($shipping_company)
    {{ BsForm::image('image')->files($shipping_company->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endisset

