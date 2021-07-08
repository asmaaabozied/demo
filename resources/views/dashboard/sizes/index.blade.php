

{{--<x-layout :title="trans('sizes.plural')" :breadcrumbs="['dashboard.sizes.index']">--}}
{{--    @include('dashboard.sizes.partials.filter')--}}

{{--    @component('dashboard::components.table-box')--}}
{{--        @slot('title', trans('sizes.actions.list'))--}}
{{--        @slot('tools')--}}
{{--            @include('dashboard.sizes.partials.actions.create')--}}
{{--        @endslot--}}

{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>@lang('sizes.attributes.name')</th>--}}
{{--            <th style="width: 160px">...</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @forelse($sizes as $size)--}}
{{--            <tr>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('dashboard.sizes.show', $size) }}"--}}
{{--                       class="text-decoration-none text-ellipsis">--}}
{{--                        {{ $size->name }}--}}
{{--                    </a>--}}
{{--                </td>--}}

{{--                <td style="width: 160px">--}}
{{--                    @include('dashboard.sizes.partials.actions.show')--}}
{{--                    @include('dashboard.sizes.partials.actions.edit')--}}
{{--                    @include('dashboard.sizes.partials.actions.delete')--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @empty--}}
{{--            <tr>--}}
{{--                <td colspan="100" class="text-center">@lang('sizes.empty')</td>--}}
{{--            </tr>--}}
{{--        @endforelse--}}

{{--        @if($sizes->hasPages())--}}
{{--            @slot('footer')--}}
{{--                {{ $sizes->links() }}--}}
{{--            @endslot--}}
{{--        @endif--}}
{{--    @endcomponent--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('sizes.plural')
@endsection
@section('content')
    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage">
        @include('flash::message')
        <div class="contentDiv">
            <h1 class="page-header">@lang('sizes.plural')</h1>
            <div class="col-md-12">

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
                                                style="width: 113px;">@lang('site.work_hours_form')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="sku: activate to sort column ascending"
                                                style="width: 88px;">@lang('sizes.work_hours')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="imageeee: activate to sort column ascending"
                                                style="width: 113px;">@lang('site.Delivery_hours_form')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="sku: activate to sort column ascending"
                                                style="width: 88px;">@lang('sizes.Delivery_hours')
                                            </th>

                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="sku: activate to sort column ascending"
                                                style="width: 88px;">@lang('site.created_at')
                                            </th>
                                            <th scope="col" class="sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 112px;">@lang('site.action')
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($sizes as $product)
                                            <tr class="odd" id="ff{{$product->id}}">
                                                <td class="sorting_1">

                                                    <div class="custom-control custom-checkbox">

                                                        <input type="checkbox" class="custom-control-input"
                                                               name="ids" data-id="{{$product->id}}" >
                                                        <label class="custom-control-label" for="customCheck1"></label>

                                                    </div>

                                                </td>


                                                <td>{{ $product->work_hours_form ?? '' }}</td>

                                                <td>
                                                    <a href="{{ route('dashboard.sizes.show', $product->id)}}">{{ $product->work_hours  ?? ''}} </a>
                                                </td>

                                                <td>{{ $product->Delivery_hours_form ?? '' }}</td>

                                                <td>{{ $product->Delivery_hours ?? '' }}</td>


                                                <td>{{ $product->created_at->diffForHumans() ?? '' }}</td>


                                                <td>
                                                    <a href="{{ route('dashboard.sizes.edit', $product->id)}}"
                                                       class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('dashboard.sizes.destroy', $product->id)}}"
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
                <a href="{{route('dashboard.sizes.create')}}" class="btn "> + </a>
            </li>
        </ul>
        <div class="topSell">
            <h6>@lang('sizes.plural')</h6>
         {{\App\Models\Size::count()}}

        </div>
    </div>




@endsection

