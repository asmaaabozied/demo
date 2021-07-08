{{--<x-layout :title="request('in_stock')=='false' ? trans('products.out_of_stock') : trans('products.plural')" :breadcrumbs="['dashboard.products.index']">--}}
{{--    @include('dashboard.products.partials.list')--}}


{{--</x-layout>--}}

@extends('layouts.vali.master')
@section('title')
    @lang('products.plural')
@endsection
@section('content')
    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage">
        @include('flash::message')
        <div class="contentDiv">
            <h1 class="page-header">@lang('products.plural')</h1>
            <div class="col-md-12">
                <div class="topLinks">
                    <a href="?status=0" class="active"> @lang('products.plural')</a>
                    <a href="?status=1">@lang('site.active')</a>
                    <a href="?status=2"> @lang('site.inactive')</a>
                    <a href="?status=3"> @lang('site.stock')</a>

                </div>
                <div class="ppR">
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown delRed btn-danger">
                            <a href="" class="btn " id="deleteAll">@lang('site.delete')</a>
                        </li>

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
                                                style="width: 113px;">@lang('site.image')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="sku: activate to sort column ascending"
                                                style="width: 88px;">@lang('site.sku')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="name: activate to sort column ascending"
                                                style="width: 78px;">@lang('site.name')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="price: activate to sort column ascending"
                                                style="width: 75px;">@lang('products.attributes.price')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="qty: activate to sort column ascending"
                                                style="width: 64px;">@lang('site.quantity')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Category: activate to sort column ascending"
                                                style="width: 116px;">@lang('products.attributes.category_id')
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

                                        @foreach($products as $product)
                                            <tr class="odd" id="ff{{$product->id}}">
                                                <td class="sorting_1">

                                                    <div class="custom-control custom-checkbox">

                                                        <input type="checkbox" class="custom-control-input"
                                                               name="ids" data-id="{{$product->id}}" >
                                                        <label class="custom-control-label" for="customCheck1"></label>

                                                    </div>

                                                </td>
                                                <td>
                                                    <img src="{{ $product->getFirstMediaUrl('default','thumb') }}"
                                                         alt="{{ $product->name }}"
                                                         class="img-circle img-size-32 mr-2"></td>
                                                <td>{{ $product->sku }}</td>

                                                <td>
                                                    <a href="{{ route('dashboard.products.show', $product->id)}}">{{ $product->name }} </a>
                                                </td>
                                                <td>{{ $product->price }}</td>

                                                <td>
                                                    <div class="qtyInpt">{{ $product->quantity }}</div>
                                                </td>
                                                <td>{{ $product->category->name ?? '' }}</td>
                                                <td>
                                                    <form action="{{ route('dashboard.products.status', $product->id) }}"
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

                                                <td>
                                                    <a href="{{ route('dashboard.products.edit', $product->id)}}"
                                                       class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('dashboard.products.destroy', $product->id)}}"
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
                <a href="{{route('dashboard.products.create')}}" class="btn "> + </a>
            </li>
            <li class="dropdown">
                <a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                    <span>@lang('site.status') <i class="fa fa-chevron-down"></i> </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <ul class="dropdown-settings">
                            <li>
                                <a href="?status=0" class="active"> @lang('products.plural')</a>

                            </li>
                            <li>
                                <a href="?status=1">@lang('site.active')</a>
                            </li>
                            <li>
                                <a href="?status=2"> @lang('site.inactive')</a>
                            </li>
                            <li>
                                <a href="?status=3"> @lang('site.stock')</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="topSell">
            <h6>@lang('products.filter')</h6>
            <form action="{{route('dashboard.searchproduct')}}" method="post">
                @csrf
                <div class="FiltItm">
                    <label for="">@lang('site.sku')</label>
                    <input type="text" name="sku" required>
                </div>
                <div class="FiltItm">
                    <label for="">@lang('site.name')</label>
                    <input type="text" name="name" required>
                </div>
                <div class="FiltItm priDv">
                    <label for="">@lang('site.price')</label>
                    <input type="number" value="0" name="price1" required>
                    <input type="number" value="0" name="price2" required>
                </div>
                <div class="FiltItm">
                    <label for="">@lang('site.category')</label>
                    <select name="category_id" id="" required>
                        @foreach(\App\Models\Category::get()->pluck('name','id') as $key=>$cat)
                            <option value="{{$key}}">{{$cat}}</option>
                        @endforeach

                    </select>
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

                'url': "{{route('dashboard.deleteAlls')}}",
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




