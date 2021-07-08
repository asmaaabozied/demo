{{--<x-layout :title="Str::limit($product->name, 50)" :breadcrumbs="['dashboard.products.edit', $product]">--}}
{{--    {{ BsForm::resource('products')->putModel($product, route('dashboard.products.update', $product)) }}--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('products.actions.edit'))--}}

{{--        @include('dashboard.products.partials.form')--}}

{{--        @slot('footer')--}}
{{--            {{ BsForm::submit()->label(trans('products.actions.save')) }}--}}
{{--        @endslot--}}
{{--    @endcomponent--}}
{{--    {{ BsForm::close() }}--}}
{{--</x-layout>--}}

{{--<x-layout :title="trans('products.actions.create')" :breadcrumbs="['dashboard.products.create']">--}}
{{--    @include('dashboard.products.partials.create-box')--}}
{{--</x-layout>--}}


@extends('layouts.vali.master')
@section('title')
    @lang('products.plural')
@endsection
@section('content')

    {{ BsForm::resource('products')->putModel($product, route('dashboard.products.update', $product)) }}
    <div class="row">
        <div class="col-md-12">

            <div class="col-sm-offset-3 col-lg-8 col-lg-offset-2 main innerPage singProMain">
                {{--        <nav aria-label="breadcrumb">--}}
                {{--            <ol class="breadcrumb">--}}
                {{--                <li class="breadcrumb-item">--}}
                {{--                    <a href="#">Home</a></li>--}}
                {{--                <li class="breadcrumb-item">--}}
                {{--                    <a href="#">Library</a></li>--}}
                {{--                <li class="breadcrumb-item active" aria-current="page">Data</li>--}}
                {{--            </ol>--}}
                {{--        </nav>--}}
                <h1 class="page-header">   @lang('products.plural')</h1>
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
                    </div>
                    <div class="proSingPage col-md-12">
                        <div class="col-md-12">


                            {{ BsForm::text('meta_keywords')->attribute('class', 'form-control tags') }}                            </div>
                    </div>


                    <div class="proSingPage col-md-12">
                        <div class="col-md-12">

                            {{ BsForm::textarea('description')->attribute('class', 'form-control textarea')->rows(7) }}

                        </div>
                    </div>
                    <div class="proSingPage col-md-12">
                        <div class="col-md-12">
                            {{ BsForm::textarea('meta_description')->rows(3) }}


                        </div>
                    </div>


                    @endBsMultilangualFormTabs


                    <div class="proSingPage col-md-12">


                        <div class="col-md-12">
                            <label for="">@lang('site.sku')</label>
                            <input type="text" name="sku" value="{{$product->sku}}">
                        </div>
                        <div class="col-md-12">
                            <label>@lang('brands.singular')</label>
                            <select class="form-control js-example-basic-multiple" name="brand_id"
                                    value="{{ $product->category_id ?? old('category_id') }}" required>
                                @foreach(\App\Models\Brand::get()->pluck('name','id') as $key=>$value)
                                    <option value="{{$key}}" @if($product->category_id) selected @endif>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-md-12">
                            <label>@lang('categories.singular')</label>
                            <select class="form-control js-example-basic-multiple" name="category_id"
                                    value="{{ $product->category_id ?? old('category_id') }}" required>
                                @foreach(\App\Models\Category::get()->pluck('name','id') as $key=>$value)
                                    <option value="{{$key}}"  @if($product->category_id) selected @endif>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label>@lang('product_types.plural')</label>
                            <select class="form-control js-example-basic-multiple" name="producttype_id"
                                    required>
                                @foreach(\App\Models\Producttype::get()->pluck('name','id') as $key=>$value)
                                    <option value="{{$key}}" @if($product->producttype_id) selected @endif>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">@lang('site.price')</label>
                            <input type="text" name="price" value="{{$product->price}}">
                        </div>
                        <div class="col-md-4">
                            <label for="">@lang('site.price2')</label>
                            <input type="text" name="price2" value="{{$product->price2}}">
                        </div>
                        <div class="col-md-4">
                            <label for="">@lang('site.quantity')</label>
                            <input type="text" name="quantity" value="{{$product->quantity}}">
                        </div>
                        <div class="col-md-12">
                            <label for="">@lang('products_attribute.plural')</label>
                            <div class="innBord col-md-12">
                                @forelse($attributes as $attribute)

                                    <div class="col-md-4">
                                        <label for="">@lang('products_attribute.attributes.name')
                                            <button id="addRow" type="button" class="btn"><i class="fa fa-plus"></i>
                                            </button>
                                        </label>
                                        <div id="inputFormRow">
                                            <div class="input-group mb-3">
                                                <input type="text" value="{{$attribute->name}}"  name="attribute_name[]" class="form-control m-input"
                                                       autocomplete="off">
                                                <div class="input-group-append">
                                                    <button id="removeRow" type="button" class="btn"><i
                                                                class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="newRow"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">@lang('products_attribute.attributes.price')
                                            <button id="addRow1" type="button" class="btn"><i class="fa fa-plus"></i>
                                            </button>
                                        </label>
                                        <div id="inputFormRow1">
                                            <div class="input-group mb-3">
                                                <input type="text" value="{{$attribute->price}}"  name="attribute_price[]" class="form-control m-input"
                                                       autocomplete="off">
                                                <div class="input-group-append">
                                                    <button id="removeRow1" type="button" class="btn"><i
                                                                class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="newRow1"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">@lang('products_attribute.attributes.size')
                                            <button id="addRow11" type="button" class="btn"><i class="fa fa-plus"></i>
                                            </button>
                                        </label>
                                        <div id="inputFormRow11">
                                            <div class="input-group mb-3">
                                                <input type="text" value="{{$attribute->size}}" name="attribute_size[]"  class="form-control m-input"
                                                       autocomplete="off">
                                                <div class="input-group-append">
                                                    <button id="removeRow11" type="button" class="btn"><i
                                                                class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="newRow11"></div>
                                    </div>

                                @empty
                                    <div class="col-md-4">
                                        <label for="">@lang('products_attribute.attributes.name')
                                            <button id="addRow" type="button" class="btn"><i class="fa fa-plus"></i>
                                            </button>
                                        </label>
                                        <div id="inputFormRow">
                                            <div class="input-group mb-3">
                                                <input type="text"  name="attribute_name[]" class="form-control m-input"
                                                       autocomplete="off">
                                                <div class="input-group-append">
                                                    <button id="removeRow" type="button" class="btn"><i
                                                                class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="newRow"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">@lang('products_attribute.attributes.price')
                                            <button id="addRow1" type="button" class="btn"><i class="fa fa-plus"></i>
                                            </button>
                                        </label>
                                        <div id="inputFormRow1">
                                            <div class="input-group mb-3">
                                                <input type="text" name="attribute_price[]" class="form-control m-input"
                                                       autocomplete="off">
                                                <div class="input-group-append">
                                                    <button id="removeRow1" type="button" class="btn"><i
                                                                class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="newRow1"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">@lang('products_attribute.attributes.size')
                                            <button id="addRow11" type="button" class="btn"><i class="fa fa-plus"></i>
                                            </button>
                                        </label>
                                        <div id="inputFormRow11">
                                            <div class="input-group mb-3">
                                                <input type="text"  name="attribute_size[]"  class="form-control m-input"
                                                       autocomplete="off">
                                                <div class="input-group-append">
                                                    <button id="removeRow11" type="button" class="btn"><i
                                                                class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="newRow11"></div>
                                    </div>

                                @endforelse
                            </div>
                        </div>
                    </div>

                    <div class="proSingPage col-md-12">
                        <div class="col-md-12">
                            <div id="app">
                                {{ BsForm::image('images')->unlimited()->files($product->getMediaResource()) }}

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


            <div class="col-lg-2 forFullWid innerPage">

                <div class="topSell">
                    <h6>option</h6>

                    <div class="FiltItm">
                        <div class="toggle lg">
                            <label>
                                <span>@lang('site.visiablity') </span>
                                <input type="checkbox"  name="visibility" value="1" @if($product->visibility) checked @endif><span class="button-indecator"></span>
                            </label>
                            <br>
                            <label>
                                <span>@lang('site.active') </span>
                                <input type="checkbox" name="status" value="1" @if($product->status) checked @endif><span class="button-indecator" ></span>
                            </label>
                            <br>
                            <label>
                                <span>@lang('site.exclusive') </span>
                                <input type="checkbox" name="exclusive" value="1" @if($product->exclusive) checked @endif><span class="button-indecator" ></span>
                            </label>
                            <br>
                            <label>
                                <span>@lang('site.stock') </span>
                                <input type="checkbox" name="in_stock"  value="1" @if($product->in_stock) checked @endif><span class="button-indecator"></span>
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
                    {{ BsForm::submit()->label(trans('products.actions.save')) }}
                </div>

            </div>
        </div>

    </div>



    {{ BsForm::close() }}


@endsection

@section('scripts')
    <script>


        CKEDITOR.replace( 'meta_description:ar' );
        CKEDITOR.replace( 'meta_description:en' );
    </script>

@endsection