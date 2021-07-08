<x-layout :title="$governorate->name" :breadcrumbs="['dashboard.governorates.show', $governorate]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('governorates.attributes.name')</th>
                        <td>{{ $governorate->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('governorates.attributes.flag')</th>
                        <td>
                            <img src="{{ $governorate->getFirstMediaUrl('flags') }}"
                                 class="img img-size-64"
                                 alt="{{ $governorate->name }}">
                        </td>
                    </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.governorates.partials.actions.edit')
                    @include('dashboard.governorates.partials.actions.delete')
                @endslot
            @endcomponent

            @include('dashboard.areas.create', ['governorateId' => $governorate->id])
        </div>
        <div class="col-md-6">
            @include('dashboard.areas.index')
        </div>
    </div>
</x-layout>
