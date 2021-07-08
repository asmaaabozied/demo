{{--<x-layout :title="$size->name" :breadcrumbs="['dashboard.sizes.show', $size]">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            @component('dashboard::components.box')--}}
{{--                @slot('class', 'p-0')--}}
{{--                @slot('bodyClass', 'p-0')--}}

{{--                <table class="table table-striped table-middle">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('sizes.attributes.name')</th>--}}
{{--                        <td>{{ $size->name }}</td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}

{{--                @slot('footer')--}}
{{--                    @include('dashboard.sizes.partials.actions.edit')--}}
{{--                    @include('dashboard.sizes.partials.actions.delete')--}}
{{--                @endslot--}}
{{--            @endcomponent--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('sizes.plural')
@endsection
@section('content')

    {{ BsForm::resource('sizes')->putModel($size, route('dashboard.sizes.update', $size)) }}
    <div class="row">
        <div class="col-md-12">

            <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">

                <h1 class="page-header">   @lang('sizes.plural')</h1>
                <div class="contentDiv">
                    <div class="col-md-12">
                        <div class="ppR">
                            <ul class="pull-right panel-settings panel-button-tab-right">
                                <li class="dropdown delRed btn-primary" >
                                    <button  class="btn btn-primary "  onclick="history.back();"><i class="fa fa-arrow-left"></i></button>
                                </li>

                            </ul>
                        </div>
                    </div>

                    @include('dashboard.errors')



                    <div class="proSingPage col-md-12">

                        <div class="col-md-6">
                            <label for="">@lang('site.work_hours_form')</label>
                            <input type="text" name="work_hours_form" value="{{$size->work_hours_form}}">
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('sizes.work_hours')</label>
                            <input type="text" name="work_hours" value="{{$size->work_hours}}">
                        </div>


                        <div class="col-md-6">
                            <label for="">@lang('site.Delivery_hours_form')</label>
                            <input type="text" name="Delivery_hours_form" value="{{$size->Delivery_hours_form}}">
                        </div>

                        <div class="col-md-6">
                            <label for="">@lang('sizes.Delivery_hours')</label>
                            <input type="text" name="Delivery_hours" value="{{$size->Delivery_hours}}">
                        </div>



                    </div>


                </div>
            </div>


        </div>
    </div>








    {{ BsForm::close() }}


@endsection