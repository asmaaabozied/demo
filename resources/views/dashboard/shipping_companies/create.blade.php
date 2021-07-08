<x-layout :title="trans('shipping_companies.actions.create')" :breadcrumbs="['dashboard.shipping_companies.create']">
    {{ BsForm::resource('shipping_companies')->post(route('dashboard.shipping_companies.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('shipping_companies.actions.create'))

        @include('dashboard.shipping_companies.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('shipping_companies.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>