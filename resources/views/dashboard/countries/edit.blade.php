{{--<x-layout :title="$country->name" :breadcrumbs="['dashboard.countries.edit', $country]">--}}
{{--    {{ BsForm::resource('countries')->putModel($country, route('dashboard.countries.update', $country)) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('countries.actions.edit'))--}}

{{--        @include('dashboard.countries.partials.form')--}}

{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('countries.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('countries.plural')
@endsection
@section('content')
    {{ BsForm::resource('countries')->putModel($country, route('dashboard.countries.update', $country)) }}


    <div class="col-sm-offset-3 col-lg-9 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header">@lang('site.edit') @lang('countries.plural')</h1>
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
                        <div class="col-md-12">
                            @bsMultilangualFormTabs

                            {{ BsForm::text('name') }}
                            @endBsMultilangualFormTabs
                        </div>
                        {{--                        <div class="col-md-6">--}}
                        {{--                            {{ BsForm::text('code') }}--}}
                        {{--                        </div>--}}
                        {{--                        <div class="col-md-6">--}}
                        {{--                            {{ BsForm::text('key') }}--}}

                        {{--                        </div>--}}
                        <div class="col-md-12">
                            <label>@lang('cities.attributes.shipping_price')</label>
                            <input type="number" name="shipping_price2" class="form-control m-input" autocomplete="off"
                                   placeholder="" value="{{$country->shipping_price2}}">


                        </div>


                        <div class="toggle lg addCont col-md-6">
                            <label>
                                <input type="checkbox" value="1" name="is_default" @if($country->is_default) checked
                                        @endif><span
                                        class="button-indecator"></span>
                                <span>@lang('site.default')</span>
                            </label>
                        </div>
                        <div class="toggle lg addCont col-md-6">
                            <label>
                                <input type="checkbox" value="1" name="status" @if($country->status) checked
                                        @endif><span
                                        class="button-indecator"></span>
                                <span>@lang('site.status') </span>
                            </label>
                        </div>
                    </div>

                    @forelse($cities as $city)
                        <div class="proSingPage col-md-12 addCont2">
                            <div class="col-md-12">
                                <label for="" style="font-size: 20px;">@lang('site.add') @lang('site.city')
                                    <button id="addRowC" type="button" class="btn"><i class="fa fa-plus"></i>
                                    </button>
                                </label>
                                <div id="inputFormRow">
                                    <div class="input-group mb-3">
                                        <input type="text" name="" class="form-control m-input" autocomplete="off"
                                               placeholder="">
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="proSingPage">

{{--                                    {{ BsForm::text('name2')--}}
{{--                                                                      ->value(cities::locale($locale->code)->get('name2')) }}--}}
                                    @foreach (config('translatable.locales') as $locale)
                                        <div class="col-md-12">
                                            @if(count(config('translatable.locales'))>1)
                                                <label>@lang('site.' . $locale . '.name')</label>
                                            @else
                                                <label>@lang('site.name')</label>
                                            @endif


                                            <input type="text" name="name2:{{ $locale }}[]" class="form-control" value="{{ $city->translate($locale)->name2 }}">
                                        </div>
                                    @endforeach

{{--                                  @foreach (config('translatable.locales') as $locale)--}}


{{--                                    {{ BsForm::text('{{ $locale }}[name2]')->value($city->translate($locale)->name2) }}--}}

{{--                                    @endforeach--}}

{{--                                                                        <label>@lang('site.name_ar')</label>--}}
{{--                                                                        <input type="text" name="name2:ar[]" class="form-control m-input"--}}
{{--                                                                                placeholder="" value="{{$city->name2:ar}}">--}}
{{--                                                                        <label>@lang('site.name_en')</label>--}}
{{--                                                                        <input type="text" name="name2:en[]" class="form-control m-input"--}}
{{--                                                                               placeholder="" value="{{$city->name2::en}}">--}}


                                    {{--                                    @foreach (config('translatable.locales') as $locale)--}}
                                    {{--                                        <div class="col-md-12">--}}
                                    {{--                                            @if(count(config('translatable.locales'))>1)--}}
                                    {{--                                                <label>@lang('site.' . $locale . '.name')</label>--}}
                                    {{--                                            @else--}}
                                    {{--                                                <label>@lang('site.name')</label>--}}
                                    {{--                                            @endif--}}
                                    {{--                                            <input type="text" name="{{ $locale }}[name2]" class="form-control" value="{{ $city->translate($locale)->name2 }}">--}}
                                    {{--                                        </div>--}}
                                    {{--                                    @endforeach--}}

                                    {{--                                                                        <label>@lang('site.name_en')</label>--}}
                                    {{--                                                                        <input type="number" name="name2[]" class="form-control m-input"--}}
                                    {{--                                                                               autocomplete="off" placeholder="" value="{{$city->name2}}">--}}

                                    <label>@lang('cities.attributes.shipping_price')</label>
                                    <input type="number" name="shipping_price[]" class="form-control m-input"
                                           autocomplete="off" placeholder="" value="{{$city->shipping_price}}">

                                </div>

                            </div>

                        </div>

                    @empty

                        <div class="proSingPage col-md-12 addCont2">
                            <div class="col-md-12">
                                <label for="" style="font-size: 20px;">@lang('site.add') @lang('site.city')
                                    <button id="addRowC" type="button" class="btn"><i class="fa fa-plus"></i>
                                    </button>
                                </label>
                                <div id="inputFormRow">
                                    <div class="input-group mb-3">
                                        <input type="text" name="" class="form-control m-input" autocomplete="off"
                                               placeholder="">
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="proSingPage">


                                    <label>@lang('site.name_ar')</label>
                                    <input type="number" name="name2:ar[]" class="form-control m-input"
                                           autocomplete="off" placeholder="">
                                    <label>@lang('site.name_en')</label>
                                    <input type="number" name="name2:en[]" class="form-control m-input"
                                           autocomplete="off" placeholder="">


                                    <label>@lang('cities.attributes.shipping_price')</label>
                                    <input type="number" name="shipping_price[]" class="form-control m-input"
                                           autocomplete="off" placeholder="">

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