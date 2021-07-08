@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs
{{ BsForm::price('shipping_price')->currency($governorate->currency) }}

@isset($governorateId)
    <input type="hidden" name="governorate_id" value="{{ $governorateId }}">
@else
    <input type="hidden" name="governorate_id" value="{{ $governorate->id }}">
@endisset


