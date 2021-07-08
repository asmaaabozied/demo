{{--<x-layout :title="trans('locations.plural')" :breadcrumbs="['dashboard.locations.index']">--}}
{{--    @include('dashboard.locations.partials.filter')--}}

{{--    @component('dashboard::components.table-box')--}}
{{--        @slot('title', trans('locations.actions.list'))--}}
{{--        @slot('tools')--}}
{{--            @include('dashboard.locations.partials.actions.create')--}}
{{--        @endslot--}}

{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>@lang('locations.attributes.name')</th>--}}
{{--            <th style="width: 160px">...</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @forelse($locations as $location)--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('dashboard.locations.show', $location) }}"--}}
{{--                       class="text-decoration-none text-ellipsis">--}}

{{--                        <img src="{{ $location->getFirstMediaUrl('flags') }}"--}}
{{--                             alt="Product 1"--}}
{{--                             class="img-circle img-size-32 mr-2" style="height: 32px;">--}}
{{--                        {{ $location->name }}--}}
{{--                    </a>--}}
{{--                </td>--}}
{{--                <td style="width: 160px">--}}
{{--                    @include('dashboard.locations.partials.actions.show')--}}
{{--                    @include('dashboard.locations.partials.actions.edit')--}}
{{--                    @include('dashboard.locations.partials.actions.delete')--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="100" class="text-center">@lang('locations.empty')</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}

{{--        @if($locations->hasPages())--}}
{{--            @slot('footer')--}}
{{--                {{ $locations->links() }}--}}
{{--            @endslot--}}
{{--        @endif--}}
{{--    @endcomponent--}}
{{--</x-layout>--}}

@extends('layouts.vali.master')
@section('title')
    @lang('locations.plural')
@endsection
@section('content')
    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage">
        @include('flash::message')
        <div class="contentDiv">
            <h1 class="page-header">@lang('locations.plural')</h1>
            <div class="col-md-12">

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
                                                style="width: 113px;">@lang('site.name')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="sku: activate to sort column ascending"
                                                style="width: 88px;">@lang('site.address')
                                            </th>


                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="qty: activate to sort column ascending"
                                                style="width: 64px;">@lang('site.phone')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Category: activate to sort column ascending"
                                                style="width: 116px;">@lang('site.whatspp')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Category: activate to sort column ascending"
                                                style="width: 116px;">@lang('site.created_at')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.action')
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($locations as $product)
                                            <tr class="odd" id="ff{{$product->id}}">
                                                <td class="sorting_1">

                                                    <div class="custom-control custom-checkbox">

                                                        <input type="checkbox" class="custom-control-input"
                                                               name="ids" data-id="{{$product->id}}">
                                                        <label class="custom-control-label" for="customCheck1"></label>

                                                    </div>

                                                </td>

                                                <td>
                                                    <a href="{{ route('dashboard.locations.show', $product->id)}}">{{ $product->name }} </a>
                                                </td>
                                                <td>{{ $product->address ?? '' }}</td>


                                                <td>{{ $product->phone  }}</td>

                                                <td>
                                                    <div>{{ $product->whatsapp }}</div>
                                                </td>

                                                <td>{{ $product->created_at->diffForHumans() ?? '' }}</td>

                                                <td>
                                                    <a href="{{ route('dashboard.locations.edit', $product->id)}}"
                                                       class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('dashboard.locations.destroy', $product->id)}}"
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
                <a href="{{route('dashboard.locations.create')}}" class="btn "> + </a>
            </li>
        </ul>
        <div class="topSell">
            <h6>@lang('locations.plural')</h6>

{{\App\Models\Location::count()}}

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

                'url': "{{route('dashboard.deleteAlllocations')}}",
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
