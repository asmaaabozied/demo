{{--<x-layout :title="trans('categories.actions.create')" :breadcrumbs="['dashboard.categories.create']">--}}
{{--    @include('dashboard.categories.partials.create-box')--}}
{{--</x-layout>--}}

@extends('layouts.vali.master')
@section('title')
    @lang('categories.plural')
@endsection
@section('content')
    {{ BsForm::resource('categories')->post(route('dashboard.categories.store')) }}

    <div class="row">
        <div class="col-md-12">
    <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">

        <h1 class="page-header"> @lang('categories.plural')</h1>
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
            <div class="row">
                @include('dashboard.errors')
                @bsMultilangualFormTabs


                        <div class="proSingPage col-md-12">
                            <div class="col-md-12">
                                {{ BsForm::text('name') }}

                            </div>
                        </div>
                        <div class="proSingPage col-md-12">
                            <div class="col-md-12">
                                {{ BsForm::textarea('meta_description')->rows(3) }}

                            </div>
                        </div>
                        <div class="proSingPage col-md-12">
                            <div class="col-md-12">
                                {{ BsForm::textarea('description')->attribute('class', 'form-control textarea') }}

                            </div>
                        </div>
                        <div class="proSingPage col-md-12">
                            <div class="col-md-12">
                                {{ BsForm::text('meta_keywords')->attribute('class', 'form-control tags') }}

                            </div>
                        </div>
                        @endBsMultilangualFormTabs


                        <div class="proSingPage col-md-12">
                            <div class="col-md-12">
                                <label for=""> @lang('site.country')</label>
                                <select name="country_id" id="">
                                    @foreach(\App\Models\Country::get()->pluck('name','id') as $key=>$country)
                                    <option value="{{$key}}">{{$country}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="proSingPage col-md-12">
                            <div class="col-md-12">
                                <div id="app">
                                                                    {{ BsForm::image('image') }}

                                    {{--                                    <file-uploader--}}
{{--                                            :unlimited="true"--}}
{{--                                            collection="image"--}}
{{--                                            :tokens="{{ json_encode(old('media', [])) }}"--}}
{{--                                            label="Upload Avatar"--}}
{{--                                            notes="Supported types: jpeg, png,jpg,gif"--}}
{{--                                            accept="image/jpeg,image/png,image/jpg,image/gif"--}}
{{--                                    ></file-uploader>--}}
                                </div>

{{--                                {{ BsForm::image('image') }}--}}

                            </div>
                        </div>

                </div>
            </div>
        </div>


    <div class="col-lg-2 forFullWid innerPage">

        <div class="topSell">
            <h6>@lang('site.options')</h6>

                <div class="FiltItm">
                    <div class="toggle lg">
                        <label>
                            <span>@lang('site.Add to Navbar') </span>
                            <input type="checkbox"  value="1" name="display_in_navbar"><span class="button-indecator"></span>
                        </label>
                        <div class="clearfix"></div>
                        <label>
                            <span>@lang('site.active') </span>
                            <input type="checkbox" name="status" value="1"><span class="button-indecator" ></span>
                        </label>
                        <div class="clearfix"></div>
                        <label>
                            <span>@lang('site.visiablity') </span>
                            <input type="checkbox" name="visiablity"  value="1"><span class="button-indecator"></span>
                        </label>
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

@section('scripts')
    <script>

        CKEDITOR.replace( 'description:ar' );

        CKEDITOR.replace( 'description:ar' );
    </script>

@endsection