{{--<x-layout :title="request('in_stock')=='false' ? trans('products.out_of_stock') : trans('product_types.plural')" :breadcrumbs="['dashboard.producttypes.index']">--}}

{{--    {{ BsForm::resource('producttypes')->get(url()->current()) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('product_types.filter'))--}}

{{--        <div class="row">--}}
{{--            <div class="col-md-4">--}}
{{--                {{ BsForm::text('name')->value(request('name')) }}--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        @slot('footer')--}}
{{--            <button type="submit" class="btn btn-primary btn-sm">--}}
{{--                <i class="fas fa fa-fw fa-filter"></i>--}}
{{--                @lang('products.actions.filter')--}}
{{--            </button>--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}


{{--@component('dashboard::components.table-box')--}}
{{--        @slot('title', $title ?? trans('product_types.actions.list'))--}}
{{--        @slot('tools')--}}
{{--            @if((isset($createButton) && $createButton) || ! isset($createButton))--}}
{{--                    <a href="{{ route('dashboard.producttypes.create') }}" class="btn btn-outline-success btn-sm">--}}
{{--                        <i class="fas fa fa-fw fa-plus"></i>--}}
{{--                        @lang('product_types.actions.create')--}}
{{--                    </a>--}}


{{--            @endif--}}
{{--        @endslot--}}

{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>@lang('product_types.attributes.name')</th>--}}
{{--            @if((isset($controls) && $controls) || ! isset($controls))--}}
{{--                <th style="width: 160px">...</th>--}}
{{--            @endif--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @forelse($products as $product)--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('dashboard.producttypes.show', $product) }}"--}}
{{--                       class="text-decoration-none text-ellipsis">--}}

{{--                        {{ $product->name }}--}}
{{--                    </a>--}}
{{--                </td>--}}

{{--                @if((isset($controls) && $controls) || ! isset($controls))--}}
{{--                    <td style="width: 160px">--}}

{{--                            <a href="{{ route('dashboard.producttypes.show', $product->id) }}" class="btn btn-outline-dark btn-sm">--}}
{{--                                <i class="fas fa fa-fw fa-eye"></i>--}}
{{--                            </a>--}}
{{--                                <a href="{{ route('dashboard.producttypes.edit', $product->id) }}" class="btn btn-outline-primary btn-sm">--}}
{{--                                    <i class="fas fa fa-fw fa-edit"></i>--}}
{{--                                </a>--}}


{{--                                <a href="#product-{{ $product->id }}-delete-model"--}}
{{--                                   class="btn btn-outline-danger btn-sm"--}}
{{--                                   data-toggle="modal">--}}
{{--                                    <i class="fas fa fa-fw fa-trash"></i>--}}
{{--                                </a>--}}


{{--                                <!-- Modal -->--}}
{{--                                <div class="modal fade" id="product-{{ $product->id }}-delete-model" tabindex="-1" role="dialog"--}}
{{--                                     aria-labelledby="modal-title-{{ $product->id }}" aria-hidden="true">--}}
{{--                                    <div class="modal-dialog" role="document">--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <h5 class="modal-title" id="modal-title-{{ $product->id }}">@lang('product_types.dialogs.delete.title')</h5>--}}
{{--                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                    <span aria-hidden="true">&times;</span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}
{{--                                                @lang('products.dialogs.delete.info')--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-footer">--}}
{{--                                                {{ BsForm::delete(route('dashboard.producttypes.destroy', $product)) }}--}}
{{--                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">--}}
{{--                                                    @lang('product_types.dialogs.delete.cancel')--}}
{{--                                                </button>--}}
{{--                                                <button type="submit" class="btn btn-danger">--}}
{{--                                                    @lang('product_types.dialogs.delete.confirm')--}}
{{--                                                </button>--}}
{{--                                                {{ BsForm::close() }}--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}



{{--                    </td>--}}
{{--                @endif--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="100" class="text-center">@lang('products.empty')</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}

{{--        @if(method_exists($products, 'hasPages') && $products->hasPages())--}}
{{--            @slot('footer')--}}
{{--                {{ $products->links() }}--}}
{{--            @endslot--}}
{{--        @endif--}}
{{--    @endcomponent--}}

{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('product_types.plural')
@endsection
@section('content')

    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage">
        @include('flash::message')
        <div class="contentDiv">
            <h1 class="page-header">@lang('product_types.plural')</h1>

            <div class="col-md-12">
                <div class="topLinks">
                    <a  class="active"> @lang('product_types.plural')</a>
{{--                    <a href="?status=1">@lang('site.active')</a>--}}
{{--                    <a href="?status=2"> @lang('site.inactive')</a>--}}

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
                                                           id="customCheck3" name="id[]">
                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                </div>
                                            </th>


                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="name: activate to sort column ascending"
                                                style="width: 78px;">@lang('site.name')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="price: activate to sort column ascending"
                                                style="width: 75px;">@lang('site.created_at')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.action')
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)


                                            <tr class="odd" id="ff{{$product->id}}">
                                                <td class="sorting_1">

                                                    <div class="custom-control custom-checkbox">

                                                        <input type="checkbox" class="custom-control-input"
                                                               name="ids" data-id="{{$product->id}}">
                                                        <label class="custom-control-label" for="customCheck1"></label>

                                                    </div>

                                                </td>


                                                <td>  {{ $product->name }} </td>
                                                <td>{{ $product->created_at->diffForHumans() ?? '' }}</td>


                                                <td>
                                                    <a href="{{ route('dashboard.producttypes.edit', $product->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('dashboard.producttypes.destroy', $product->id)}}"
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
            <li class="dropdown delRed btn-primary">
                <a href="{{route('dashboard.producttypes.create')}}" class="btn "> + </a>
            </li>
        </ul>
        <div class="ppR">
            <ul class="pull-right panel-settings panel-button-tab-right">
                <li class="dropdown delRed btn-danger">
                    <a href="" class="btn " id="deleteAll"> @lang('site.delete')</a>
                </li>

            </ul>
        </div>
        <div class="topSell">
            <h6>@lang('product_types.plural')</h6>

            <div class="FiltItm">
                <div class="row">
                    <br>
                    <div class="col-md-6">
                        @lang('product_types.plural')
                    </div>
                    <div class="col-md-6 count">
                        {{$products->count()}}
                    </div>
                </div>
                <br>

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

                'url': "{{route('dashboard.deleteAlltypeproducts')}}",
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