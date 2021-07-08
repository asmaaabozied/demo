@extends('frontend.master')

@section('content')

    <section class="menuSec">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly">
                <div class="centerImg">

                    <img src="{{ asset('front/yo3an_wagef') }}/img/1.png" alt="" data-aos="fade-in"
                         data-aos-easing="linear"
                         data-aos-duration="700">
                </div>
            </div>
            <div class="col-lg-5 col-md-12 loginBigDiv">
                <div class="logTit">
                    <a onclick="history.back()" class="bk">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                    <h6>@lang('dashboard.auth.register.submit')</h6>
                </div>
                @include('dashboard.errors')
                <form action="{{ route('registerss') }}" method="post">
                    @csrf
                    <input type="text"
                           name="name"
                           required
                           value="{{ old('name') }}"
                           class="{{ $errors->has('name') ? ' is-invalid' : '' }}"
                           id="name" placeholder="@lang('dashboard.auth.register.name')">
                    <input type="email"
                           name="email"
                           required
                           value="{{ old('email') }}"
                           autofocus
                           class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           id="email" placeholder="@lang('dashboard.auth.register.email')">
                    <input type="text"
                           name="phone"
                           value="{{ old('phone') }}"
                           required
                           autofocus
                           class="{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                           id="phone" placeholder="@lang('auth.attributes.phone')">
                    <input type="password"
                           name="password"
                           required
                           autocomplete="new-password"
                           class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           id="password" placeholder="@lang('dashboard.auth.register.password')">


                    <button type="submit" class="basicBtn">@lang('dashboard.auth.register.submit')</button>
                    <a href="{{ route('password.request') }}" class="forget">@lang('dashboard.auth.login.forget')</a>

                    <div class="clearfix"></div>
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


                    <h6 class="dnt">@lang('front.have_account')<a
                                href="{{ url('/login') }}">@lang('dashboard.auth.login.submit')  </a></h6>

                </form>
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
