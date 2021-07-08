{{ BsForm::post(LaravelLocalization::localizeURL(url('/cart')), ['id' => 'product-cart-form-'.$product->id]) }}
{{ Form::hidden('item_id', $product->id) }}
{{ Form::hidden('qty', 1) }}
{{ Form::hidden('item_type', $product->getMorphClass()) }}
{{ BsForm::close() }}

@auth
{{ BsForm::post(LaravelLocalization::localizeURL(route('products.favorites.add', $product))) }}
<button class="btn" id="add_to_fav_btn" style="display: none" type="submit" title="@lang('products.actions.add-to-favorite')">
    <i class="far fa-heart"></i>
</button>
{{ BsForm::close() }}
@endauth

<div class="col-md-3 my-1 animate__zoomIn">
  <div class="" data-category="nature">
    <div class="item-content">
        <div class="PItem">
            <img src="{{ $product->getFirstMediaUrl() }}" style="cursor: pointer" onclick="window.location='{{ $product->getWebUrl() }}'" alt="">
            <h4 style="cursor: pointer" onclick="window.location='{{ $product->getWebUrl() }}'">{{ $product->name }}</h4>
            <h6> {{ price($product->price) }}</h6>
        </div>
        {{-- <a href="javascript:$('#product-cart-form-{{ $product->id }}').submit();" class="add-card"><i class="flaticon-bag"></i><span>@lang('Add to cart')</span></a> --}}
    </div>
  </div>
</div>
