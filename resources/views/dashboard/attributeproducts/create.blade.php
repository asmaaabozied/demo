{{--<x-layout :title="trans('products_attribute.actions.create')" :breadcrumbs="['dashboard.attributeproducts.create']">--}}
{{--    {{ BsForm::resource('attributeproducts')->post(route('dashboard.attributeproducts.store')) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', $title ?? trans('products_attribute.actions.create'))--}}


{{--        @include('dashboard.errors')--}}
{{--        @bsMultilangualFormTabs--}}
{{--        {{ BsForm::text('name')->label(trans('products_attribute.attributes.name'))->name('name') }}--}}

{{--        {{ BsForm::textarea('description')->attribute('class', 'form-control textarea')->label(trans('products_attribute.attributes.description'))->name('description') }}--}}

{{--        @endBsMultilangualFormTabs--}}

{{--                {{ BsForm::text('size')->label(trans('products_attribute.attributes.size'))->name('size') }}--}}

{{--                {{ BsForm::text('price')->label(trans('products_attribute.attributes.price'))->name('price') }}--}}


{{--                <div class="form-group">--}}
{{--                        <label>@lang('product_types.plural')</label>--}}
{{--                        <select class="form-control" name="producttype_id" value="{{ $product->producttype_id ?? old('producttype_id') }}" required>--}}
{{--                               @foreach(\App\Models\Producttype::get()->pluck('name','id') as $key=>$value)--}}
{{--                                <option value="{{$key}}">{{$value}}</option>--}}
{{--                                @endforeach--}}
{{--                        </select>--}}
{{--                </div>--}}

{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('products_attribute.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}


{{--</x-layout>--}}

@extends('layouts.vali.master')
@section('title')
    @lang('products_attribute.plural')
@endsection
@section('content')


        {{ BsForm::resource('attributeproducts')->post(route('dashboard.attributeproducts.store')) }}
    <div class="row">
        <div class="col-md-12">
            <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">

                <h1 class="page-header"> @lang('products_attribute.plural')</h1>
                <div class="contentDiv">
                    <div class="col-md-12">
                        <div class="topLinks">

                        </div>
                        <div class="ppR">
                            <ul class="pull-right panel-settings panel-button-tab-right">
                                <li class="dropdown delRed btn-primary">
                                    <button class="btn btn-primary " onclick="history.back();"><i
                                                class="fa fa-arrow-left"></i></button>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <br>
                    @include('dashboard.errors')
                    <div class="row">

                        @bsMultilangualFormTabs


                        <div class="proSingPage col-md-12">

                            <div class="col-md-12">
                                {{ BsForm::text('name')->label(trans('site.name')) }}

                            </div>
                        </div>

                        <div class="proSingPage col-md-12">

                            <div class="col-md-12">
                                {{ BsForm::textarea('description')->attribute('class', 'form-control textarea')->label(trans('products_attribute.attributes.description'))->name('description') }}

                            </div>
                        </div>
                        @endBsMultilangualFormTabs


                        <div class="proSingPage col-md-6">


                            {{ BsForm::text('size')->label(trans('products_attribute.attributes.size'))->name('size') }}


                        </div>

                        <div class="proSingPage col-md-6">


                            {{ BsForm::text('price')->label(trans('products_attribute.attributes.price'))->name('price') }}

                        </div>

                        <div class="proSingPage col-md-12">
                            <label>@lang('products.plural')</label>
                            <select class="form-control js-example-basic-multiple" name="product_id" required>
                                @foreach(\App\Models\Product::get()->pluck('name','id') as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
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
                    {{ BsForm::submit()->label(trans('categories.actions.save')) }}
                </div>

            </div>
        </div>

    </div>

    {{ BsForm::close() }}



@endsection

