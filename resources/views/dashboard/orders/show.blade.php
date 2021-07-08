{{--<x-layout :title="'#'.$order->id" :breadcrumbs="['dashboard.orders.show', $order]">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            @component('dashboard::components.box')--}}
{{--                @slot('class', 'p-0')--}}
{{--                @slot('bodyClass', 'p-0')--}}

{{--                <div class="btn-group float-right" style="margin-right: 10px;border:1px solid #c5b5b5;">--}}
{{--                    <a class="btn btn-flat" title="Export" onclick='window.open("/admin360/orders/{{ $order->id }}/invoice", "", "width=1000,height=800");'><i class="fa fa-print"></i><span class="hidden-xs"> Print</span></a>--}}
{{--                </div>--}}

{{--                <table class="table table-striped table-middle">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.id')</th>--}}
{{--                        <td>{{ $order->id }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.user_id')</th>--}}
{{--                        <td>{{ optional($order->customer)->name }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.name')</th>--}}
{{--                        <td>{{ $order->name }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.phone')</th>--}}
{{--                        <td>{{ $order->phone }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.recieve_type')</th>--}}
{{--                        <td>--}}
{{--                            @if($order->pickup!="") --}}
{{--                                @lang('orders.attributes.pickup')--}}
{{--                            @else--}}
{{--                                @lang('orders.attributes.delivery')--}}
{{--                            @endif--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    @if($order->pickup!="")--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('locations.singular')</th>--}}
{{--                        <td>{{ $order->location->name }}</td>--}}
{{--                    </tr>--}}
{{--                    @else--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.city')</th>--}}
{{--                        <td>{{ $order->city }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.area')</th>--}}
{{--                        <td>{{ $order->area }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.block')</th>--}}
{{--                        <td>{{ $order->block }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.street')</th>--}}
{{--                        <td>{{ $order->street }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.avenue')</th>--}}
{{--                        <td>{{ $order->avenue }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.house')</th>--}}
{{--                        <td>{{ $order->house }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.address')</th>--}}
{{--                        <td>{{ $order->address }}</td>--}}
{{--                    </tr>--}}
{{--                    @endif--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.status')</th>--}}
{{--                        <td>@lang('orders.statuses.'.$order->status)</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.shipping_price')</th>--}}
{{--                        <td>{{ price($order->shipping_price) }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.total')</th>--}}
{{--                        <td>{{ price($order->total+$order->shipping_price) }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.paid')</th>--}}
{{--                        <td>{{ price($order->paid) }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.payment_method')</th>--}}
{{--                        <td>{{$order->payment_method}}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('orders.attributes.gift_message')</th>--}}
{{--                        <td>{{ $order->gift_message }}</td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}

{{--                @slot('footer')--}}
{{--                    @include('dashboard.orders.partials.actions.edit')--}}
{{--                    @include('dashboard.orders.partials.actions.delete')--}}
{{--                @endslot--}}
{{--            @endcomponent--}}
{{--        </div>--}}
{{--        <div class="col-md-6">--}}
{{--            @component('dashboard::components.table-box')--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>@lang('products.attributes.name')</th>--}}
{{--                    <th class="d-none d-md-table-cell">@lang('products.attributes.price')</th>--}}
{{--                    <th class="d-none d-md-table-cell">@lang('orders.attributes.qty')</th>--}}
{{--                    <th class="d-none d-md-table-cell">@lang('front.is_milk')</th>--}}
{{--                    <th class="d-none d-md-table-cell">@lang('front.additional')</th>--}}
{{--                    <th class="d-none d-md-table-cell">@lang('orders.attributes.total')</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @forelse($order->items as $orderItem)--}}
{{--                    @php($item = $orderItem->item)--}}
{{--                    <tr>--}}
{{--                        <td>--}}
{{--                            <a href="{{ $item->getDashboardUrl() }}"--}}
{{--                               class="text-decoration-none text-ellipsis">--}}
{{--                                <img src="{{ $item->getFirstMediaUrl('default', 'thumb') }}"--}}
{{--                                     alt="{{ $item->name }}"--}}
{{--                                     class="img-size-32 mr-2">--}}
{{--                                {{ $item->name }}--}}
{{--                            </a>--}}
{{--                        </td>--}}
{{--                        <td>{{ price($item->price) }}</td>--}}
{{--                        <td>{{ $orderItem->qty }}</td>--}}
{{--                        <td>{{ $orderItem->milk_size ? price(2) : 'لا يوجد' }}</td>--}}
{{--                        <td>{{ $orderItem->additional }}</td>--}}
{{--                        <td>--}}
{{--                            @if($orderItem->milk_size!='')--}}
{{--                            {{ price($orderItem->total+2) }}--}}
{{--                            @else --}}
{{--                            {{ price($orderItem->total) }}--}}
{{--                            @endif--}}
{{--                        </td>--}}
{{--                @empty--}}
{{--                    <tr>--}}
{{--                        <td colspan="100" class="text-center">@lang('products.empty')</td>--}}
{{--                    </tr>--}}
{{--                @endforelse--}}
{{--            @endcomponent--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-layout>--}}

@extends('layouts.vali.master')
@section('title')
    @lang('orders.plural')
@endsection
@section('content')


    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header">@lang('orders.plural')</h1>
        <div class="contentDiv">
            <div class="col-md-12">
                <div class="topLinks">
                    <h5>@lang('site.show')</h5>
                </div>
                <div class="ppR">
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown delRed btn-primary" style="background-color: #66C2A5;">
                            <a class="btn " onclick="history.back()"><i class="fa fa-arrow-left"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 bgWit">
                    <table class="ordDetTbl table display proTbl dataTable no-footer noBorderTbl">
                        <tbody>
                        <tr>
                            <th>@lang('site.image')</th>
                            <th>@lang('products.attributes.name')</th>
                            <th>@lang('products.attributes.price')</th>
                            <th>@lang('orders.attributes.qty')</th>
                            <th>@lang('front.is_milk')</th>
                            <th>@lang('front.additional')</th>
                            <th>@lang('orders.attributes.total')</th>
                        </tr>
                        @forelse($order->items as $orderItem)
                            @php($item = $orderItem->item)
                            <tr>
                                <td>
                                    <a href="#"
                                       class="text-decoration-none text-ellipsis">
                                        <img src=""
                                             alt="{{ $item->name ?? '' }}"
                                             class="img-size-32 mr-2">
                                        {{ $item->name ??' ' }}
                                    </a>
                                </td>
                                <td>
                                <a href="{{route('dashboard.products.show',$item->id ?? '')}}">    {{ $item->name ?? '' }}
                                </a>
                                </td>
                                <td>
                                    {{ $item->price ?? ''}}
                                </td>
                                <td>{{ $orderItem->qty ?? '' }}</td>
                                <td>{{ $orderItem->milk_size ? price(2) : 'لا يوجد' }}</td>
                                <td>{{ $orderItem->additional ?? '' }}</td>
                                <td>

                                    @if($orderItem->milk_size!='')
                                        {{ price($orderItem->total+2) }}
                                    @else
                                        {{ price($orderItem->total) }}
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="100" class="text-center">@lang('products.empty')</td>
                            </tr>

                        @endforelse
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <div class="col-md-4 subTotOrd">
                            <table class="table display no-footer noBorderTbl">
                                <tbody>
                                <tr>
                                    <th></th>
                                    <th>totals</th>
                                </tr>
                                <tr>
                                    <td>@lang('orders.attributes.total'):</td>
                                    <td>{{price($order->sub_total)}}</td>
                                </tr>
                                <tr>
                                    <td>@lang('orders.attributes.shipping_price'):</td>
                                    <td>{{ price($order->shipping_price)}}</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>@lang('site.total'):</td>
                                    <td>{{price($order->total)}}</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-5 gTxtArea">
                        <label for="">@lang('site.Gift Message')</label>
                        <div class="clearfix"></div>
                        <textarea name="" rows="7">{{$order->gift_message	}}</textarea>
                    </div>


                </div>
                <div class="col-md-12 bgWit">
                    <div class="col-md-4">
                        <h4>@lang('customers.plural')</h4>
                        <h5>@lang('site.name')</h5>
                        <h6>@lang('site.email')</h6>
                        <h6>@lang('site.phone')</h6>
                    </div>
                    <div class="col-md-4 midBord">
                        <h4>{{$order->customer->address ?? ''}} </h4>
                        <h5> {{$order->customer->name ?? ''}}</h5>
                        <h6>{{$order->customer->email ?? ''}}</h6>
                        <h6>{{$order->customer->phone ?? ''}}</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 forFullWid innerPage">
        <div class="topSell inpro">
            <h6>@lang('site.status')
                <span class="dropdown">
					<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
					<span><small>{{$order->status}}</small><i class="fa fa-chevron-down"></i></span>
					</a>

				</span>
            </h6>
            <div class="clearfix"></div>
            <table class="table noBorderTbl">
                <tbody>
                <tr>
                    <th colspan="2">@lang('orders.invoice.payment_method')</th>
                </tr>
                <tr>
                    <td>@lang('site.Method')</td>
                    <td>{{$order->payment_method}}</td>
                </tr>
                </tbody>
            </table>
            <table class="table noBorderTbl">
                <tbody>
                <tr>
                    <th colspan="2"> @lang('orders.Shipping Information')</th>
                </tr>
                <tr>
                    <td>@lang('site.Method')</td>
                    <td>{{$orders->address ?? ''}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>



@endsection
