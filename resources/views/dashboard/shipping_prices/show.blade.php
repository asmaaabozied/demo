{{--<x-layout :title="$shipping_price->name" :breadcrumbs="['dashboard.shipping_prices.show', $shipping_price]">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            @component('dashboard::components.box')--}}
{{--                @slot('class', 'p-0')--}}
{{--                @slot('bodyClass', 'p-0')--}}

{{--                <table class="table table-striped table-middle">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('shipping_prices.attributes.name')</th>--}}
{{--                        <td>{{ $shipping_price->name }}</td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}

{{--                @slot('footer')--}}
{{--                    @include('dashboard.shipping_prices.partials.actions.edit')--}}
{{--                    @include('dashboard.shipping_prices.partials.actions.delete')--}}
{{--                @endslot--}}
{{--            @endcomponent--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-layout>--}}
@extends('layouts.vali.master')
@section('title')
    @lang('shipping_companies.plural')
@endsection
@section('content')
    {{ BsForm::resource('shipping_prices')->putModel($shipping_price, route('dashboard.shipping_prices.update', $shipping_price)) }}

    <div class="col-sm-offset-3 col-lg-9 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header">@lang('site.edit') @lang('shipping_companies.plural')</h1>
        <div class="contentDiv">
            <div class="col-md-12">
                <div class="topLinks">
                    <h5>@lang('site.edit')</h5>
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
                            <input type="number" name="first_price" value="{{$shipping_price->first_price}}">

                        </div>
                        <div class="col-md-6">
                            <label for="">@lang('site.other_rate')</label>
                            <input type="number" name="second_price" value="{{$shipping_price->second_price}}">
                        </div>
                        <div class="col-md-12">
                            <label for="">@lang('site.country')</label>
                            <select name="country_id" id="" required>
                                @foreach(\App\Models\Country::get()->pluck('name','id') as $key=>$value)
                                    <option value="{{$key}}" @if($shipping_price->country_id) selected @endif>{{$value}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="toggle lg addCont col-md-6">
                            <label>
                                <input type="checkbox" checked="" name="is_defaut" value="1"><span
                                        class="button-indecator" @if($shipping_price->is_defaut) checked @endif ></span>
                                <span>@lang('site.default')</span>
                            </label>
                        </div>
                        <div class="toggle lg addCont col-md-6">
                            <label>
                                <input type="checkbox" checked="" name="status" value="1" @if($shipping_price->status) checked @endif> <span class="button-indecator"></span>
                                <span>@lang('site.status') </span>
                            </label>
                        </div>
                    </div>
                    <div class="proSingPage col-md-12">
                        <div class="col-md-12">
                            <div id="app">
                                <label>@lang('site.image')</label>
                                {{ BsForm::image('image')->files($shipping_price->getMediaResource()) }}
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="dropdown delRed">

                        {{--                            <a class="pull-right btn" data-toggle="dropdown" href="#">create</a>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection