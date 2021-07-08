@extends('frontend.master')

@section('content')

    <section class="menuSec">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="700" class="aos-init aos-animate">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 profileDiv">
                <div class="logTit">
                    <a onclick="history.back()"  class="bk">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                    <h6>@lang('customers.profile')</h6>
                </div>
                <a class="itmDet" href="{{route('account')}}">
                    @lang('customers.Account Detail')
                    <i class="fa fa-chevron-right"></i>
                </a>
                <a class="itmDet" href="{{route('createaddresss')}}">
                    @lang('addresses.actions.create')
                    <i class="fa fa-chevron-right"></i>
                </a>
                <a class="itmDet" href="{{route('showaddress')}}">
                   @lang('addresses.actions.save') @lang('addresses.plural')

                    <i class="fa fa-chevron-right"></i>
                </a>
                <a href="{{ route('logouts') }}" class="basicBtn">@lang('dashboard.auth.logout')</a>
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