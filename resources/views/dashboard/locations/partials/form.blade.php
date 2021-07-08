@include('dashboard.errors')
@bsMultilangualFormTabs
{{ BsForm::text('name') }}
{{ BsForm::text('address') }}
@endBsMultilangualFormTabs
{{ BsForm::text('phone') }}
{{ BsForm::text('whatsapp') }}

@lang('locations.singular')


<input type="hidden" name="lat" id="lat" value="klklkl">
<input type="hidden" name="lng" id="lng" value="klkj">

<div id="map" style="width: 1000px; height: 500px"></div>

