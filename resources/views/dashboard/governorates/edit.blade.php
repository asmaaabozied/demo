<x-layout :title="$governorate->name" :breadcrumbs="['dashboard.governorates.edit', $governorate]">
    {{ BsForm::resource('governorates')->putModel($governorate, route('dashboard.governorates.update', $governorate)) }}
    @component('dashboard::components.box')
        @slot('title', trans('governorates.actions.edit'))

        @include('dashboard.governorates.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('governorates.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
