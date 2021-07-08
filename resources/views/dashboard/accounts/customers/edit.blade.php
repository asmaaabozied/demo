{{--<x-layout :title="$customer->name" :breadcrumbs="['dashboard.customers.edit', $customer]">--}}
{{--    {{ BsForm::resource('customers')->putModel($customer, route('dashboard.customers.update', $customer), ['files' => true]) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('customers.actions.edit'))--}}

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



    {{ BsForm::resource('customers')->putModel($customer, route('dashboard.customers.update', $customer), ['files' => true]) }}


    <div class="col-sm-offset-3 col-lg-9 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header">@lang('customers.plural') @lang('site.edit')</h1>
        <div class="contentDiv">
            <div class="col-md-12">
                <div class="topLinks">
                    <h5>@lang('site.edit')</h5>
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
                            <input type="text" name="name" value="{{$customer->name}}" }}>
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.last_name')</label>
                            <input type="text" name="lastname" value="{{$customer->lastname}}">
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.email')</label>
                            <input type="text" name="email" value="{{$customer->email}}">
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.phone')</label>
                            <input type="tel" name="phone" value="{{$customer->phone}}">
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.password')</label>
                            <input type="Password" name="password">
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.password_confirmation')</label>
                            <input type="Password" name="password_confirmation">
                        </div>
                        <div class="col-md-6">
                            <div id="app">
                                <label>@lang('site.image')</label>
                                {{ BsForm::image('image')->files($customer->getMediaResource()) }}
                        </div>
                    </div>
                    <div class="proSingPage col-md-12 addCont2">
                        <div class="col-md-12">
                            <label for="" style="font-size: 20px;">@lang('site.edit') @lang('site.address')
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


                        @forelse($addresses as $address)

                            <div class="col-md-12">
                                <div class="proSingPage">
                                    <label for="address">@lang('site.address')</label>
                                    <input type="text" name="address[]" value="{{ $address->address ?? '' }}">
                                    <div class="clearfix"></div>


                                    <label for="">@lang('site.city')</label>
                                    <select name="city_id[]" id="">
                                        @foreach(\App\Models\City::get()->pluck('name2','id') as $key=>$city)
                                            <option value="{{$key}}"
                                                    @if($address->city_id) selected @endif >{{$city}}</option>
                                        @endforeach

                                    </select>
                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.block')</label>
                                    <input type="text" name="block[]" value="{{ $address->block ?? '' }}">


                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.street')</label>
                                    <input type="text" name="street[]" value="{{ $address->street ?? '' }}">

                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.house')</label>
                                    <input type="text" name="house[]" value="{{ $address->house ?? '' }}">
                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.avenue')</label>
                                    <input type="text" name="avenue[]" value="{{ $address->avenue ?? '' }}">

                                </div>
                            </div>

                        @empty
                            <div class="col-md-12">
                                <div class="proSingPage">
                                    <label for="address">@lang('site.address')</label>
                                    <input type="text" name="address[]" >
                                    <div class="clearfix"></div>


                                    <label for="">@lang('site.city')</label>
                                    <select name="city_id[]" id="">
                                        @foreach(\App\Models\City::get()->pluck('name2','id') as $key=>$city)
                                            <option value="{{$key}}"
                                                     >{{$city}}</option>
                                        @endforeach

                                    </select>
                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.block')</label>
                                    <input type="text" name="block[]" >


                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.street')</label>
                                    <input type="text" name="street[]" >

                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.house')</label>
                                    <input type="text" name="house[]" >
                                    <div class="clearfix"></div>
                                    <label for="">@lang('addresses.attributes.avenue')</label>
                                    <input type="text" name="avenue[]" >

                                </div>
                            </div>


                        @endforelse
                    </div>
                    <div id="newRowCust"></div>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">
                    <div class="contentDiv">
                        {{ BsForm::submit()->label(trans('categories.actions.save')) }}
                    </div>

                </div>
            </div>

        </div>


    {{ BsForm::close() }}


@endsection