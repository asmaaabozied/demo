@include('dashboard.errors')

@bsMultilangualFormTabs
{{ BsForm::text('name') }}
{{ BsForm::textarea('description')->attribute('class', 'form-control textarea') }}
{{ BsForm::textarea('meta_description')->rows(3) }}
{{ BsForm::text('meta_keywords')->attribute('class', 'form-control tags') }}
@endBsMultilangualFormTabs

{{ BsForm::price('price')->currency(country()->currency) }}


<div class="form-group">
    <label>@lang('categories.singular')</label>
    <select class="form-control" name="category_id" value="{{ $product->category_id ?? old('category_id') }}" required>
        @foreach(\App\Models\Category::get()->pluck('name','id') as $key=>$value)
            <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>@lang('product_types.plural')</label>
    <select class="form-control js-example-basic-multiple" name="producttype_id[]" value="{{ $product->producttype_id ?? old('producttype_id') }}"
            required multiple="multiple">
        @foreach(\App\Models\Producttype::get()->pluck('name','id') as $key=>$value)
            <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
</div>

@isset($sizes)
    <sizes-component :sizes="{{ $product->sizes }}"></sizes-component>
@else
    <sizes-component></sizes-component>
@endisset

<div class="row">
    <div class="col-md-2">
        {{--        {{ BsForm::checkbox('in_stock')--}}
        {{--          ->checked($product->in_stock ?? old('in_stock'))--}}
        {{--          ->value(1)--}}
        {{--          ->default(0)--}}

        {{--           }}--}}
        <label>@lang('products.attributes.in_stock')</label>
        <input type="checkbox" name="in_stock" value="1" id="check">
    </div>

    <div class="col-md-3">


        <input type="number" name="quantity" placeholder="quantity" id="quantity" >
    </div>
</div>
{{--{{ BsForm::number('quantity')->name('quantity')->placeholder('qunatity') hidden }}--}}

@if(isset($product) && ! isset($parentId))
    {{ BsForm::image('images')->unlimited()->files($product->getMediaResource()) }}
@else
    {{ BsForm::image('images')->unlimited() }}
@endif

@section('scripts')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
        $(function () {
            $('input[name="quantity"]').hide();

            //show it when the checkbox is clicked
            $('input[name="in_stock"]').on('click', function () {
                if ($(this).prop('checked')) {
                    $('input[name="quantity"]').fadeIn();
                } else {
                    $('input[name="quantity"]').hide();
                }
            });
        });


    </script>


@endsection
