{{--<x-layout :title="trans('sizes.actions.create')" :breadcrumbs="['dashboard.sizes.create']">--}}
{{--    {{ BsForm::resource('sizes')->post(route('dashboard.sizes.store')) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('sizes.actions.create'))--}}

{{--        @include('dashboard.sizes.partials.form')--}}

{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('sizes.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}
{{--</x-layout>--}}

@extends('layouts.vali.master')
@section('title')
    @lang('sizes.plural')
@endsection
@section('content')

        {{ BsForm::resource('sizes')->post(route('dashboard.sizes.store')) }}
    <div class="row">
        <div class="col-md-12">

            <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">
                {{--        <nav aria-label="breadcrumb">--}}
                {{--            <ol class="breadcrumb">--}}
                {{--                <li class="breadcrumb-item">--}}
                {{--                    <a href="#">Home</a></li>--}}
                {{--                <li class="breadcrumb-item">--}}
                {{--                    <a href="#">Library</a></li>--}}
                {{--                <li class="breadcrumb-item active" aria-current="page">Data</li>--}}
                {{--            </ol>--}}
                {{--        </nav>--}}
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
                            <input type="text" name="work_hours_form">
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('sizes.work_hours')</label>
                            <input type="text" name="work_hours">
                        </div>


                        <div class="col-md-6">
                            <label for="">@lang('site.Delivery_hours_form')</label>
                            <input type="text" name="Delivery_hours_form">
                        </div>

                        <div class="col-md-6">
                            <label for="">@lang('sizes.Delivery_hours')</label>
                            <input type="text" name="Delivery_hours">
                        </div>



                    </div>


                </div>
            </div>


        </div>
    </div>




    <div class="row">
        <div class="col-md-12">
            <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">
                <div class="contentDiv">
                    {{ BsForm::submit()->label(trans('products.actions.save')) }}
                </div>

            </div>
        </div>

    </div>



    {{ BsForm::close() }}


@endsection

