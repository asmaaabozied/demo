{{--<x-layout :title="trans('orders.plural')" :breadcrumbs="['dashboard.orders.index']">--}}
{{--    @if((isset($filter) && $filter) || ! isset($filter))--}}
{{--        @include('dashboard.orders.partials.filter')--}}
{{--    @endif--}}
{{--    @component('dashboard::components.table-box')--}}
{{--        @slot('title', trans('orders.actions.list'))--}}

{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>@lang('orders.attributes.id')</th>--}}
{{--            <th>@lang('orders.attributes.recieve_type')</th>--}}
{{--            <th>@lang('locations.singular')</th>--}}
{{--            <th>@lang('orders.attributes.shipping_price')</th>--}}
{{--            <th>@lang('orders.attributes.total')</th>--}}
{{--            <th>@lang('orders.attributes.opened_at')</th>--}}
{{--            <th style="width: 160px">...</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @forelse($orders as $order)--}}
{{--            <tr @if($order->status=='pending') style="background: #f5e3b5" @endif>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('dashboard.orders.show', $order) }}"--}}
{{--                       class="text-decoration-none text-ellipsis">--}}
{{--                        #{{ $order->id }}--}}
{{--                    </a>--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @if($order->pickup!="") --}}
{{--                        @lang('orders.attributes.pickup')--}}
{{--                    @else--}}
{{--                        @lang('orders.attributes.delivery')--}}
{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    @if($order->pickup=="")--}}
{{--                        {{ $order->address }}--}}
{{--                    @else--}}
{{--                        {{ $order->location->name }}--}}
{{--                    @endif--}}
{{--                </td>--}}
{{--                <td>{{ price($order->shipping_price) }}</td>--}}
{{--                <td>{{ price($order->total) }}</td>--}}
{{--                <td>{{ $order->opened_at }}</td>--}}

{{--                <td style="width: 160px">--}}
{{--                    @include('dashboard.orders.partials.actions.show')--}}
{{--                    @include('dashboard.orders.partials.actions.edit')--}}
{{--                    @include('dashboard.orders.partials.actions.delete')--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="100" class="text-center">@lang('orders.empty')</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}
{{--        <tr style="background: silver">--}}
{{--            <td colspan="4" class="text-center">@lang('orders.attributes.total')</td>--}}
{{--            <td>{{ price($order->total+$order->shipping_price) }}</td>--}}
{{--            <td></td>--}}
{{--            <td></td>--}}
{{--        </tr>--}}

{{--        @if($orders->hasPages())--}}
{{--            @slot('footer')--}}
{{--                {{ $orders->links() }}--}}
{{--            @endslot--}}
{{--        @endif--}}
{{--    @endcomponent--}}
{{--</x-layout>--}}
{{--<x-layout :title="request('in_stock')=='false' ? trans('products.out_of_stock') : trans('products.plural')" :breadcrumbs="['dashboard.products.index']">--}}
{{--    @include('dashboard.products.partials.list')--}}


{{--</x-layout>--}}

@extends('layouts.vali.master')
@section('title')
    @lang('orders.plural')
@endsection
@section('content')
    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage">
        @include('flash::message')
        <div class="contentDiv">
            <h1 class="page-header">@lang('orders.plural')</h1>

            <div class="col-md-12">
                <div class="topLinks">
                    <a href="?status=0" class="active"> @lang('orders.plural')</a>
                    <a href="?status=1">@lang('site.In-progress')</a>
                    <a href="?status=2"> @lang('site.Pending')</a>
                    <a href="?status=3"> @lang('site.Delivered')</a>
                    <a href="?status=4"> @lang('site.Cancelled')</a>
                </div>

                <div class="ppR">
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown delRed btn-danger">
                            <a href="" class="btn " id="deleteAll">@lang('site.delete')</a>
                        </li>
<br><br>
                        <li class="dropdown delRed btn-primary"><a href="{{route('dashboard.orders.create')}}" class="btn">@lang('site.add')</a></li>


                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="example_wrapper" class="dataTables_wrapper no-footer">
                        <div class="dataTables_length" id="example_length">
                            <div class="col-md-12">

                                <div id="example_wrapper" class="dataTables_wrapper no-footer">

                                    <table class="table table-hover" id="table">
                                        <thead>
                                        <tr role="row">
                                            <th scope="col" class="sorting sorting_asc" tabindex="0"
                                                aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="
            : activate to sort column descending" style="width: 51px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="customCheck3" name="ids">
                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                </div>
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="imageeee: activate to sort column ascending"
                                                style="width: 113px;">@lang('site.date')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="sku: activate to sort column ascending"
                                                style="width: 88px;">@lang('site.number')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="name: activate to sort column ascending"
                                                style="width: 78px;">@lang('site.customers')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="price: activate to sort column ascending"
                                                style="width: 75px;">@lang('site.total')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="qty: activate to sort column ascending"
                                                style="width: 64px;">@lang('site.phone')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.status')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.action')
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($orders as $product)
                                            <tr class="odd" id="ff{{$product->id}}">
                                                <td class="sorting_1">

                                                    <div class="custom-control custom-checkbox">

                                                        <input type="checkbox" class="custom-control-input"
                                                               name="ids" data-id="{{$product->id}}">
                                                        <label class="custom-control-label" for="customCheck1"></label>

                                                    </div>


                                                </td>

                                                <td>{{ $product->created_at->diffForHumans() ?? '' }}</td>


                                                <td>{{ $product->id ?? '' }}</td>
                                                <td> <a href="{{ route('dashboard.orders.show', $product->id)}}" > {{ $product->customer->name ?? '' }} </a> </td>

                                                <td>
                                                    <div class="qtyInpt">{{ $product->total }}</div>
                                                </td>
                                                <td>{{ $product->phone  ?? ''}}</td>
                                                <td>
                                                    <form action="{{ route('dashboard.orders.status', $product->id) }}"
                                                          method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}

                                                        @if( $product->status==0)
                                                            <button type="submit" class="btn btn-success update btn-sm">
                                                                <i class="fa fa-check"></i> @lang('site.Pending')
                                                            </button>


                                                        @elseif( $product->status==1)
                                                            <button type="submit" class="btn btn-primary update btn-sm">
                                                                <i class="fa fa-close"></i> @lang('site.Delivered')
                                                            </button>
                                                        @elseif( $product->status==2)
                                                            <button type="submit" class="btn btn-default update btn-sm">
                                                                <i class="fa fa-close"></i> @lang('site.Cancelled')
                                                            </button>
                                                    </form>
                                                    @endif
                                                </td>


                                                <td>
                                                    <a href="{{ route('dashboard.orders.edit', $product->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('dashboard.orders.delete', $product->id)}}"
                                                          method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('delete') }}
                                                        <button type="submit" class="btn btn-danger delete btn-sm"><i
                                                                    class="fa fa-trash"></i></button>
                                                    </form><!-- end of form -->

                                                </td>


                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>


                                </div>


                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-2 forFullWid innerPage">
        <ul class="pull-right panel-settings panel-button-tab-right">

            <li class="dropdown">
                <a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                    <span>@lang('site.status') <i class="fa fa-chevron-down"></i> </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <ul class="dropdown-settings">
                            <li>
                                <a href="?status=1">@lang('site.In-progress')</a>
                            </li>
                            <li>
                                <a href="?status=2">@lang('site.Pending')</a>
                            </li>
                            <li>
                                <a href="?status=3">@lang('site.Delivered')</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>

        </ul>

        <div class="topSell">
            <h6>@lang('orders.filter')</h6>
            <form action="{{route('dashboard.orders.search')}}" method=post>
                @csrf
                <div class="FiltItm">
                    <label for="">@lang('site.name')</label>
                    <input type="text" name="name">
                </div>
                <div class="FiltItm">
                    <label for="">@lang('site.customers')</label>
                    <select name="user_id">
                        @foreach(\App\Models\User::where('type','customer')->get()->pluck('name','id') as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="FiltItm">
                    <label for="">@lang('site.phone')</label>
                    <input type="tel" name="phone">
                </div>
                <button class="btn" type="submit">@lang('site.search')</button>
            </form>
        </div>
    </div>




@endsection
@section('scripts')
    <script>


        $('#deleteAll').click(function (e) {
            e.preventDefault();
            var allid = [];
            $("input:checkbox[name=ids]:checked").each(function () {


                allid.push($(this).data('id'));

            });

            console.log(allid);

            $.ajax({

                'url': "{{route('dashboard.deleteAllOrders')}}",
                type: 'Delete',
                data: {

                    ids: allid,
                    _token: $("input[name=_token]").val(),
                }, success: function (response) {

                    $.each(allid, function (key, value) {
                        $(`#ff${value}`).remove();
                    })


                }

            });

        });


    </script>



@endsection





