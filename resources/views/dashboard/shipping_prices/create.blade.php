{{--<x-layout :title="trans('shipping_prices.actions.create')" :breadcrumbs="['dashboard.shipping_prices.create']">--}}
{{--    {{ BsForm::resource('shipping_prices')->post(route('dashboard.shipping_prices.store')) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('shipping_prices.actions.create'))--}}

{{--        @include('dashboard.shipping_prices.partials.form')--}}

{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('shipping_prices.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}
{{--</x-layout>--}}

@extends('layouts.vali.master')
@section('title')
    @lang('shipping_companies.plural')
@endsection
@section('content')
    {{ BsForm::resource('shipping_prices')->post(route('dashboard.shipping_prices.store')) }}

    <div class="col-sm-offset-3 col-lg-9 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header">@lang('site.add') @lang('shipping_companies.plural')</h1>
        <div class="contentDiv">
            <div class="col-md-12">
                <div class="topLinks">
                    <h5>@lang('site.add')</h5>
                </div>
                <div class="ppR">
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown delRed btn-primary" style="background-color: #66C2A5;">
                            <a onclick="history.back()" class="btn "><i class="fa fa-arrow-left"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
            @include('dashboard.errors')

            <div class="row">

                <div class="col-md-12">
                    <div class="proSingPage col-md-12">
                        @bsMultilangualFormTabs

                        <div class="col-md-12">

                            {{ BsForm::text('name')->label(trans('site.name')) }}
                        </div>
                        @endBsMultilangualFormTabs

                        <div class="col-md-6">
                            <label for="">@lang('site.rate')</label>
                            <input type="number" name="first_price">

                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.other_rate')</label>
                            <input type="number" name="second_price">
                        </div>
                        <div class="col-md-12">
                            <label for="">@lang('site.country')</label>
                            <select name="country_id" id="" required>
                                @foreach(\App\Models\Country::get()->pluck('name','id') as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="toggle lg addCont col-md-6">
                            <label>
                                <input type="checkbox" checked="" name="is_defaut" value="1"><span
                                        class="button-indecator"></span>
                                <span>@lang('site.default')</span>
                            </label>
                        </div>
                        <div class="toggle lg addCont col-md-6">
                            <label>
                                <input type="checkbox" checked="" name="status" value="1"> <span class="button-indecator"></span>
                                <span>@lang('site.status') </span>
                            </label>
                        </div>
                    </div>
                    <div class="proSingPage col-md-12">
                        <div class="col-md-12">
                            <div id="app">
                                <label>@lang('site.image')</label>
                                {{ BsForm::image('image') }}
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="dropdown delRed">
                        {{ BsForm::submit()->label(trans('shipping_prices.actions.save')) }}

                        {{--                            <a class="pull-right btn" data-toggle="dropdown" href="#">create</a>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection