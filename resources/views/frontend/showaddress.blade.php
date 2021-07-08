@extends('frontend.master')

@section('content')


    <section class="menuSec">
        <div class="row">
            <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
                <div class="centerImg">
                    <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-easing="linear"
                         data-aos-duration="700" class="aos-init aos-animate">
                </div>
            </div>

            <div class="col-lg-5 col-md-12 cartBigDiv noScrll" style="height: 754px;">
                <div class="logTit">
                    <a onclick="history.back()"  class="bk">
                        <i class="fas fa-chevron-circle-left"></i>
                    </a>
                    <h6>@lang('addresses.actions.save') @lang('addresses.plural')  </h6>
                </div>
                <div class="scrollDiv" style="height: 754px;">
                    @foreach($address as $addres)
                        <div class="itemEditable" id="itemEditable{{$addres->id}}">
                            <p>{{$addres->address ?? ''}}</p>
                            <a href="{{route('editaddress.edit',$addres->id)}}" class="btn editL"><i
                                        class="fas fa-pencil-alt"></i></a>

                            <a class="btn deletL delete" data-id="{{$addres->id}}" ><i
                                        class="far fa-trash-alt"></i></a>


                        </div>
                    @endforeach
                </div>

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

@section('scripts')

    <script>




        jQuery(document).ready(function () {
            jQuery('.delete').click(function (e) {
                e.preventDefault();
                // var current = jQuery(this);
                // var url = current.data('url');
                var adderss_id = $(this).data('id');
                console.log($(this).data('id'))
                jQuery.ajax({
                    url: `deleteaddress/${adderss_id}/delete`,
                    method : 'GET',

                    success: function (result) {
                        console.log(result);
                        $(`#itemEditable${adderss_id}`).css('display', 'none');
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