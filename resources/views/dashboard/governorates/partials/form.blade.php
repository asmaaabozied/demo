@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
@endBsMultilangualFormTabs
@isset($governorate)
    {{ BsForm::image('flag')->collection('flags') }}
@else
    {{ BsForm::image('flag')->collection('flags') }}
@endisset

