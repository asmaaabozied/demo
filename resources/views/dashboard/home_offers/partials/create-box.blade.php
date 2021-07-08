{{ BsForm::resource('home-offers')->post(route('dashboard.home-offers.store')) }}
@component('dashboard::components.box')
    @slot('title', $title ?? trans('home_offers.actions.create'))

    @include('dashboard.home_offers.partials.form')

    @slot('footer')
        {{ BsForm::submit()->label(trans('home_offers.actions.save')) }}
    @endslot
@endcomponent
{{ BsForm::close() }}
