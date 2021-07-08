{{--<x-layout :title="trans('admins.plural')" :breadcrumbs="['dashboard.admins.index']">--}}
{{--    @include('dashboard.accounts.admins.partials.filter')--}}
{{--    @component('dashboard::components.table-box')--}}

{{--        @slot('title', trans('admins.actions.list'))--}}

{{--        @slot('tools')--}}
{{--            @include('dashboard.accounts.admins.partials.actions.create')--}}
{{--        @endslot--}}

{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>@lang('admins.attributes.name')</th>--}}
{{--            <th class="d-none d-md-table-cell">@lang('admins.attributes.email')</th>--}}
{{--            <th>@lang('admins.attributes.phone')</th>--}}
{{--            <th>@lang('admins.attributes.created_at')</th>--}}
{{--            <th style="width: 160px">...</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @forelse($admins as $admin)--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('dashboard.admins.show', $admin) }}"--}}
{{--                       class="text-decoration-none text-ellipsis">--}}
{{--                            <span class="index-flag">--}}
{{--                            @include('dashboard.accounts.admins.partials.flags.svg')--}}
{{--                            </span>--}}
{{--                        <img src="{{ $admin->getAvatar() }}"--}}
{{--                             alt="Product 1"--}}
{{--                             class="img-circle img-size-32 mr-2">--}}
{{--                        {{ $admin->name }}--}}
{{--                    </a>--}}
{{--                </td>--}}

{{--                <td class="d-none d-md-table-cell">--}}
{{--                    {{ $admin->email }}--}}
{{--                </td>--}}
{{--                <td>{{ $admin->phone }}</td>--}}
{{--                <td>{{ $admin->created_at->format('Y-m-d') }}</td>--}}

{{--                <td style="width: 160px">--}}
{{--                    @include('dashboard.accounts.admins.partials.actions.show')--}}
{{--                    @include('dashboard.accounts.admins.partials.actions.edit')--}}
{{--                    @include('dashboard.accounts.admins.partials.actions.delete')--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="100" class="text-center">@lang('admins.empty')</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}

{{--        @if($admins->hasPages())--}}
{{--            @slot('footer')--}}
{{--                {{ $admins->links() }}--}}
{{--            @endslot--}}
{{--        @endif--}}
{{--    @endcomponent--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('admins.plural')
@endsection
@section('content')
    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage">
        @include('flash::message')
        <div class="contentDiv">
            <h1 class="page-header">@lang('admins.plural')({{$admins->count()}}) </h1>

            <div class="col-md-12">
                <div class="ppR">
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown delRed btn-danger">
                            <a href="" class="btn " id="deleteAll"> @lang('site.delete')</a>
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
                                                aria-label="sku: activate to sort column ascending"
                                                style="width: 88px;">@lang('site.name')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="name: activate to sort column ascending"
                                                style="width: 78px;">@lang('site.email')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="price: activate to sort column ascending"
                                                style="width: 75px;">@lang('site.phone')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Category: activate to sort column ascending"
                                                style="width: 116px;">@lang('site.date')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.action')
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($admins as $customer)
                                            <tr class="odd" id="ff{{$customer->id}}">
                                                <td class="sorting_1">

                                                    <div class="custom-control custom-checkbox">

                                                        <input type="checkbox" class="custom-control-input"
                                                               name="ids" data-id="{{$customer->id}}" >
                                                        <label class="custom-control-label" for="customCheck1"></label>

                                                    </div>

                                                </td>
                                                <td>
                                                    <img src="{{ $customer->getFirstMediaUrl() }}"
                                                         alt="{{ $customer->name }}" width="50" height="50" class="img-circle img-size-32 mr-2">
{{--                                                    <img src="{{ $customer->getAvatar() }}"--}}
{{--                                                         alt="" width="30px" height="30px" class="img-circle img-size-32 mr-2">--}}

                                                </td>
                                                <td> <a href="{{ route('dashboard.admins.show', $customer->id)}}">{{$customer->name}}</a></td>

                                                <td>{{ $customer->email }}</td>
                                                <td>{{ $customer->phone  }}</td>
                                                <td>
                                                    <div class="qtyInpt">{{ $customer->created_at->diffForHumans() ?? '' }}</div>
                                                </td>


                                                <td>
                                                    <a href="{{ route('dashboard.admins.edit', $customer->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('dashboard.admins.destroy', $customer->id)}}"
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
                <a href="{{route('dashboard.admins.create')}}" class="btn "> + </a>
            </li>
            <li class="dropdown">
                <a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                    <span>today <i class="fa fa-chevron-down"></i> </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <ul class="dropdown-settings">
                            <li><a href="#">
                                    <em class="fa fa-cog"></em> Settings 1
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <em class="fa fa-cog"></em> Settings 2
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="#">
                                    <em class="fa fa-cog"></em> Settings 3
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="topSell">
            <h6>@lang('site.total')</h6>

            <div class="FiltItm">
                <div class="row">
                    <br>
                    <div class="col-md-6">
                        @lang('admins.plural')
                    </div>
                    <div class="col-md-6 count">
                        {{$admins->count()}}
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

                'url': "{{route('dashboard.deleteAlladmins')}}",
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

