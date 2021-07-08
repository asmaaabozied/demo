<x-layout :title="$area->name" :breadcrumbs="['dashboard.governorates.areas.edit', $governorate, $area]">
    {{ BsForm::resource('areas')
                ->putModel($area, route('dashboard.governorates.areas.update', [$governorate, $area])) }}
    @component('dashboard::components.box')
        @slot('title', trans('areas.actions.edit'))

        @include('dashboard.areas.partials.form')

        @slot('footer')
            {{ BsForm::submit()->label(trans('areas.actions.save')) }}
        @endslot
    @endcomponent
    {{ BsForm::close() }}
</x-layout>
