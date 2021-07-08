{{--<x-layout :title="trans('orders.actions.create')" :breadcrumbs="['dashboard.orders.create']">--}}
{{--    {{ BsForm::resource('orders')->post(route('dashboard.orders.store')) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('orders.actions.create'))--}}

{{--        @include('dashboard.orders.partials.form')--}}

{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('orders.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('orders.plural')
@endsection
@section('content')
    {{ BsForm::resource('orders')->post(route('dashboard.orders.store')) }}


    <div class="col-sm-offset-3 col-lg-9 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header">@lang('site.add') @lang('orders.plural')</h1>
        <div class="contentDiv">
            <div class="col-md-12">
                <div class="topLinks">
                    <h5>@lang('site.add')</h5>
                </div>
                <div class="ppR">
                    <ul class="pull-right panel-settings panel-button-tab-right">
                        <li class="dropdown delRed btn-primary" style="background-color: #66C2A5;">
                            <a class="btn " onclick="history.back();"><i class="fa fa-arrow-left"></i></a>
                        </li>
                        {{--                        <li class="dropdown setIco">--}}
                        {{--                            <a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">--}}
                        {{--                                <span><i class="fa fa-cog"></i> <i class="fa fa-chevron-down"></i></span>--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}

                    </ul>
                </div>
            </div>
            @include('dashboard.errors')
            <div class="row">
                <div class="col-md-12">

                    <div class="proSingPage col-md-12">
                        <div class="col-md-6">

                            {{ BsForm::text('name')->inlineValidation(false) }}

                        </div>
                        <div class="col-md-6">

                            {{ BsForm::text('country')->inlineValidation(true) }}

                        </div>

                        <div class="col-md-6">

                            {{ BsForm::text('address')->inlineValidation(true) }}

                        </div>
                        <div class="col-md-6">
                            {{ BsForm::text('discount')->inlineValidation(true) }}
                        </div>
                        <div class="col-md-6">
                            {{ BsForm::text('opened_at')->inlineValidation(true) }}

                        </div>

                        <div class="col-md-6">
                            <label>@lang('cities.attributes.shipping_price')</label>
                            <input type="number" name="shipping_price2" class="form-control m-input" autocomplete="off"
                                   placeholder="" required>


                        </div>
                        <div class="col-md-6">
                            <label>@lang('site.total')</label>
                            <input type="number" name="total" class="form-control m-input"
                                   autocomplete="off" placeholder="" required>
                        </div>


                        <div class="col-md-6">
                            <label>@lang('orders.attributes.payment_method')</label>
                            <input type="text" name="payment_method" class="form-control m-input"
                                   autocomplete="off" placeholder="" required>
                        </div>

                        <div class="col-md-6">
                            <label>@lang('orders.attributes.user_id')</label>
                            <select name="user_id" class="form-control js-example-basic-multiple" required>
                                @foreach(\App\Models\User::get()->pluck('name','id') as $key=>$user)
                                    <option value="{{$key}}">{{$user}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="toggle lg addCont col-md-6">
                            <label>
                                @lang('site.status')
                            </label>
                            <select name="status" class="form-control js-example-basic-multiple" required>

                                <option value="Pending">@lang('site.Pending')</option>
                                <option value="Delivered">@lang('site.Delivered')</option>
                                <option value="Cancelled">@lang('site.Cancelled')</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            {{ BsForm::textarea('gift_message')->rows(3)->inlineValidation(true) }}


                        </div>
                    </div>
                    <div class="proSingPage col-md-12 addCont2">
                        <div class="col-md-12">
                            <label for="" style="font-size: 20px;">@lang('site.add') @lang('products.plural')
                                <button id="addRowC" type="button" class="btn"><i class="fa fa-plus"></i></button>
                            </label>
                            <div id="inputFormRow">
                                <div class="input-group mb-3">

                                    <div class="proSingPage col-md-12">

                                        <div class="col-md-12">
                                            <label>@lang('site.name_en')</label>
                                            <input type="text" name="name:en[]" >
                                            {{--                                            {{ BsForm::text('name[]')->value($item->name ?? '') }}--}}
                                        </div>
                                        <div class="col-md-12">
                                            <label>@lang('site.name_ar')</label>
                                            <input type="text" name="name:ar[]" >
                                            {{--                                            {{ BsForm::text('name[]')->value($item->name ?? '') }}--}}
                                        </div>

                                    </div>


                                    <div class="proSingPage col-md-12">


                                        <div class="col-md-12">
                                            <label for="">@lang('site.sku')</label>
                                            <input type="text" name="sku[]">
                                        </div>
                                        <div class="col-md-12">
                                            <label>@lang('brands.singular')</label>
                                            <select class="form-control js-example-basic-multiple" name="brand_id[]"
                                                    value="{{ $product->brand_id ?? old('brand_id') }}">
                                                @foreach(\App\Models\Brand::get()->pluck('name','id') as $key=>$value)
                                                    <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="col-md-12">
                                            <label>@lang('categories.singular')</label>
                                            <select class="form-control js-example-basic-multiple" name="category_id"
                                                    value="{{ $product->category_id ?? old('category_id') }}" required>
                                                @foreach(\App\Models\Category::get()->pluck('name','id') as $key=>$value)
                                                    <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-12">
                                            <label>@lang('product_types.plural')</label>
                                            <select class="form-control js-example-basic-multiple"
                                                    name="producttype_id[]"
                                                    required>
                                                @foreach(\App\Models\Producttype::get()->pluck('name','id') as $key=>$value)
                                                    <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="">@lang('site.price')</label>
                                            <input type="number" name="price[]">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">@lang('site.price2')</label>
                                            <input type="number" name="price2[]">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">@lang('site.quantity')</label>
                                            <input type="number" name="quantity[]">
                                        </div>
                                    </div>
                                    <div class="input-group-append">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="newRowC">


                    </div>
                </div>
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