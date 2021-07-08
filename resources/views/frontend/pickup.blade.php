@extends('frontend.master')

@section('content')


    <section class="menuSec">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="700" class="aos-init aos-animate">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 deliveryDiv pickDiv">
                <div class="logTit">
                    <a onclick="history.back()" class="bk">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                    <h6>@lang('site.pickup')</h6>
                </div>
                <form action="">
                    <div class="itmDet">
                        <label>
                            <input type="radio" name="radio4" checked="">
                            <span><h5>Kuwait City</h5>  </span>
                        </label>
                    </div>
                    <div class="itmDet">
                        <label>
                            <input type="radio" name="radio4">
                            <span><h5>Salmiya</h5>  </span>
                        </label>
                    </div>
                    <div class="itmDet">
                        <label>
                            <input type="radio" name="radio4">
                            <span><h5>Hawally</h5>  </span>
                        </label>
                    </div>
                    <a href="{{ LaravelLocalization::localizeURL(url('checkout')) }}" class="basicBtn">@lang('front.checkout')</a>
                </form>
                <div class="forMobOnly">

                    <footer>
                        <div class="col-12 rights">
                            <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>
                                ©
                                جميع الحقوق محفوظة لشركه اسم_الشركة  بدعم من ويب اند ابز

                                <a href="http://www.wna.net.kw" target="_blank"><img src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>
                            </div>
                        </div>
                    </footer>
                </div>

            </div>
            <div class="col-lg-7 col-md-12 rWbg forDeskOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="700" class="aos-init">
                </div>
                <footer>
                    <div class="col-12 rights">
                        <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>
                            جميع الحقوق محفوظة لشركه اسم_الشركة  بدعم من ويب اند ابز

                            <a href="http://www.wna.net.kw" target="_blank"><img src="http://dezato.wna.net.kw/images/logo.wna.jpg" alt=""></a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>


@endsection
