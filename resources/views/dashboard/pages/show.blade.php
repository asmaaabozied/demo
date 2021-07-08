{{--<x-layout :title="$page->name" :breadcrumbs="['dashboard.pages.show', $page]">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            @component('dashboard::components.box')--}}
{{--                @slot('class', 'p-0')--}}
{{--                @slot('bodyClass', 'p-0')--}}

{{--                <table class="table table-striped table-middle">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('pages.attributes.name')</th>--}}
{{--                        <td>{{ $page->name }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('pages.attributes.description')</th>--}}
{{--                        <td>{!! $page->description !!}</td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}

{{--                @slot('footer')--}}
{{--                    @include('dashboard.pages.partials.actions.edit')--}}
{{--                    @include('dashboard.pages.partials.actions.delete')--}}
{{--                @endslot--}}
{{--            @endcomponent--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-layout>--}}
@extends('layouts.vali.master')
@section('title')
    @lang('pages.plural')
@endsection
@section('content')

    {{ BsForm::resource('pages')->putModel($page, route('dashboard.pages.update', $page)) }}    <div class="row">
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

                                <label>@lang('site.image')</label>
                                {{ BsForm::image('image')->files($page->getMediaResource()) }}

                            </div>

                        </div>

                    </div>


                </div>





            </div>


        </div>





    {{ BsForm::close() }}


@endsection