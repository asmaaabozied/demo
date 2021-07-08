@extends('frontend.master')

@section('content')



    <section class="menuSec ">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear"
                         data-aos-duration="700" class="aos-init aos-animate">
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 col-xs-12 ">
                <div class="chkFinl pad0 col-md-12 newAdPage" style="height: 754px;">
                    <div class="logTit">
                        <a onclick="history.back()" class="bk">
                            <i class="fas fa-chevron-circle-left"></i>
                        </a>
                        <h6>@lang('addresses.attributes.address')</h6>
                    </div>
                    @include('dashboard.errors')

                    <form action="{{ route('createaddress') }}" method="POST">
                        @csrf
                        <div class="chRow2" style="height: 604px;">
                            <h4>@lang('addresses.actions.create')</h4>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="address"
                                           placeholder="@lang('addresses.attributes.address')">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <select name="area_id" class="countriesss" >
                                        <option value="">@lang('countries.plural')</option>
                                        @foreach(\App\Models\Country::get()->pluck('name','id') as $key=>$area)
                                            <option class="countriess" value="{{$key}}"
                                                    data-id="{{$key}}">{{$area}}</option>


                                        @endforeach
                                    </select>
                                    <input type="text" placeholder="@lang('addresses.attributes.block')" name="block">
                                    <input type="text" placeholder="@lang('addresses.attributes.avenue') (optional)"
                                           name="avenue">
                                    <input type="tel" placeholder="@lang('addresses.attributes.phone')" name="phone">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <select name="city_id" id="add_type">
                                        <option value="">@lang('site.cities')</option>
                                        {{--                                        @foreach(\App\Models\City::get()->pluck('name2','id') as $key=>$city)--}}

                                        {{--                                        <option value="{{$key}}">{{$city}}</option>--}}
                                        {{--                                        @endforeach--}}
                                    </select>
                                    <input type="text" placeholder="@lang('addresses.attributes.street')" name="street">
                                    <input type="text" placeholder="@lang('addresses.attributes.house')" name="house">
                                    <input type="Email" placeholder="@lang('addresses.attributes.email') " name="email">
                                </div>
                            </div>
                        </div>

                        <div class="col-12 aos-init aos-animate pad0" data-aos="flip-up">
                            <button class="btn fiOrder" type="submit">@lang('addresses.actions.save') </button>
                        </div>
                    </form>
                </div>
                <br>
                <div class="forMobOnly">

                    <footer>
                        <div class="col-12 rights">
                            <div onclick="window.open('http://www.wna.net.kw')" style="cursor: pointer"><span>©</span>
                                ©
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

@section('scripts')

    <script>



        jQuery(document).ready(function () {
            jQuery('.countriesss').change(function (e) {

                var centerId = e.target.value;
                console.log(e.target.value)
                // var country_id = $(this).data('id');
                // console.log($(this).data('id'))
                jQuery.ajax({
                    url: 'getcities/' + centerId,
                    type: 'GET',

                    success: function (result) {
                        console.log(result.data);

                        $('#add_type').empty();


                        var cities =result.data;

                        $.each(cities, function(i, el)
                        {
                            $('#add_type').append( new Option(el.name2,el.id) );

                        });

                    },
                    error: function (err) {
                        console.log(err)
                    }
                });
            });
        });
        //end of delete

    </script>
@endsection