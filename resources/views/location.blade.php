@extends('layouts.yo3an_wagef.master')

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
    <div class="col-lg-5 col-md-12 locBigDiv">
      <div class="col-12">
        <form action="">
          <div class="accordion" id="location">
            @foreach ($locations as $location)
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{ $location->name }} <i class="fa fa-angle-down"></i>
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse @if($loop->first) show @endif" aria-labelledby="headingOne" data-parent="#location">
                <div class="card-body">
                  <label>
                    <input type="radio" name="radio1" checked/>
                    <div class="row">
                      <div class="col-md-6 col-sm-12  pad0">
                        <iframe src="https://maps.google.com/maps?q={{ $location->lat }},{{ $location->lng }}&hl=es;z=18&amp;output=embed" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                      </div>
                      <div class="col-md-6 col-sm-12  padR0">
                        <div class="loca">
                          <i class="fas fa-map-marker-alt"></i>
                          <span>{{ $location->address }}</span>
                        </div>

                        <div class="loca">
                          <i class="fas fa-phone-alt"></i>
                          <span><a href="tel:{{ $location->phone }}">{{ $location->phone }}</a></span>
                        </div>
                        <div class="loca">
                          <i class="fab fa-whatsapp"></i>
                          <span><a href="https://wa.me/{{ $location->whatsapp }}">{{ $location->whatsapp }}</a></span>
                        </div>
                      </div>
                    </div>
                  </label>

                </div>
              </div>
            </div>
            @endforeach
          </div>
        </form>
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
