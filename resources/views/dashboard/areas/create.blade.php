{{ BsForm::resource('areas')->post(route('dashboard.governorates.areas.store', $governorate)) }}
@component('dashboard::components.box')
    @slot('title', trans('areas.actions.create'))

    @include('dashboard.areas.partials.form', ['governorateId' => $governorateId ?? null])

    @slot('footer')
        {{ BsForm::submit()->label(trans('areas.actions.save')) }}
    @endslot
@endcomponent
{{ BsForm::close() }}
