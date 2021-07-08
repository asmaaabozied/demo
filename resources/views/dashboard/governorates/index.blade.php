<x-layout :title="trans('governorates.plural')" :breadcrumbs="['dashboard.governorates.index']">
    @include('dashboard.governorates.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title', trans('governorates.actions.list'))
        @slot('tools')
            @include('dashboard.governorates.partials.actions.create')
        @endslot

        <thead>
        <tr>
            <th>@lang('governorates.attributes.name')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($governorates as $governorate)
            <tr>
                <td>
                    <a href="{{ route('dashboard.governorates.show', $governorate) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $governorate->getFirstMediaUrl('flags') }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $governorate->name }}
                    </a>
                </td>
                <td style="width: 160px">
                    @include('dashboard.governorates.partials.actions.show')
                    @include('dashboard.governorates.partials.actions.edit')
                    @include('dashboard.governorates.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('governorates.empty')</td>
            </tr>
        @endforelse

        @if($governorates->hasPages())
            @slot('footer')
                {{ $governorates->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
