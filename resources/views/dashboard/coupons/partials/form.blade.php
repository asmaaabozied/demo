@include('dashboard.errors')

@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs
{{ BsForm::text('code') }}

<div class="form-group">
    <label>@lang('offers.attributes.discount_type')</label>
    <select class="form-control" name="discount_type" value="{{ $offer->discount_type ?? old('discount_type') }}" required>
        <option value="percentage">@lang('offers.attributes.percentage')</option>
        <option value="price">@lang('offers.attributes.price')</option>
    </select>
</div>

<div class="form-group">
    <label>@lang('offers.attributes.discount_value')</label>
    <input type="number" class="form-control" name="value" value="{{ $offer->value ?? old('value') }}" required>
</div>

{{ BsForm::price('min_total')->currency(currency()->symbol) }}
{{ BsForm::number('usage_count')->min(1) }}
{{ BsForm::number('usage_per_user')->min(1) }}
