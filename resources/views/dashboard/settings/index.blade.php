{{--<x-layout :title="trans('settings.plural')" :breadcrumbs="['dashboard.settings.index']">--}}
{{--    {{ BsForm::resource('settings')->post(route('dashboard.settings.store')) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('settings.plural'))--}}

{{--        @bsMultilangualFormTabs--}}

{{--        {{ BsForm::text('name')--}}
{{--                ->value(Settings::locale($locale->code)->get('name')) }}--}}

{{--        @endBsMultilangualFormTabs--}}

{{--        {{ BsForm::text('facebook')->value(Settings::get('facebook')) }}--}}
{{--        {{ BsForm::text('instagram')->value(Settings::get('instagram')) }}--}}
{{--        {{ BsForm::text('snapchat')->value(Settings::get('snapchat')) }}--}}
{{--        {{ BsForm::text('twitter')->value(Settings::get('twitter')) }}--}}
{{--        {{ BsForm::text('apple')->value(Settings::get('apple')) }}--}}
{{--        {{ BsForm::text('android')->value(Settings::get('android')) }}--}}
{{--        {{ BsForm::text('phone')->value(Settings::get('phone')) }}--}}
{{--        {{ BsForm::text('whatsapp')->value(Settings::get('whatsapp')) }}--}}
{{--        {{ BsForm::text('email')->value(Settings::get('email')) }}--}}

{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('settings.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('settings.plural')
@endsection
@section('content')

    {{ BsForm::resource('settings')->post(route('dashboard.settings.store')) }}


    <div class="col-sm-offset-3 col-lg-9 col-lg-offset-2 main innerPage singProMain">
        <h1 class="page-header">@lang('settings.plural')</h1>
        <div class="contentDiv">
            <div class="col-lg-12 col-sm-12">
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
            <div class="row">
                <div class="col-lg-12 col-sm-12">


                    <div class="proSingPage col-lg-12 col-sm-12">
                        @bsMultilangualFormTabs
                        <div class="col-lg-6 col-sm-12">


                            {{ BsForm::text('name')
                                    ->value(Settings::locale($locale->code)->get('name')) }}



                        </div>

                        <div class="col-lg-6 col-sm-12">
                            {{ BsForm::text('copyright')->value(Settings::locale($locale->code)->get('copyright')) }}
                        </div>

                        @endBsMultilangualFormTabs

                        <div class="col-lg-6 col-sm-12">
                            {{ BsForm::text('url')->value(Settings::get('url')) }}

                        </div>
                        <div class="col-lg-6 col-sm-12">

                            {{ BsForm::text('Tagline')->value(Settings::get('Tagline')) }}

                        </div>
                        <div class="col-lg-6 col-sm-12">

                            {{ BsForm::text('email')->value(Settings::get('email')) }}
                        </div>
                        <div class="col-lg-6 col-sm-12">

                            {{ BsForm::text('phone')->value(Settings::get('phone')) }}
                        </div>

                        <div class="proSingPage col-lg-12 col-sm-12 socially">
                            <div class="col-lg-12 col-sm-12 socialBdiv">
                                <label for=""> @lang('site.Social Media Links')</label>
                                <div class="col-lg-4 col-sm-12">
                                    {{ BsForm::text('instagram')->value(Settings::get('instagram')) }}

                                </div>
                                <div class="col-lg-4 col-sm-12">
                                            {{ BsForm::text('snapchat')->value(Settings::get('snapchat')) }}

                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    {{ BsForm::text('twitter')->value(Settings::get('twitter')) }}
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    {{ BsForm::text('facebook')->value(Settings::get('facebook')) }}
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    {{ BsForm::text('android')->value(Settings::get('android')) }}
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    {{ BsForm::text('apple')->value(Settings::get('apple')) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <label for="">@lang('site.Default Language') </label>
                            <select name="locale" id="">
                                <option value="en">@lang('site.english')</option>
                                <option value="ar">@lang('site.arabic')</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="clearfix"></div>
                <div class="dropdown delRed">
                    {{ BsForm::submit()->label(trans('settings.actions.save')) }}
                </div>

            </div>
        </div>
    </div>




@endsection