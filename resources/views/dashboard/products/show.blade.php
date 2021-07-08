{{--<x-layout :title="Str::limit($product->name, 50)" :breadcrumbs="['dashboard.products.show', $product]">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            @component('dashboard::components.box')--}}
{{--                @slot('class', 'p-0')--}}
{{--                @slot('bodyClass', 'p-0')--}}

{{--                <table class="table table-striped table-middle">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.attributes.name')</th>--}}
{{--                        <td>{{ $product->name ?? ''}}</td>--}}
{{--                    </tr>--}}

{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.attributes.category_id')</th>--}}
{{--                        <td>--}}
{{--                            @foreach($product->categories as $category)--}}
{{--                                {{ $category->name }}--}}
{{--                                @if(! $loop->last)--}}
{{--                                    <span class="mr-2">/</span>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    @if($product->brand)--}}
{{--                        <tr>--}}
{{--                            <th width="200">@lang('products.attributes.brand_id')</th>--}}
{{--                            <td>{{ $product->brand->name }}</td>--}}
{{--                        </tr>--}}
{{--                    @endif--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.attributes.old_price')</th>--}}
{{--                        <td>--}}
{{--                            <strong class="text-danger"><s>{{ price($product->price) }}</s></strong>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.attributes.discount')</th>--}}
{{--                        <td>--}}
{{--                            <strong class="text-danger"><s>{{ price($product->getDiscount()) }}</s></strong>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('product_types.plural')</th>--}}
{{--                        <th>--}}
{{--                            {{ $product->type->name ?? '' }}--}}
{{--                        </th>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.attributes.price')</th>--}}
{{--                        <td>--}}
{{--                            <strong class="text-success">{{ price($product->getPrice()) }}</strong>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    @foreach($product->sizes as $size)--}}
{{--                        <tr>--}}
{{--                            <th width="200">{{ $size->name }}</th>--}}
{{--                            <td>--}}
{{--                                <strong class="text-success">{{ price($size->price) }}</strong>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.attributes.percent')</th>--}}
{{--                        <td>--}}
{{--                            <strong class="badge badge-danger">{{ $product->getDiscountPercent() }}%</strong>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.attributes.meta_description')</th>--}}
{{--                        <td>--}}
{{--                            {{ $product->meta_description }}--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.attributes.meta_keywords')</th>--}}
{{--                        <td>--}}
{{--                            @foreach(explode(',', $product->meta_keywords) as $keyword)--}}
{{--                                <span class="badge badge-dark">{{ $keyword }}</span>--}}
{{--                            @endforeach--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.count')</th>--}}
{{--                        <td>{{ $product->quantity ?? '' }}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.attributes.in_stock')</th>--}}
{{--                        <td>@include('dashboard.products.partials.flags.in_stock')</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th width="200">@lang('products.attributes.exclusive')</th>--}}
{{--                        <td>@include('dashboard.products.partials.flags.exclusive')</td>--}}
{{--                    </tr>--}}
{{--                </tbody>--}}
{{--                </table>--}}

{{--                @slot('footer')--}}
{{--                    @include('dashboard.products.partials.actions.edit')--}}
{{--                    @include('dashboard.products.partials.actions.delete')--}}
{{--                @endslot--}}
{{--            @endcomponent--}}
{{--        </div>--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="slider">--}}
{{--                <div class="preview">--}}
{{--                    <img src="{{ $product->getFirstMediaUrl('default', 'large') }}" alt="{{ $product->name }}">--}}
{{--                </div>--}}
{{--                <ul class="items">--}}
{{--                    @foreach($product->getMedia('default') as $media)--}}
{{--                        <li class="{{ $loop->first ? 'active' : ''  }}" data-src="{{ $media->getFullUrl() }}">--}}
{{--                            <img src="{{ $media->getFullUrl() }}" alt="{{ $media->name }}">--}}
{{--                        </li>--}}
{{--                    @endforeach--}}

{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}



{{--            @component('dashboard::components.table-box')--}}
{{--                @slot('title', $title ?? trans('products_attribute.plural'))--}}
{{--                @slot('tools')--}}

{{--                @endslot--}}

{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>@lang('products_attribute.attributes.name')</th>--}}
{{--                        <th style="width: 160px">@lang('products_attribute.attributes.size')</th>--}}
{{--                        <th style="width: 160px">@lang('products_attribute.attributes.price')</th>--}}


{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @if($product->producttype_id)--}}
{{--                @forelse(\App\Models\Attribueproduct::where('producttype_id',$product->producttype_id)->get() as $product)--}}
{{--                    <tr>--}}
{{--                        <td>--}}
{{--                            {{ $product->name ?? ''}}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            {{ $product->size  ?? ''}}--}}


{{--                        </td>--}}
{{--                        <td>--}}
{{--                            {{ $product->price }}--}}
{{--                        </td>--}}




{{--                    </tr>--}}
{{--                @empty--}}
{{--                    <tr>--}}
{{--                        <td colspan="100" class="text-center">@lang('products_attribute.empty')</td>--}}
{{--                    </tr>--}}
{{--                @endforelse--}}
{{--                @endif--}}

{{--            @endcomponent--}}


{{--        </div>--}}
{{--    </div>--}}
{{--<br>--}}
{{--    <br>--}}
{{--    @component('dashboard::components.box')--}}
{{--        @slot('title', trans('products.attributes.description'))--}}
{{--        {!! $product->description !!}--}}
{{--    @endcomponent--}}
{{--    @include('dashboard.offers.partials.list', ['target' => $product])--}}
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
                            <label for="">sku</label>
                            <input type="text" name="sku" value="{{$product->sku}}">
                        </div>
                        <div class="col-md-12">
                            <label>@lang('brands.singular')</label>
                            <select class="form-control" name="brand_id"
                                    value="{{ $product->category_id ?? old('category_id') }}" required>
                                @foreach(\App\Models\Brand::get()->pluck('name','id') as $key=>$value)
                                    <option value="{{$key}}" @if($product->brand_id) selected @endif>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-md-12">
                            <label>@lang('categories.singular')</label>
                            <select class="form-control" name="category_id"
                                    value="{{ $product->category_id ?? old('category_id') }}" required>
                                @foreach(\App\Models\Category::get()->pluck('name','id') as $key=>$value)
                                    <option value="{{$key}}"  @if($product->category_id) selected @endif>{{$value}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label>@lang('product_types.plural')</label>
                            <select class="form-control js-example-basic-multiple" name="producttype_id[]"
                                    required multiple="multiple">
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
                                @foreach($attributes as $attribute)

                                <div class="col-md-4">
                                    <label for="">@lang('products_attribute.attributes.name')
                                        <button id="addRow" type="button" class="btn"><i class="fa fa-plus"></i>
                                        </button>
                                    </label>
                                    <div id="inputFormRow">
                                        <div class="input-group mb-3">
                                            <input type="text" value="{{$attribute->name}}" class="form-control m-input"
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
                                            <input type="text" value="{{$attribute->price}}" class="form-control m-input"
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
                                            <input type="text" value="{{$attribute->size}}" class="form-control m-input"
                                                   autocomplete="off">
                                            <div class="input-group-append">
                                                <button id="removeRow11" type="button" class="btn"><i
                                                            class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="newRow11"></div>
                                </div>
                                @endforeach
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








    {{ BsForm::close() }}


@endsection

@section('scripts')
    <script>


        CKEDITOR.replace( 'meta_description:ar' );
        CKEDITOR.replace( 'meta_description:en' );
    </script>

@endsection