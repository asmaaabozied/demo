{{--<x-layout :title="$country->name" :breadcrumbs="['dashboard.countries.show', $country]">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            @component('dashboard::components.box')--}}
{{--                @slot('class', 'p-0')--}}
{{--                @slot('bodyClass', 'p-0')--}}

{{--                <table class="table table-striped table-middle">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('countries.attributes.name')</th>--}}
{{--                        <td>{{ $country->name }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('countries.attributes.currency')</th>--}}
{{--                        <td>{{ $country->currency }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('countries.attributes.code')</th>--}}
{{--                        <td>{{ $country->code }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('countries.attributes.key')</th>--}}
{{--                        <td>{{ $country->key }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('countries.attributes.is_default')</th>--}}
{{--                        <td>@include('dashboard.countries.partials.flags.default')</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('countries.attributes.flag')</th>--}}
{{--                        <td>--}}
{{--                            <img src="{{ $country->getFirstMediaUrl('flags') }}"--}}
{{--                                 class="img img-size-64"--}}
{{--                                 alt="{{ $country->name }}">--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}

{{--                @slot('footer')--}}
{{--                    @include('dashboard.countries.partials.actions.edit')--}}
{{--                    @include('dashboard.countries.partials.actions.delete')--}}
{{--                @endslot--}}
{{--            @endcomponent--}}

{{--            @include('dashboard.cities.create', ['countryId' => $country->id])--}}
{{--        </div>--}}
{{--        <div class="col-md-6">--}}
{{--            @include('dashboard.cities.index')--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('countries.plural')
@endsection
@section('content')

    {{ BsForm::resource('countries')->putModel($country, route('dashboard.countries.update', $country)) }}

    <div class="col-sm-offset-3 col-lg-9 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header">@lang('site.show') @lang('countries.plural')</h1>
        <div class="contentDiv">
            <div class="col-md-12">
                <div class="topLinks">
                    <h5>@lang('site.show')</h5>
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


                    <div class="proSingPage col-md-12 addCont2">
                        <h2>@lang('site.cities') </h2>
                        @foreach($cities as $city)
                            <div class="col-md-12">

                                <div class="proSingPage">
                                    @foreach (config('translatable.locales') as $locale)
                                        <div class="col-md-12">
                                            @if(count(config('translatable.locales'))>1)
                                                <label>@lang('site.' . $locale . '.name')</label>
                                            @else
                                                <label>@lang('site.name')</label>
                                            @endif
                                            <input type="text" name="{{ $locale }}[name2]" class="form-control" value="{{ $city->translate($locale)->name2 }}">
                                        </div>
                                    @endforeach

                                    <label>@lang('cities.attributes.shipping_price')</label>
                                    <input type="number" name="shipping_price[]" class="form-control m-input"
                                           autocomplete="off" placeholder="" value="{{$city->shipping_price}}">

                                </div>

                            </div>
                        @endforeach
                    </div>


                    <div id="newRowC">


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class=" col-md-2 col-sm-offset-7 ">

        </div>
    </div>



@endsection
