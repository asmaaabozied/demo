{{--<x-layout :title="$customer->name" :breadcrumbs="['dashboard.customers.show', $customer]">--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('bodyClass', 'p-0')--}}

{{--        <table class="table table-striped table-middle">--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <th width="200">@lang('customers.attributes.name')</th>--}}
{{--                <td>{{ $customer->name }}</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th width="200">@lang('customers.attributes.email')</th>--}}
{{--                <td>{{ $customer->email }}</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th width="200">@lang('customers.attributes.phone')</th>--}}
{{--                <td>{{ $customer->phone }}</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th width="200">@lang('customers.attributes.avatar')</th>--}}
{{--                <td>--}}
{{--                    <img src="{{ $customer->getAvatar() }}"--}}
{{--                         style="width: 200px"--}}
{{--                         class="img img-size-64"--}}
{{--                         alt="{{ $customer->name }}">--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}

{{--        @slot('footer')--}}
{{--            @include('dashboard.accounts.customers.partials.actions.edit')--}}
{{--            @include('dashboard.accounts.customers.partials.actions.delete')--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    @include('dashboard.accounts.addresses.index')--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('customers.plural')
@endsection
@section('content')





    <div class="col-sm-offset-3 col-lg-9 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header">@lang('customers.plural') @lang('site.show')</h1>
        <div class="contentDiv">
            <div class="col-md-12">
                <div class="topLinks">
                    <h5>@lang('site.show')</h5>
                </div>
                <div class="ppR">
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown delRed btn-primary" style="background-color: #66C2A5;">
                            <a href="" class="btn "  onclick="history.back();"><i class="fa fa-arrow-left"></i></a>
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
                            <input type="text" name="name" value="{{ $customer->name }}">
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.last_name')</label>
                            <input type="text" name="lastname" value="{{ $customer->lastname }}">
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.email')</label>
                            <input type="text" name="email" value="{{ $customer->email }}">
                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.phone')</label>
                            <input type="tel" name="phone" value="{{ $customer->phone }}">
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
                                {{ BsForm::image('image')->files($customer->getMediaResource()) }}
                            </div>

                        </div>
                    </div>
                    @foreach($addresses as $address)
                    <div class="proSingPage col-md-12 addCont2">
                        <div class="col-md-12">
                            <label for="" style="font-size: 20px;">@lang('site.show') @lang('site.address')
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


                        <div class="col-md-12">
                            <div class="proSingPage">
                                <label for="address">@lang('site.address')</label>
                                <input type="text" name="address[]" value="{{ $address->address ?? '' }}">
                                <div class="clearfix"></div>
                                <label for="">@lang('site.city')</label>
                              <input type="text" value="{{ $address->city->name2 ?? '' }}">
                                <div class="clearfix"></div>
                                <label for="">@lang('addresses.attributes.block')</label>
                                <input type="text" name="block[]" value="{{ $address->block ?? '' }}" >


                                <div class="clearfix"></div>
                                <label for="">@lang('addresses.attributes.street')</label>
                                <input type="text" name="street[]" value="{{ $address->street ?? '' }}">

                                <div class="clearfix"></div>
                                <label for="">@lang('addresses.attributes.house')</label>
                                <input type="text" name="house[]" value="{{ $address->house ?? '' }}">


                            </div>
                        </div>

{{--                        <div class="row">--}}

{{--                            <div class="col-md-2">--}}
{{--                                {{ BsForm::submit()->label(trans('customers.actions.save')) }}--}}


{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    @endforeach
                    <div id="newRowCust"></div>


                    {{--                        <div class="proSingPage centralize col-md-10">--}}
                    {{--                            <h5>Saved Shipping Price</h5>--}}
                    {{--                            <div class="col-md-12">--}}
                    {{--                                <div id="inputFormRow">--}}
                    {{--                                    <div class="input-group mb-3">--}}
                    {{--                                        <input type="text" name="" class="form-control m-input" autocomplete="off"--}}
                    {{--                                               value="Kuwait city, street 1, Block 1. Kuwait">--}}
                    {{--                                        <div class="input-group-append">--}}
                    {{--                                            <button id="removeRow" type="button" class="btn">--}}
                    {{--                                                <i class="fa fa-times"></i>--}}
                    {{--                                            </button>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <br>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                            <div class="col-md-12">--}}
                    {{--                                <div id="inputFormRow">--}}
                    {{--                                    <div class="input-group mb-3">--}}
                    {{--                                        <input type="text" name="" class="form-control m-input" autocomplete="off"--}}
                    {{--                                               value="Kuwait city, street 1, Block 1. Kuwait">--}}
                    {{--                                        <div class="input-group-append">--}}
                    {{--                                            <button id="removeRow" type="button" class="btn">--}}
                    {{--                                                <i class="fa fa-times"></i>--}}
                    {{--                                            </button>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <br>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                            <div class="col-md-12">--}}
                    {{--                                <div id="inputFormRow">--}}
                    {{--                                    <div class="input-group mb-3">--}}
                    {{--                                        <input type="text" name="" class="form-control m-input" autocomplete="off"--}}
                    {{--                                               value="Kuwait city, street 1, Block 1. Kuwait">--}}
                    {{--                                        <div class="input-group-append">--}}
                    {{--                                            <button id="removeRow" type="button" class="btn">--}}
                    {{--                                                <i class="fa fa-times"></i>--}}
                    {{--                                            </button>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <br>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                            <div class="dropdown btn-primary delRed">--}}

                    {{--                                            {{ BsForm::submit()->label(trans('customers.actions.save')) }}--}}

                    {{--                                <a class="pull-right btn" data-toggle="dropdown" href="#">create</a>--}}
                    {{--                            </div>--}}

                    {{--                            <div class="row">--}}

                    {{--                                <div class="col-md-2">--}}
                    {{--                                    {{ BsForm::submit()->label(trans('customers.actions.save')) }}--}}


                    {{--                                </div>--}}
                    {{--                            </div>--}}


                    {{--                            <br>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </div>--}}
                </div>
            </div>
        </div>
    </div>



    @endsection