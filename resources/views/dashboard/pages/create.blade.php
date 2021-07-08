{{--<x-layout :title="trans('pages.actions.create')" :breadcrumbs="['dashboard.pages.create']">--}}
{{--    {{ BsForm::resource('pages')->post(route('dashboard.pages.store')) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('pages.actions.create'))--}}

{{--        @include('dashboard.pages.partials.form')--}}

{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('pages.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('pages.plural')
@endsection
@section('content')

    {{ BsForm::resource('pages')->post(route('dashboard.pages.store')) }}
    <div class="row">
        <div class="col-md-12">

            <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">

                <h1 class="page-header">   @lang('pages.plural')</h1>
                <div class="contentDiv">
                    <div class="col-md-12">
                        <div class="ppR">
                            <ul class="pull-right panel-settings panel-button-tab-right">
                                <li class="dropdown delRed btn-primary" >
                                    <button  class="btn btn-primary "  onclick="history.back();"><i class="fa fa-arrow-left"></i></button>
                                </li>

                            </ul>
                        </div>
                    </div>

                    @include('dashboard.errors')

                    @bsMultilangualFormTabs

                    <div class="proSingPage col-md-12">

                        <div class="col-md-12">

                            {{ BsForm::text('name') }}
                        </div>

                        <div class="col-md-12">


                            {{ BsForm::textarea('description')->attribute('class', 'form-control textarea') }}
                        </div>
                    </div>

                        @endBsMultilangualFormTabs
                    <div class="proSingPage col-md-12">

                        <div class="col-md-12">

                            {{ BsForm::text('url')->required() }}

                        </div>
                    </div>
                    <div class="proSingPage col-md-12">

                    <div class="col-md-12">
                        <div id="app">
                            <div id="app">
                                <label>@lang('site.image')</label>
                                {{ BsForm::image('image') }}

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
                        {{ BsForm::submit()->label(trans('pages.actions.save')) }}
                    </div>

                </div>
            </div>

        </div>



    {{ BsForm::close() }}


@endsection
