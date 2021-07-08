@include('dashboard.errors')
@bsMultilangualFormTabs
<select2
        name="country_id"
        label="@lang('countries.singular')"
        placeholder="@lang('countries.select')"
        remote-url="{{ route('countries.select') }}"
        value="{{ $category->country_id ?? old('country_id') ?? country()->id }}"
></select2>
{{ BsForm::text('name') }}
{{ BsForm::text('symbol') }}
@endBsMultilangualFormTabs
{{ BsForm::text('code') }}
{{ BsForm::radio('is_default') }}

