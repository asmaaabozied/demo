<x-layout :title="$home_offer->name" :breadcrumbs="['dashboard.categories.edit', $home_offer]">
    {{ BsForm::resource('home-offers')->putModel($home_offer, route('dashboard.home-offers.update', $home_offer)) }}
    @component('dashboard::components.box')
        @slot('title', trans('home_offers.actions.edit'))

        @include('dashboard.home_offers.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('home_offers.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
