@extends('frontend.master')

@section('content')

    <section class="menuSec">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="700" class="aos-init aos-animate">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 loginBigDiv">
                <div class="logTit">
                    <a onclick="history.back()" class="bk">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                </div>
                @include('dashboard.errors')

                <form action="{{ route('loginss') }}" method="POST">
                    @csrf
                    <input type="email" placeholder="@lang('dashboard.auth.login.email')" name="email" required>
                    <input type="password" placeholder="@lang('dashboard.auth.login.password')" name="password" required>
                    <button type="submit" class="basicBtn">@lang('dashboard.auth.login.submit')</button>
                    <a href="{{ route('password.request') }}" class="forget">@lang('dashboard.auth.login.forget')</a>
                    <div class="clearfix"></div>
                    <div class="orDiv">
                        <span>or</span>
                        <div>0</div>
                    </div>
                    <div class="logWith">
                        <div class="aLogWiz">
                            <a href="{{route('login.social','google')}}" class="form-control">
                                <div>
                                    <img src="{{asset('frontend/img/googleImg.png')}}" alt="">
                                    <span>login with google</span>
                                </div>
                            </a>
                        </div>
                        <div class="aLogWiz">
                            <a href="{{route('login.social','apple')}}" class="form-control">
                                <div>
                                    <img src="{{asset('frontend/img/appleImg.png')}}" alt="">
                                    <span>login with apple</span>
                                </div>
                            </a>
                        </div>
                        <div class="aLogWiz">
                            <a href="{{route('login.social','facebook')}}" class="form-control">
                                <div>
                                    <img src="{{asset('frontend/img/fbImg.png')}}" alt="">
                                    <span>login with facebook</span>
                                </div>
                            </a>
                        </div>
                        <div class="aLogWiz">
                            <a href="{{url('/en')}}" class="form-control">
                                <div>
                                    <span>Continue as guest</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h6 class="dnt">@lang('front.no_account') <a href="{{ url('/register') }}">@lang('dashboard.auth.register.submit')  </a></h6>


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