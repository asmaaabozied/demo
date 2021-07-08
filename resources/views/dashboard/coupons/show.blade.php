<x-layout :title="$coupon->name" :breadcrumbs="['dashboard.coupons.show', $coupon]">
    <div class="row">
        <div class="col-md-6">
            @component('dashboard::components.box')
                @slot('class', 'p-0')
                @slot('bodyClass', 'p-0')

                <table class="table table-striped table-middle">
                    <tbody>
                    <tr>
                        <th width="200">@lang('coupons.attributes.name')</th>
                        <td>{{ $coupon->name }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('coupons.attributes.code')</th>
                        <td>{{ $coupon->code }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('offers.attributes.discount_type')</th>
                        <td>
                            {{ $coupon->discount_type=="percentage" ? __('offers.attributes.percentage') : __('offers.attributes.price') }}
                        </td>
                    </tr>
                    <tr>
                        <th width="200">@lang('offers.attributes.discount_value')</th>
                        <td>
                            {{ $coupon->discount_type=="percentage" ? $coupon->value.'%' : price($coupon->value) }}
                        </td>
                    </tr>
                    <tr>
                        <th width="200">@lang('coupons.attributes.min_total')</th>
                        <td>{{ price($coupon->min_total) }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('coupons.attributes.usage_count')</th>
                        <td>{{ $coupon->usage_count }}</td>
                    </tr>
                    <tr>
                        <th width="200">@lang('coupons.attributes.usage_per_user')</th>
                        <td>{{ $coupon->usage_per_user }}</td>
                    </tr>
                    </tbody>
                </table>

                @slot('footer')
                    @include('dashboard.coupons.partials.actions.edit')
                    @include('dashboard.coupons.partials.actions.delete')
                @endslot
            @endcomponent
        </div>
    </div>
</x-layout>
