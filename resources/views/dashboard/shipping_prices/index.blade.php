{{--<x-layout :title="trans('shipping_prices.plural')" :breadcrumbs="['dashboard.shipping_prices.index']">--}}
{{--    @include('dashboard.shipping_prices.partials.filter')--}}

{{--    @component('dashboard::components.table-box')--}}
{{--        @slot('title', trans('shipping_prices.actions.list'))--}}
{{--        @slot('tools')--}}
{{--            @include('dashboard.shipping_prices.partials.actions.create')--}}
{{--        @endslot--}}

{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>@lang('shipping_prices.attributes.name')</th>--}}
{{--            <th style="width: 160px">...</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @forelse($shipping_prices as $shipping_price)--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('dashboard.shipping_prices.show', $shipping_price) }}"--}}
{{--                       class="text-decoration-none text-ellipsis">--}}
{{--                        {{ $shipping_price->name }}--}}
{{--                    </a>--}}
{{--                </td>--}}

{{--                <td style="width: 160px">--}}
{{--                    @include('dashboard.shipping_prices.partials.actions.show')--}}
{{--                    @include('dashboard.shipping_prices.partials.actions.edit')--}}
{{--                    @include('dashboard.shipping_prices.partials.actions.delete')--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="100" class="text-center">@lang('shipping_prices.empty')</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}

{{--        @if($shipping_prices->hasPages())--}}
{{--            @slot('footer')--}}
{{--                {{ $shipping_prices->links() }}--}}
{{--            @endslot--}}
{{--        @endif--}}
{{--    @endcomponent--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('shipping_companies.plural')
@endsection
@section('content')
    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage">
        @include('flash::message')
        <div class="contentDiv">
            <h1 class="page-header">@lang('shipping_companies.plural')</h1>
            <div class="col-md-12">
                <div class="topLinks">
                    <a href="?status=0" class="active"> @lang('shipping_companies.plural')</a>
                    <a href="?status=1">@lang('site.active')</a>
                    <a href="?status=2"> @lang('site.inactive')</a>

                </div>
                <div class="ppR">
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown delRed btn-danger">
                            <a href="" class="btn " id="deleteAll">@lang('site.delete')</a>
                        </li>




                    </ul>
                    <li class="dropdown delRed btn-danger">
                        <a href="{{route('dashboard.shipping_prices.create')}}" class="btn " > <i class="btn-plus"></i>@lang('site.create')</a>
                    </li>
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
                                                style="width: 113px;">@lang('site.image')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="sku: activate to sort column ascending"
                                                style="width: 88px;">@lang('site.country')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="name: activate to sort column ascending"
                                                style="width: 78px;">@lang('site.name')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="price: activate to sort column ascending"
                                                style="width: 75px;">@lang('site.rate')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="qty: activate to sort column ascending"
                                                style="width: 64px;">@lang('site.otherrate')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Category: activate to sort column ascending"
                                                style="width: 116px;">@lang('site.default')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.status')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.created_at')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.action')
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($shipping_prices as $product)
                                            <tr class="odd" id="ff{{$product->id}}">
                                                <td class="sorting_1">

                                                    <div class="custom-control custom-checkbox">

                                                        <input type="checkbox" class="custom-control-input"
                                                               name="ids" data-id="{{$product->id}}">
                                                        <label class="custom-control-label" for="customCheck1"></label>

                                                    </div>

                                                </td>
                                                <td>
                                                    <img src="{{ $product->getFirstMediaUrl() }}"
                                                         alt="{{ $product->country->name ?? '' }}"
                                                         class="img-circle img-size-32 mr-2" width="50" height="50">
                                                </td>
                                                <td>{{ $product->country->name ?? '' }}</td>

                                                <td>
                                                    <a href="{{ route('dashboard.shipping_prices.show', $product->id)}}">{{ $product->name ?? '' }} </a>
                                                </td>
                                                <td>{{ $product->first_price }}</td>

                                                <td>
                                                    <div class="qtyInpt">{{ $product->second_price }}</div>
                                                </td>
                                                <td>

                                                    <div class="toggle lg addCont col-md-6">
                                                        <input type="checkbox" value="1" name="is_default" @if($product->is_defaut) checked
                                                                @endif><span
                                                                class="button-indecator"></span>

                                                    </div>

                                                </td>
                                                <td>
                                                    <form action="{{ route('dashboard.shipping_prices.status', $product->id) }}"
                                                          method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}

                                                        @if( $product->status==1)
                                                            <button type="submit" class="btn btn-success update btn-sm">
                                                                <i class="fa fa-check"></i> @lang('site.active')
                                                            </button>
                                                        @elseif( $product->status==0)
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-close"></i> @lang('site.inactive')
                                                            </button>
                                                        @endif
                                                    </form>
                                                </td>

                                                <td>{{ $product->created_at->diffForHumans() ?? '' }}</td>


                                                <td>
                                                    <a href="{{ route('dashboard.shipping_prices.edit', $product->id)}}"
                                                       class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('dashboard.shipping_prices.destroy', $product->id)}}"
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

                'url': "{{route('dashboard.deleteAllships')}}",
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
