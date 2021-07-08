@extends('layouts.yo3an_wagef.master')

@section('content')

    {{ BsForm::post(LaravelLocalization::localizeURL(url('/cart')), ['id' => 'product-cart-form2-'.$product->id]) }}
    {{ Form::hidden('item_id', $product->id) }}
    {{ Form::hidden('buy_now', 0) }}
    {{ Form::hidden('item_type', $product->getMorphClass()) }}
    {{ BsForm::close() }}

    <section class="menuSec">
        <div class="row">
         
          <div class="col-lg-7 col-md-12 proDetails">
            <div class="proDetailInner">
              <div class="choItm">
                <img src="{{ $product->getFirstMediaUrl() }}" alt="">
              </div>
              <form action="">
                <div class="itmDet">
                  <h5>{{ $product->name }}
                    <span class="spPrice">{{ price($product->price) }} </span>
                  </h5>
                </div>
              <div class="itmDet">
                <h4>@lang('front.quantity')
                  <span>
                    <div class="input-group">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-number" data-type="minus" data-field="qty">
                            <i class="fas fa-minus"></i>
                          </button>
                      </span>
                      <input type="text" name="qty" form="product-cart-form2-{{ $product->id }}" class="form-control input-number" value="1" min="1" max="100">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-number" data-type="plus" data-field="qty">
                              <i class="fas fa-plus"></i>
                          </button>
                      </span>
                    </div>
                  </span>
                </h4>
              </div>
              <div class="itmLabl">
                <label for="">@lang('products.attributes.size')</label>
              </div>
              <div class="itmDet">
                @foreach($product->sizes as $size)
                  <label>
                      <input type="radio" name="size_id" id="xs-size" form="product-cart-form2-{{ $product->id }}"
                      value="{{ $size->id }}" {{ $loop->first ? 'checked' : '' }}/>
                      @php
                      $size_name = $size->name;
                      @endphp
                      <span><h5>@lang('sizes.options.'.$size_name)</h5> <small style="font-size: 11pt; color: #d3001d; font-weight:bold">{{ price($size->price) }}</small> </span>
                  </label>
                @endforeach
              </div>
              <div class="itmLabl">
                <label for="">@lang('front.select_milk')</label>
              </div>
              <div class="itmDet">
                  <label>
                      <input type="radio" name="milk_size" value="small" form="product-cart-form2-{{ $product->id }}"/>
                      <span><h5>@lang('front.small')</h5> <small style="font-size: 11pt; color: #d3001d; font-weight:bold">(KWD 2.000)</small> </span>
                  </label>
                  <label>
                      <input type="radio" name="milk_size" value="medium" form="product-cart-form2-{{ $product->id }}"/>
                      <span><h5>@lang('front.medium')</h5> <small style="font-size: 11pt; color: #d3001d; font-weight:bold">(KWD 2.000)</small> </span>
                  </label>
                  <label>
                      <input type="radio" name="milk_size" value="large" form="product-cart-form2-{{ $product->id }}"/>
                      <span><h5>@lang('front.large')</h5> <small style="font-size: 11pt; color: #d3001d; font-weight:bold">(KWD 2.000)</small> </span>
                  </label>
              </div>
              <div class="itmLabl">
                <label for="">@lang('front.add_instructions') <small>@lang('front.optional')</small></label>
              </div>
              <div class="itmDet">
                <textarea name="additional" form="product-cart-form2-{{ $product->id }}" rows="1"></textarea>
              </div>
                <button type="button" onclick="addToCart('product-cart-form2-{{ $product->id }}')">
                    @lang('front.add_to_cart')
                </button>
            </form>
      
            </div>
          </div>
         
          <div class="col-lg-5 col-md-12 menuBigDiv">         
            <div class="newMenu">
              <div id="accordion">
                @foreach ($subcategories as $subcategory)
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$subcategory->id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$subcategory->name}} <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne{{$subcategory->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <ul>
                        @foreach ($subcategory->products as $subproduct)
                        <li><a class="MenuRow" href="{{ $subproduct->getWebUrl() }}">
                          <img src="{{ $subproduct->getFirstMediaUrl() }}" alt="">
                          <span class="foNam">{{$subproduct->name}}</span>
                          <span class="foPrice">{{ price($subproduct->price) }}</span>
                          <h6>{!! $subproduct->description !!}</h6>
                        </a></li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>              
            </div>
          </div>

        </div>
   </section>
@endsection
