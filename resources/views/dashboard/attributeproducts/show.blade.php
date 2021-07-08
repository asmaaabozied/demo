{{--<x-layout :title="Str::limit($product->name, 50)" :breadcrumbs="['dashboard.producttypes.show', $product]">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            @component('dashboard::components.box')--}}
{{--                @slot('class', 'p-0')--}}
{{--                @slot('bodyClass', 'p-0')--}}

{{--                <table class="table table-striped table-middle">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products_attribute.attributes.name')</th>--}}
{{--                        <td>{{ $product->name }}</td>--}}
{{--                    </tr>--}}

{{--                    <tr>--}}
{{--                        <th width="200">@lang('products_attribute.attributes.size')</th>--}}
{{--                        <td>{{ $product->size }}</td>--}}
{{--                    </tr>--}}

{{--                    <tr>--}}
{{--                        <th width="200">@lang('products_attribute.attributes.price')</th>--}}
{{--                        <td>{{ $product->price }}</td>--}}
{{--                    </tr>--}}

{{--                    <tr>--}}
{{--                        <th width="200">@lang('products_attribute.attributes.description')</th>--}}
{{--                        <td>{{ $product->description }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('product_types.plural')</th>--}}
{{--                     <th>--}}
{{--                         {{ $product->type->name ?? '' }}--}}
{{--                     </th>--}}
{{--                    </tr>--}}

{{--                </tbody>--}}
{{--                </table>--}}

{{--                @slot('footer')--}}

{{--                        <a href="{{ route('dashboard.attributeproducts.edit', $product) }}" class="btn btn-outline-primary btn-sm">--}}
{{--                            <i class="fas fa fa-fw fa-edit"></i>--}}
{{--                        </a>--}}


{{--                        <a href="#product-{{ $product->id }}-delete-model"--}}
{{--                           class="btn btn-outline-danger btn-sm"--}}
{{--                           data-toggle="modal">--}}
{{--                            <i class="fas fa fa-fw fa-trash"></i>--}}
{{--                        </a>--}}


{{--                        <!-- Modal -->--}}
{{--                        <div class="modal fade" id="product-{{ $product->id }}-delete-model" tabindex="-1" role="dialog"--}}
{{--                             aria-labelledby="modal-title-{{ $product->id }}" aria-hidden="true">--}}
{{--                            <div class="modal-dialog" role="document">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header">--}}
{{--                                        <h5 class="modal-title" id="modal-title-{{ $product->id }}">@lang('products.dialogs.delete.title')</h5>--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                            <span aria-hidden="true">&times;</span>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        @lang('products_attribute.dialogs.delete.info')--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-footer">--}}
{{--                                        {{ BsForm::delete(route('dashboard.attributeproducts.destroy', $product)) }}--}}
{{--                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">--}}
{{--                                            @lang('products_attribute.dialogs.delete.cancel')--}}
{{--                                        </button>--}}
{{--                                        <button type="submit" class="btn btn-danger">--}}
{{--                                            @lang('products_attribute.dialogs.delete.confirm')--}}
{{--                                        </button>--}}
{{--                                        {{ BsForm::close() }}--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                @endslot--}}
{{--            @endcomponent--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-layout>--}}

@extends('layouts.vali.master')
@section('title')
    @lang('products_attribute.plural')
@endsection
@section('content')


    {{ BsForm::resource('attributeproducts')->putModel($product, route('dashboard.attributeproducts.update', $product)) }}
    <div class="row">
        <div class="col-md-12">
            <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">

                <h1 class="page-header"> @lang('products_attribute.plural')</h1>
                <div class="contentDiv">
                    <div class="col-md-12">
                        <div class="topLinks">

                        </div>
                        <div class="ppR">
                            <ul class="pull-right panel-settings panel-button-tab-right">
                                <li class="dropdown delRed btn-primary">
                                    <button class="btn btn-primary " onclick="history.back();"><i
                                                class="fa fa-arrow-left"></i></button>
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

                        <div class="proSingPage col-md-12">

                            <div class="col-md-12">
                                {{ BsForm::textarea('description')->attribute('class', 'form-control textarea')->label(trans('products_attribute.attributes.description'))->name('description') }}

                            </div>
                        </div>
                        @endBsMultilangualFormTabs


                        <div class="proSingPage col-md-6">


                            {{ BsForm::text('size')->label(trans('products_attribute.attributes.size'))->name('size') }}


                        </div>

                        <div class="proSingPage col-md-6">


                            {{ BsForm::text('price')->label(trans('products_attribute.attributes.price'))->name('price') }}

                        </div>

                        <div class="proSingPage col-md-12">
                            <label>@lang('products.plural')</label>
                            <select class="form-control js-example-basic-multiple" name="product_id" required>
                                @foreach(\App\Models\Product::get()->pluck('name','id') as $key=>$value)
                                    <option value="{{$key}}" @if($product->product_id) selected @endif>{{$value}}</option>
                                @endforeach
                            </select>
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
                </div>

            </div>
        </div>

    </div>

    {{ BsForm::close() }}



@endsection