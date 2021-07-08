@extends('frontend.master')

@section('content')

    <section class="menuSec">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-duration="700"
                         class="aos-init aos-animate">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 proDetails">
                <div class="proDetailInner" style="height: 754px;">
                    <div class="choItm">
                        <img src="{{ $product->getFirstMediaUrl() }}" alt="">
                    </div>
                    <form action="">
                        <div class="itmDet">
                            <h5>{{$product->name ?? ''}}
                                <span class="spPrice">{{price($product->price) ?? ''}}
            <small><a href=""> <i class="fas fa-share-alt"></i></a></small> </span>
                            </h5>
                        </div>
                        <div class="itmDet">
                            <h4> {!! $product->description !!}
                                <span>
              <div class="input-group">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="minus" data-field="quant[2]">
                      <i class="fas fa-minus"></i>
                    </button>
                </span>
                <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-number" data-type="plus" data-field="quant[2]">
                        <i class="fas fa-plus"></i>
                    </button>
                </span>
              </div>
            </span>
                            </h4>
                        </div>
                        <br>
                        <div class="itmLabl">
                            <label for="">@lang('products_attribute.plural')</label>
                        </div>
                        <div class="itmDet wzBord">
                            @foreach($product->attributeproduct as $attribute)
                            <label>

                                <input type="radio" name="radio2" checked="">
                                <span><h5>{{$attribute->name}}</h5> <small>({{$attribute->size}})</small>
                  <p>+{{price($attribute->price)}}</p>
                </span>
                            </label>
                            @endforeach


                        </div>
                        <div class="itmLabl">
                            <label for="">Add Instructions<small>(optional)</small> </label>
                        </div>
                        <div class="itmDet wzBord">
                            <textarea name="" id="" rows="2" placeholder="text"></textarea>
                        </div>
                        <button type="submit" class="subBtn">@lang('front.add_to_cart')</button>
                    </form>
                </div>
                <br>
                <div class="forMobOnly">
                    <footer>
                        <div class="col-12 rights">
                            <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>
                                جميع الحقوق محفوظة لشركه اسم_الشركة بدعم من ويب اند ابز

                                <a href="http://www.wna.net.kw" target="_blank"><img
                                            src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 rWbg forDeskOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear"
                         data-aos-duration="700" class="aos-init">
                </div>
                <footer>
                    <div class="col-12 rights">
                        <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>
                            جميع الحقوق محفوظة لشركه اسم_الشركة بدعم من ويب اند ابز

                            <a href="http://www.wna.net.kw" target="_blank"><img
                                        src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>
                        </div>
                    </div>
                </footer>
            </div>


        </div>
    </section>



@endsection
