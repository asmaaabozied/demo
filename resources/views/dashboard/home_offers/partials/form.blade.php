@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
{{ BsForm::textarea('description')->attribute('class', 'form-control textarea') }}
{{ BsForm::textarea('meta_description')->rows(3) }}
{{ BsForm::text('meta_keywords')->attribute('class', 'form-control tags') }}
@endBsMultilangualFormTabs

<select2
        name="country_id"
        label="@lang('countries.singular')"
        placeholder="@lang('countries.select')"
        remote-url="{{ route('countries.select') }}"
        value="{{ $home_offer->country_id ?? old('country_id') ?? country()->id }}"
></select2>

<label>@lang('front.order')</label>
<select
        class="form-control"
        name="order"
        required
>
<option value="">@lang('front.select')</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>

@if(isset($home_offer) && ! isset($parentId))
    {{ BsForm::image('image')->files($home_offer->getMediaResource()) }}
@else
    {{ BsForm::image('image') }}
@endif

