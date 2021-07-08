@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs
{{ Form::hidden('target_type', request('target_type')) }}
{{ Form::hidden('target_id', request('target_id')) }}

<div class="form-group">
    <label>@lang('offers.attributes.discount_type')</label>
    <select class="form-control" name="discount_type" value="{{ $offer->discount_type ?? old('discount_type') }}" required>
        <option value="percentage">@lang('offers.attributes.percentage')</option>
        <option value="price">@lang('offers.attributes.price')</option>
    </select>
</div>

<div class="form-group">
    <label>@lang('offers.attributes.discount_value')</label>
    <input type="number" class="form-control" name="percent" value="{{ $offer->percent ?? old('percent') }}" required>
</div>

{{ BsForm::date('from', $offer->from ?? null) }}
{{ BsForm::date('to', $offer->to ?? null) }}

@if(! request('target_id'))
    @switch(request('target_type'))
        @case(\App\Models\Product::class)
        <select2
                name="target_id"
                label="@lang('products.singular')"
                placeholder="@lang('products.select')"
                remote-url="{{ route('products.select') }}"
                value="{{ $target->target_id ?? old('target_id') }}"
        ></select2>
        @break
        @case(\App\Models\Category::class)
        <select2
                name="target_id"
                label="@lang('categories.singular')"
                placeholder="@lang('categories.select')"
                remote-url="{{ route('categories.select') }}"
                value="{{ $target->target_id ?? old('target_id') }}"
        ></select2>
        @break
        @case(\App\Models\Brand::class)
        <select2
                name="target_id"
                label="@lang('brands.singular')"
                placeholder="@lang('brands.select')"
                remote-url="{{ route('brands.select') }}"
                value="{{ $target->target_id ?? old('target_id') }}"
        ></select2>
        @break
    @endswitch
@endif
