{{--<x-layout :title="trans('pages.plural')" :breadcrumbs="['dashboard.pages.index']">--}}
{{--    @include('dashboard.pages.partials.filter')--}}

{{--    @component('dashboard::components.table-box')--}}
{{--        @slot('title', trans('pages.actions.list'))--}}
{{--        @slot('tools')--}}
{{--            @include('dashboard.pages.partials.actions.create')--}}
{{--        @endslot--}}

{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>@lang('pages.attributes.name')</th>--}}
{{--            <th style="width: 160px">...</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @forelse($pages as $page)--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('dashboard.pages.show', $page) }}"--}}
{{--                       class="text-decoration-none text-ellipsis">--}}
{{--                        {{ $page->name }}--}}
{{--                    </a>--}}
{{--                </td>--}}

{{--                <td style="width: 160px">--}}
{{--                    @include('dashboard.pages.partials.actions.show')--}}
{{--                    @include('dashboard.pages.partials.actions.edit')--}}
{{--                    @include('dashboard.pages.partials.actions.delete')--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="100" class="text-center">@lang('pages.empty')</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}

{{--        @if($pages->hasPages())--}}
{{--            @slot('footer')--}}
{{--                {{ $pages->links() }}--}}
{{--            @endslot--}}
{{--        @endif--}}
{{--    @endcomponent--}}
{{--</x-layout>--}}
@extends('layouts.vali.master')
@section('title')
    @lang('pages.plural')
@endsection
@section('content')
    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage">
        @include('flash::message')
        <div class="contentDiv">
            <h1 class="page-header">@lang('pages.plural')({{$pages->count()}}) </h1>

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
                                                           id="customCheck3" name="id[]">
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
                                                aria-label="imageeee: activate to sort column ascending"
                                                style="width: 113px;">@lang('site.name')
                                            </th>




                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Category: activate to sort column ascending"
                                                style="width: 116px;">@lang('site.date')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Category: activate to sort column ascending"
                                                style="width: 116px;">@lang('site.default')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Category: activate to sort column ascending"
                                                style="width: 116px;">@lang('site.url')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.action')
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($pages as $customer)
                                            <tr class="odd" id="ff{{$customer->id}}">
                                                <td class="sorting_1">

                                                    <div class="custom-control custom-checkbox">

                                                        <input type="checkbox" class="custom-control-input"
                                                               name="ids" data-id="{{$customer->id}}">
                                                        <label class="custom-control-label" for="customCheck1"></label>

                                                    </div>

                                                </td>
                                                <td>
                                                    <img src="{{ $customer->getFirstMediaUrl() }}"
                                                         alt="" width="50px" height="50px" class="img-circle img-size-32 mr-2">

                                                </td>
                                                <td> <a href="{{ route('dashboard.pages.show', $customer->id)}}">{{$customer->name}}</a></td>

                                                <td>
                                                    <div class="qtyInpt">{{ $customer->created_at->diffForHumans() ?? '' }}</div>
                                                </td>

                                                <td>
                                                    <div class="toggle lg addCont col-md-6">
                                                        <input type="checkbox" value="1" name="is_default" @if($customer->status) checked
                                                                @endif><span
                                                                class="button-indecator"></span>

                                                    </div>

                                                </td>

                                                <td>



                                                    {{$customer->url ?? ''}}
                                                </td>


                                                <td>
                                                    <a href="{{ route('dashboard.pages.edit', $customer->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('dashboard.pages.destroy', $customer->id)}}"
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
                <a href="{{route('dashboard.pages.create')}}" class="btn "> + </a>
            </li>
        </ul>
        <div class="topSell">
            <h6>@lang('site.total')</h6>

            <div class="FiltItm">
                <div class="row">
                    <br>
                    <div class="col-md-6">
                        @lang('pages.plural')
                    </div>
                    <div class="col-md-6 count">
                        {{$pages->count()}}
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

                'url': "{{route('dashboard.deleteAllpages')}}",
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
