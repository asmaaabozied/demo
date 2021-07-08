


{{--<x-layout :title="Str::limit($product->name, 50)" :breadcrumbs="['dashboard.producttypes.edit', $product]">--}}
{{--    {{ BsForm::resource('producttypes')->putModel($product, route('dashboard.producttypes.update', $product)) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('product_types.actions.edit'))--}}



{{--        @include('dashboard.errors')--}}
{{--        @bsMultilangualFormTabs--}}
{{--        {{ BsForm::text('name') }}--}}

{{--        @endBsMultilangualFormTabs--}}




{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('product_types.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
        @lang('product_types.plural')
@endsection
@section('content')


        {{ BsForm::resource('producttypes')->putModel($product, route('dashboard.producttypes.update', $product)) }}
        <div class="row">
                <div class="col-md-12">
                        <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">

                                <h1 class="page-header"> @lang('product_types.plural')</h1>
                                <div class="contentDiv">
                                        <div class="col-md-12">
                                                <div class="topLinks">

                                                </div>
                                                <div class="ppR">
                                                        <ul class="pull-right panel-settings panel-button-tab-right">
                                                                <li class="dropdown delRed btn-primary" >
                                                                        <button  class="btn btn-primary "  onclick="history.back();"><i class="fa fa-arrow-left"></i></button>
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

                                                @endBsMultilangualFormTabs




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