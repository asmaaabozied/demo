<x-layout :title="trans('shipping_companies.plural')" :breadcrumbs="['dashboard.shipping_companies.index']">
    @include('dashboard.shipping_companies.partials.filter')

    @component('dashboard::components.table-box')
        @slot('title', trans('shipping_companies.actions.list'))
        @slot('tools')
            @include('dashboard.shipping_companies.partials.actions.create')
        @endslot

        <thead>
        <tr>
            <th>@lang('shipping_companies.attributes.name')</th>
            <th style="width: 160px">...</th>
        </tr>
        </thead>
        <tbody>
        @forelse($shipping_companies as $shipping_company)
            <tr>
                <td>
                    <a href="{{ route('dashboard.shipping_companies.show', $shipping_company) }}"
                       class="text-decoration-none text-ellipsis">

                        <img src="{{ $shipping_company->getFirstMediaUrl() }}"
                             alt="Product 1"
                             class="img-circle img-size-32 mr-2" style="height: 32px;">
                        {{ $shipping_company->name }}
                    </a>
                </td>

                <td style="width: 160px">
                    @include('dashboard.shipping_companies.partials.actions.show')
                    @include('dashboard.shipping_companies.partials.actions.edit')
                    @include('dashboard.shipping_companies.partials.actions.delete')
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="100" class="text-center">@lang('shipping_companies.empty')</td>
            </tr>
        @endforelse

        @if($shipping_companies->hasPages())
            @slot('footer')
                {{ $shipping_companies->links() }}
            @endslot
        @endif
    @endcomponent
</x-layout>
