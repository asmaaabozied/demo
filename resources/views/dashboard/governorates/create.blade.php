<x-layout :title="trans('governorates.actions.create')" :breadcrumbs="['dashboard.governorates.create']">
    {{ BsForm::resource('governorates')->post(route('dashboard.governorates.store')) }}
    @component('dashboard::components.box')
        @slot('title', trans('governorates.actions.create'))

        @include('dashboard.governorates.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('governorates.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
