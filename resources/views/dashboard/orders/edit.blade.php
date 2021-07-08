{{--<x-layout :title="$order->name" :breadcrumbs="['dashboard.orders.edit', $order]">--}}
{{--    {{ BsForm::resource('orders')->putModel($order, route('dashboard.orders.update', $order)) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('orders.actions.edit'))--}}

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
    {{ BsForm::resource('orders')->putModel($order, route('dashboard.orders.update', $order)) }}


    <div class="col-sm-offset-3 col-lg-9 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header">@lang('site.edit') @lang('orders.plural')</h1>
        <div class="contentDiv">
            <div class="col-md-12">
                <div class="topLinks">
                    <h5>@lang('site.edit')</h5>
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
                                   placeholder="" value="{{$order->shipping_price}}" required>


                        </div>
                        <div class="col-md-6">
                            <label>@lang('site.total')</label>
                            <input type="number" name="total" class="form-control m-input"
                                   autocomplete="off" value="{{$order->total}}" placeholder="" required>
                        </div>


                        <div class="col-md-6">
                            <label>@lang('orders.attributes.payment_method')</label>
                            <input type="text" name="payment_method" class="form-control m-input"
                                   autocomplete="off" value="{{$order->payment_method}}" placeholder="" required>
                        </div>

                        <div class="col-md-6">
                            <label>@lang('orders.attributes.user_id')</label>
                            <select name="user_id" class="form-control js-example-basic-multiple" required>
                                @foreach(\App\Models\User::get()->pluck('name','id') as $key=>$user)
                                    <option value="{{$key}}" @if($order->user_id) selected @endif>{{$user}}</option>
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
                    @forelse($order->items as $orderItem)
                        @php($item = $orderItem->item)
                        <div class="proSingPage col-md-12 addCont2">
                            <div class="col-md-12">
                                <label for="" style="font-size: 20px;">@lang('site.add') @lang('products.plural')
                                    <button id="addRowC" type="button" class="btn"><i class="fa fa-plus"></i></button>
                                </label>
                                <div id="inputFormRow">
                                    <div class="input-group mb-3">

                                        <div class="proSingPage col-md-12">

{{--                                            <div class="col-md-12">--}}
{{--                                                <label>@lang('site.name_en')</label>--}}
{{--                                                <input type="text" name="name:en[]" value="{{$item->name}}">--}}
{{--                                                --}}{{--                                            {{ BsForm::text('name[]')->value($item->name ?? '') }}--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <label>@lang('site.name_ar')</label>--}}
{{--                                                <input type="text" name="name:ar[]" value="{{$item->name}}">--}}
{{--                                                --}}{{--                                            {{ BsForm::text('name[]')->value($item->name ?? '') }}--}}
{{--                                            </div>--}}

                                            @foreach (config('translatable.locales') as $locale)
                                                <div class="col-md-12">
                                                    @if(count(config('translatable.locales'))>1)
                                                        <label>@lang('site.' . $locale . '.name')</label>
                                                    @else
                                                        <label>@lang('site.name')</label>
                                                    @endif
                                                    <input type="text" name="{{ $locale }}[name]" class="form-control" value="{{ $item->translate($locale)->name }}">
                                                </div>
                                            @endforeach

                                        </div>


                                        <div class="proSingPage col-md-12">


                                            <div class="col-md-12">
                                                <label for="">@lang('site.sku')</label>
                                                <input type="text" name="sku[]" value="{{$item->sku ?? ''}}">
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
                                                <select class="form-control js-example-basic-multiple"
                                                        name="category_id"
                                                        value="{{ $product->category_id ?? old('category_id') }}"
                                                        required>
                                                    @foreach(\App\Models\Category::get()->pluck('name','id') as $key=>$value)
                                                        <option value="{{$key}}">{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                                <label>@lang('product_types.plural')</label>
                                                <select class="form-control js-example-basic-multiple"
                                                        name="producttype_id[]"
                                                        required
                                                        value="{{ $product->producttype_id ?? old('producttype_id') }}">
                                                    @foreach(\App\Models\Producttype::get()->pluck('name','id') as $key=>$value)
                                                        <option value="{{$key}}">{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="">@lang('site.price')</label>
                                                <input type="number" name="price[]" value="{{$item->price ?? ''}}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">@lang('site.price2')</label>
                                                <input type="number" name="price2[]" value="{{$item->price2 ?? ''}}">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="">@lang('site.quantity')</label>
                                                <input type="number" name="quantity[]"
                                                       value="{{$item->quantity ?? ''}}">
                                            </div>
                                        </div>
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="proSingPage col-md-12 addCont2">
                            <div class="col-md-12">
                                <label for="" style="font-size: 20px;">@lang('site.add') @lang('products.plural')
                                    <button id="addRowC" type="button" class="btn"><i class="fa fa-plus"></i></button>
                                </label>
                                <div id="inputFormRow">
                                    <div class="input-group mb-3">
                                        @bsMultilangualFormTabs
                                        <div class="proSingPage col-md-12">

                                            <div class="col-md-12">

                                                {{ BsForm::text('name[]') }}
                                            </div>
                                            <div class="col-md-12">

                                                {{ BsForm::textarea('description[]')->attribute('class', 'form-control textarea')->rows(7)->label(trans('site.description'))}}

                                            </div>
                                        </div>


                                        @endBsMultilangualFormTabs


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
                                                <select class="form-control js-example-basic-multiple"
                                                        name="category_id"
                                                        value="{{ $product->category_id ?? old('category_id') }}"
                                                        required>
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

                    @endforelse
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