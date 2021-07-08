@extends('layouts.yo3an_wagef.master')

@section('content')

<section class="menuSec">
  <div class="row">
    
    <div class="col-lg-7 col-md-12 rWbg forMobOnly">
      <div class="centerImg">
        <img src="{{ asset('front/yo3an_wagef') }}/img/Group 3982.png" alt=""data-aos="fade-in"
        data-aos-easing="linear"
      data-aos-duration="700"> <!-- yellow-->
        <img src="{{ asset('front/yo3an_wagef') }}/img/Path 4353.png" alt="" data-aos="fade-in"
        data-aos-easing="linear"
      data-aos-duration="700"> <!-- cooker-->
        <div class="clearfix"></div>
        <img src="{{ asset('front/yo3an_wagef') }}/img/Path 4352.png" alt="" class="yoTitle" 
        data-aos="fade-up"
        data-aos-easing="linear"
      data-aos-duration="1000"> <!-- title-->
        <img src="{{ asset('front/yo3an_wagef') }}/img/Group 3984.png" alt=""
        data-aos="fade-up"
        data-aos-easing="linear"
      data-aos-duration="1500"> <!-- yo3an-->
      </div>
        <footer>
          <div class="col-12 rights">
            <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer">
              جميع الحقوق محفوظة لشركه جوعان وقف بدعم من ويب اند ابز
              <a href="http://www.wna.net.kw" target="_blank"><img src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>
            </div>
          </div>
        </footer>
    </div>
    <div class="col-lg-5 col-md-12 menuBigDiv">
      <div class="clearfix"></div>
      <div class="pi_di">
        <div class="clearfix"></div>
          <form action="{{ route('front.search') }}" method="GET">
              <input class="input-field" type="text" name="name">
            <i class="fas fa-search"></i>
          </form>
      </div>
      <div class="clearfix"></div>
      
      <div class="newMenu">
        <div id="accordion">
          @foreach ($categories as $category)
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$category->id}}" aria-expanded="true" aria-controls="collapseOne">
                  {{$category->name}} <i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
        
            <div id="collapseOne{{$category->id}}" class="collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <ul>
                  @foreach ($category->products as $subproduct)
                    {{ BsForm::post(LaravelLocalization::localizeURL(url('/cart')), ['id' => 'product-cart-form2-'.$subproduct->id]) }}
                    {{ Form::hidden('item_id', $subproduct->id) }}
                    {{ Form::hidden('buy_now', 0) }}
                    {{ Form::hidden('qty', 1) }}
                    {{ Form::hidden('item_type', $subproduct->getMorphClass()) }}
                    {{ BsForm::close() }}
                  <li>
                    <a class="MenuRow">
                      <div class="row">
                        <img src="{{ $subproduct->getFirstMediaUrl() }}" alt="">
                        <div onclick="window.location='{{ $subproduct->getWebUrl() }}';">
                          <span class="foNam" onclick="window.location='{{ $subproduct->getWebUrl() }}';">{{$subproduct->name}}</span>
                          <h6><p onclick="window.location='{{ $subproduct->getWebUrl() }}';">{!! $subproduct->description !!}<br></p></h6>
                        </div>
                        <div class="priDiv">
                          <div class="foPrice">{{ price($subproduct->price) }}</div>
                          <button class=" btn addToCart" onclick="addToCart('product-cart-form2-{{ $subproduct->id }}')">@lang('front.add_to_cart')</button>
                        </div>
                      </div>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        
      </div>
    </div>
    <div class="col-lg-7 col-md-12 rWbg forDeskOnly">
        <div class="centerImg">
          <img src="{{ asset('front/yo3an_wagef') }}/img/1.png" alt="" data-aos="fade-in"
          data-aos-easing="linear"
        data-aos-duration="700">
        </div>
    </div>
  </div>
</section>

@endsection
