<x-layout :title="$shipping_company->name" :breadcrumbs="['dashboard.shipping_companies.show', $shipping_company]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('shipping_companies.attributes.name')</th>
                        <td>{{ $shipping_company->name }}</td>
                    </tr>
                    <tr>
                      <th width="200">@lang('shipping_companies.attributes.image')</th>
                      <td>
                        <img src="{{ $shipping_company->getFirstMediaUrl() }}"
                             class="img img-size-64 mw-100"
                             alt="{{ $shipping_company->name }}">
                      </td>
                    </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.shipping_companies.partials.actions.edit')
                    @include('dashboard.shipping_companies.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
