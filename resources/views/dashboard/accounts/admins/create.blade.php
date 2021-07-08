{{--<x-layout :title="trans('admins.actions.create')" :breadcrumbs="['dashboard.admins.create']">--}}
{{--    {{ BsForm::resource('admins')->post(route('dashboard.admins.store')) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('admins.actions.create'))--}}

{{--        @include('dashboard.accounts.admins.partials.form')--}}

{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('admins.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('admins.plural')
@endsection
@section('content')

        {{ BsForm::resource('admins')->post(route('dashboard.admins.store')) }}
    <div class="row">
        <div class="col-md-12">

            <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">

                <h1 class="page-header">   @lang('admins.plural')</h1>
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


                    <div class="proSingPage col-md-12">

                        <div class="col-md-6">

                            {{ BsForm::text('name') }}
                        </div>

                        <div class="col-md-6">


                            {{ BsForm::text('lastname') }}
                        </div>

                        <div class="col-md-6">

                            {{ BsForm::email('email')->required() }}

                        </div>
                        <div class="col-md-6">
                            {{ BsForm::email('email_confirmation')}}


                        </div>

                        <div class="col-md-6">

                            {{ BsForm::text('phone')->required() }}

                        </div>

                        <div class="col-md-6">

                            {{ BsForm::password('password') }}
                        </div>

                        <div class="col-md-6">
                            {{ BsForm::password('password_confirmation') }}


                        </div>


                    </div>








                    <div class="proSingPage col-md-12">
                        <div class="col-md-12">
                            <div id="app">
                                <label>@lang('site.image')</label>
                                {{ BsForm::image('image') }}
{{--                                {{ BsForm::image('avatar')->collection('avatars') }}--}}

{{--                                                        <file-uploader--}}
{{--                                                                :unlimited="true"--}}
{{--                                                                collection="avatars"--}}
{{--                                                                :tokens="{{ json_encode(old('media', [])) }}"--}}
{{--                                                                label="avatar"--}}
{{--                                                                notes="Supported types: jpeg, png,jpg,gif"--}}
{{--                                                                accept="image/jpeg,image/png,image/jpg,image/gif"--}}
{{--                                                        ></file-uploader>--}}
                            </div>
                            {{--                    @if(isset($product) && ! isset($parentId))--}}
                            {{--                        {{ BsForm::image('images')->unlimited()->files($product->getMediaResource()) }}--}}
                            {{--                    @else--}}
                            {{--                        {{ BsForm::image('images')->unlimited() }}--}}
                            {{--                    @endif--}}

                            {{--                    {{ BsForm::image('images')->collection('images')->unlimited() }}--}}
                            {{--                    <div class="uploadBord col-md-12 ">--}}
                            {{--                        <div class="col-md-12 uploadDiv">--}}
                            {{--                            <label for=""> Images</label>--}}
                            {{--                            <img src="img/img1.png" alt="" name="media[]">--}}
                            {{--                            <input type="file">--}}
                            {{--                            <div></div>--}}
                            {{--                        </div>--}}
                            {{--                    </div>--}}
                        </div>


                    </div>

                </div>
            </div>


        </div>




    <div class="row">
        <div class="col-md-12">
            <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">
                <div class="contentDiv">
                    {{ BsForm::submit()->label(trans('products.actions.save')) }}
                </div>

            </div>
        </div>

    </div>



    {{ BsForm::close() }}


@endsection