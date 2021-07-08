{{--<x-layout :title="trans('customers.actions.create')" :breadcrumbs="['dashboard.customers.create']">--}}
{{--    {{ BsForm::resource('customers')->post(route('dashboard.customers.store')) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('customers.actions.create'))--}}

{{--        @include('dashboard.accounts.customers.partials.form')--}}

{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('customers.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}
{{--</x-layout>--}}
@extends('layouts.vali.master')
@section('title')
    @lang('customers.plural')
@endsection
@section('content')



    {{ BsForm::resource('customers')->post(route('dashboard.customers.store')) }}


    <div class="col-sm-offset-3 col-lg-9 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header">@lang('customers.plural') @lang('site.add')</h1>
        <div class="contentDiv">
            <div class="col-md-12">
                <div class="topLinks">
                    <h5>@lang('site.add')</h5>
                </div>
                <div class="ppR">
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown delRed btn-primary" style="background-color: #66C2A5;">
                            <a href="" class="btn " onclick="history.back();"><i class="fa fa-arrow-left"></i></a>
                        </li>

                    </ul>
                </div>
            </div>

            @include('dashboard.errors')

            <div class="row">
                <div class="col-md-12">
                    <div class="proSingPage col-md-12">
                        <div class="col-md-6">

                            <label for="">@lang('site.first_name')</label>
                            <input type="text" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.last_name')</label>
                            <input type="text" name="lastname" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.email')</label>
                            <input type="text" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.phone')</label>
                            <input type="tel" name="phone" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.password')</label>
                            <input type="Password" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.password_confirmation')</label>
                            <input type="Password" name="password_confirmation" required>
                        </div>
                        <div class="col-md-6">


                            <div id="app">
                                <label>@lang('site.image')</label>
                                {{ BsForm::image('image') }}
                            </div>
                        </div>
                    </div>
                    <div class="proSingPage col-md-12 addCont2">
                        <div class="col-md-12">
                            <label for="" style="font-size: 20px;">@lang('site.add') @lang('site.address')
                                <button id="addRowCust" type="button" class="btn"><i class="fa fa-plus"></i>
                                </button>
                            </label>
                            <div id="inputFormRow">
                                <div class="input-group mb-3">
                                    <input type="text" name="" class="form-control m-input" autocomplete="off"
                                           placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="copyThis">
                            <div class="col-md-12">
                                <div class="proSingPage">
                                    <label for="address">@lang('site.address')</label>
                                    <input type="text" name="address[]">
                                    <div class="clearfix"></div>
                                    <label for="">@lang('site.city')</label>
                                    <select name="city_id[]" id="">
                                        @foreach(\App\Models\City::get()->pluck('name2','id') as $key=>$city)
                                            <option value="{{$key}}">{{$city}}</option>
                                        @endforeach

                                    </select>
                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.block')</label>
                                    <input type="text" name="block[]">


                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.street')</label>
                                    <input type="text" name="street[]">

                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.house')</label>
                                    <input type="text" name="house[]">


                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.avenue')</label>
                                    <input type="text" name="avenue[]">

                                </div>
                            </div>

                        </div>

                    </div>
                    <div id="newRowCust"></div>


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
{{--@section('scripts')--}}


{{--    <script>--}}


{{--        $(".addCont2 #addRowCust").click(function () {--}}
{{--            var html = '<div class="proSingPage col-md-12 addCont2">';--}}
{{--            html += $(".copyThis").html();--}}
{{--            html += '</div>';--}}

{{--            $('#newRowCust').append(html);--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}