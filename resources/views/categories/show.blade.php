@extends('layouts.yo3an_wagef.master', ['title' => $category->name])

@section('content')


<section class="menuSec">
  <div class="row">
    
    <div class="col-lg-7 col-md-12 rWbg forMobOnly">
      <div class="centerImg">
        <img src="img/Group 3982.png" alt=""data-aos="fade-in"
        data-aos-easing="linear"
      data-aos-duration="700"> <!-- yellow-->
        <img src="img/Path 4353.png" alt="" data-aos="fade-in"
        data-aos-easing="linear"
      data-aos-duration="700"> <!-- cooker-->
        <div class="clearfix"></div>
        <img src="img/Path 4352.png" alt="" class="yoTitle" 
        data-aos="fade-up"
        data-aos-easing="linear"
      data-aos-duration="1000"> <!-- title-->
        <img src="img/Group 3984.png" alt=""
        data-aos="fade-up"
        data-aos-easing="linear"
      data-aos-duration="1500"> <!-- yo3an-->
      </div>
    </div>
    <div class="col-lg-5 col-md-12 menuBigDiv">
      <div class="row">
        @foreach ($subcategories as $subcategory)
        <div class="col-md-6 col-sm-12">
          <div class="menuCol">
            <h5 class="menuColTit">{{$subcategory->name}}</h5>
            <div class="clearfix"></div>
            @foreach ($subcategory->products as $subproduct)
              <a class="MenuRow" href="{{ $subproduct->getWebUrl() }}">
                <img src="{{ $subproduct->getFirstMediaUrl() }}" alt="">
                <span class="foNam">{{$subproduct->name}}</span>
                <span class="foPrice">{{ price($subproduct->price) }}</span>
                <h6>{!! $subproduct->description !!}</h6>
              </a>
            @endforeach
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="col-lg-7 col-md-12 rWbg forDeskOnly">
        <div class="centerImg">
          <img src="img/Group 3982.png" alt=""data-aos="fade-in"
          data-aos-easing="linear"
        data-aos-duration="700"> <!-- yellow-->
          <img src="img/Path 4353.png" alt="" data-aos="fade-in"
          data-aos-easing="linear"
        data-aos-duration="700"> <!-- cooker-->
          <div class="clearfix"></div>
          <img src="img/Path 4352.png" alt="" class="yoTitle" 
          data-aos="fade-up"
          data-aos-easing="linear"
        data-aos-duration="1000"> <!-- title-->
          <img src="img/Group 3984.png" alt=""
          data-aos="fade-up"
          data-aos-easing="linear"
        data-aos-duration="1500"> <!-- yo3an-->
        </div>
    </div>
  </div>
</section>

@endsection
