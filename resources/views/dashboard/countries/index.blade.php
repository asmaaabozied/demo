{{--<x-layout :title="trans('countries.plural')" :breadcrumbs="['dashboard.countries.index']">--}}
{{--    @include('dashboard.countries.partials.filter')--}}

{{--    @component('dashboard::components.table-box')--}}
{{--        @slot('title')--}}
{{--            @lang('countries.actions.list') ({{ $countries->total() }})--}}
{{--        @endslot--}}
{{--        @slot('tools')--}}
{{--            @include('dashboard.countries.partials.actions.create')--}}
{{--        @endslot--}}

{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>@lang('countries.attributes.name')</th>--}}
{{--            <th class="d-none d-md-table-cell">@lang('countries.attributes.code')</th>--}}
{{--            <th class="d-none d-md-table-cell">@lang('countries.attributes.key')</th>--}}
{{--            <th class="d-none d-md-table-cell">@lang('countries.attributes.is_default')</th>--}}
{{--            <th style="width: 160px">...</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @forelse($countries as $country)--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('dashboard.countries.show', $country) }}"--}}
{{--                       class="text-decoration-none text-ellipsis">--}}

{{--                        <img src="{{ $country->getFirstMediaUrl('flags') }}"--}}
{{--                             alt="Product 1"--}}
{{--                             class="img-circle img-size-32 mr-2" style="height: 32px;">--}}
{{--                        {{ $country->name }}--}}
{{--                    </a>--}}
{{--                </td>--}}
{{--                <td class="d-none d-md-table-cell">--}}
{{--                    {{ $country->code }}--}}
{{--                </td>--}}
{{--                <td class="d-none d-md-table-cell">--}}
{{--                    {{ $country->key }}--}}
{{--                </td>--}}
{{--                <td class="d-none d-md-table-cell">--}}
{{--                    @include('dashboard.countries.partials.flags.default')--}}
{{--                </td>--}}

{{--                <td style="width: 160px">--}}
{{--                    @include('dashboard.countries.partials.actions.show')--}}
{{--                    @include('dashboard.countries.partials.actions.edit')--}}
{{--                    @include('dashboard.countries.partials.actions.delete')--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="100" class="text-center">@lang('countries.empty')</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}

{{--        @if($countries->hasPages())--}}
{{--            @slot('footer')--}}
{{--                <div class="d-flex align-items-center justify-content-between">--}}
{{--                    {{ $countries->links() }}--}}
{{--                    <p>@lang('pagination.details', [--}}
{{--                        'from' => 1,--}}
{{--                        'to' => $countries->perPage(),--}}
{{--                        'total' => $countries->total(),--}}
{{--                    ])</p>--}}
{{--                </div>--}}
{{--            @endslot--}}
{{--        @endif--}}
{{--    @endcomponent--}}
{{--</x-layout>--}}
@extends('layouts.vali.master')
@section('title')
    @lang('countries.plural')
@endsection
@section('content')
    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage">
        @include('flash::message')
        <div class="contentDiv">
            <h1 class="page-header">@lang('countries.plural')</h1>

            <div class="col-md-12">
                <div class="topLinks">
                    <a href="?status=0" class="active"> @lang('countries.plural')</a>
                    <a href="?status=1">@lang('site.active')</a>
                    <a href="?status=2"> @lang('site.inactive')</a>
                    <a href="?status=3"> @lang('site.default')</a>

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
                                                           id="customCheck3" name="id[]">
                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                </div>
                                            </th>
{{--                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"--}}
{{--                                                rowspan="1" colspan="1"--}}
{{--                                                aria-label="imageeee: activate to sort column ascending"--}}
{{--                                                style="width: 113px;">@lang('site.code')--}}
{{--                                            </th>--}}

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="name: activate to sort column ascending"
                                                style="width: 78px;">@lang('site.name')
                                            </th>
{{--                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"--}}
{{--                                                rowspan="1" colspan="1"--}}
{{--                                                aria-label="price: activate to sort column ascending"--}}
{{--                                                style="width: 75px;">@lang('site.zpcode')--}}
{{--                                            </th>--}}
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="price: activate to sort column ascending"
                                                style="width: 75px;">@lang('site.created_at')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.default')
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

                                        @foreach($countries as $country)
                                            <tr class="odd" id="ff{{$country->id}}">
                                                <td class="sorting_1">

                                                    <div class="custom-control custom-checkbox">

                                                        <input type="checkbox" class="custom-control-input"
                                                               name="ids" data-id="{{$country->id}}">
                                                        <label class="custom-control-label" for="customCheck1"></label>

                                                    </div>

                                                </td>
{{--                                                <td>{{ $country->code }}</td>--}}


                                                <td>  <a href="{{ route('dashboard.countries.show', $country->id) }}">{{ $country->name }} </a></td>
{{--                                                <td>{{ $country->key }}</td>--}}
                                                <td>{{ $country->created_at->diffForHumans() ?? '' }}</td>
                                                <td>
                                                    <div class="toggle lg addCont col-md-6">
                                                    <input type="checkbox" value="1" name="is_default" @if($country->is_default) checked
                                                            @endif><span
                                                            class="button-indecator"></span>

                                                    </div>
                                                </td>

                                                <td>
                                                    <form action="{{ route('dashboard.countries.status', $country->id) }}"
                                                          method="post" style="display: inline-block">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}

                                                        @if( $country->status==1)
                                                            <button type="submit" class="btn btn-success update btn-sm">
                                                                <i class="fa fa-check"></i> @lang('site.active')
                                                            </button>
                                                        @elseif( $country->status==0)
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-close"></i> @lang('site.inactive')
                                                            </button>
                                                        @endif
                                                    </form>
                                                </td>

                                                <td>
                                                    <a href="{{ route('dashboard.countries.edit', $country->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('dashboard.countries.destroy', $country->id)}}"
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
                <a href="{{route('dashboard.countries.create')}}" class="btn "> + </a>
            </li>
            <li class="dropdown">
                <a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                    <span>@lang('site.status') <i class="fa fa-chevron-down"></i> </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <ul class="dropdown-settings">
                            <li><a href="?status=0" class="active"> @lang('categories.plural')</a></li>

                            <li><a href="?status=1">@lang('site.active')</a>
                            </li>

                            <li><a href="?status=2"> @lang('site.inactive')</a></li>

                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="topSell">
            <h6>@lang('countries.plural')</h6>

            <div class="FiltItm">
                <div class="row">
                    <br>
                    <div class="col-md-6">
                        @lang('countries.plural')
                    </div>
                    <div class="col-md-6 count">
                        {{$countries->count()}}
                    </div>
                </div>
                <br>

                <br>
                <div class="row">
                    <div class="col-md-6">
                        @lang('site.active')
                    </div>
                    <div class="col-md-6 count">
                        {{$actives->count()}}
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-6">
                        @lang('site.inactive')
                    </div>
                    <div class="col-md-6 count">
                        {{$noactives->count()}}
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

                'url': "{{route('dashboard.deleteAllcountries')}}",
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
