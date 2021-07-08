<x-layout :title="$shipping_company->name" :breadcrumbs="['dashboard.shipping_companies.edit', $shipping_company]">
    {{ BsForm::resource('shipping_companies')->putModel($shipping_company, route('dashboard.shipping_companies.update', $shipping_company)) }}
    @component('dashboard::components.box')
        @slot('title', trans('shipping_companies.actions.edit'))

        @include('dashboard.shipping_companies.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('shipping_companies.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>