@extends('layouts.dezato.master')

@section('content')
    <!-- ******* CATEGORY ********** -->
    <section class="innerHdr">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <a href="index.html" class="bkinner">
                              <svg xmlns="http://www.w3.org/2000/svg" width="33.051" height="28.776" viewBox="0 0 33.051 28.776">
                              <path id="Path_4068" data-name="Path 4068" d="M41.06,28.571a11.325,11.325,0,0,1-11.31,11.317H9.387a1.378,1.378,0,0,1,0-2.755H29.749a8.558,8.558,0,1,0,0-17.117H13.232l4.508,3.707a1.378,1.378,0,1,1-1.75,2.128L8.512,19.7c-.017-.014-.029-.03-.045-.045a1.313,1.313,0,0,1-.1-.1l-.011-.01c-.01-.011-.022-.019-.032-.03v0c-.014-.017-.025-.037-.038-.055a1.212,1.212,0,0,1-.075-.112c-.006-.009-.013-.017-.018-.027s-.017-.023-.023-.035-.014-.037-.023-.055c-.019-.04-.034-.081-.05-.123l0-.012c-.014-.039-.026-.079-.037-.119a1.2,1.2,0,0,1-.023-.124c0-.025-.012-.05-.014-.075s0-.049,0-.073-.006-.039-.006-.06.006-.04.006-.061,0-.048,0-.072a.522.522,0,0,1,.014-.076c.006-.042.014-.083.023-.124a1.19,1.19,0,0,1,.037-.119l0-.012c.015-.042.031-.083.05-.123.008-.018.013-.037.023-.055s.017-.023.023-.035.012-.018.018-.027a1.212,1.212,0,0,1,.074-.112c.013-.018.023-.038.038-.055v0c.014-.017.031-.029.045-.045a1.225,1.225,0,0,1,.1-.1c.016-.014.028-.031.045-.045l.007-.006h0l7.476-6.143a1.378,1.378,0,1,1,1.75,2.128l-4.508,3.707H29.752A11.323,11.323,0,0,1,41.06,28.571Z" transform="translate(-8.009 -11.112)" fill="#2b303a"/>
                            </svg>
                          </a>
                      <li class="breadcrumb-item"><a href="#">@lang('front.home')</a></li>
                      <li class="breadcrumb-item" aria-current="page">@lang('products.plural')</li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                      </ol>
                  </nav>
                </div>
                <div class="col-lg-7 col-md-12">
                    <h3></h3>
                </div>
            </div>
        </div>
    </section>

    {{ BsForm::post(LaravelLocalization::localizeURL(url('/cart')), ['id' => 'product-cart-form2-'.$product->id]) }}
    {{ Form::hidden('item_id', $product->id) }}
    {{ Form::hidden('buy_now', 0) }}
    {{ Form::hidden('item_type', $product->getMorphClass()) }}
    {{ BsForm::close() }}


    {{ BsForm::post(LaravelLocalization::localizeURL(route('products.favorites.add', $product))) }}
    <button class="btn" id="add_to_fav_btn" style="display: none" type="submit" title="@lang('products.actions.add-to-favorite')">
        <i class="far fa-heart"></i>
    </button>
    {{ BsForm::close() }}

    <section class="detailsProSlider">
        <div class="container">
            <div class="row">
                <div class="col-5 padR0 strangSlider">
                    <div class="pdp-image-gallery-block row">
                        <!-- Gallery  Thumbnail Images-->
                        <div class="gallery_pdp_container col-4">
                            <div id="gallery_pdp">
                                @foreach ($product->getMedia() as $media)
                                <a href="#" data-image="{{ $media->getFullUrl() }}" data-zoom-image="{{ $media->getFullUrl() }}">
                                    <img id="" src="{{ $media->getFullUrl() }}" />
                                </a>
                                @endforeach
                            </div>
                            <!-- Up and down button for vertical carousel -->
                            <a href="#" id="ui-carousel-next" style="display: inline;"> <i class="fas fa-angle-up"></i></a>
                            <a href="#" id="ui-carousel-prev" style="display: inline;"><i class="fas fa-angle-down"></i></a>
                        </div>
                        <!-- Gallery -->
                        <!-- gallery Viewer medium image -->
                        <div class="gallery-viewer col-8">
                            <img id="zoom_10" src="{{ $product->getFirstMediaUrl() }}" data-zoom-image="{{ $product->getFirstMediaUrl() }}" />

                        </div>
                        <!-- gallery Viewer -->
                    </div>
                </div>
                <div class="col-7 allProDet">
                    <div class="proN">
                        <h2>{{ $product->name }}</h2>
                        <h5>{{ price($product->getPrice()) }}</h5>
                        <h4 class="p-stock"> <span>@if($product->in_stock) @lang('products.attributes.in_stock') @endif </span></h4>
                        {{-- <span>{!! $product->description !!}</span> --}}
                    </div>
                    <div class="row ">
                        <div class="col-6 noPad descProL">
                            <div class="row">
                                <div class="number qty">
                                <small>@lang('front.quantity')</small>
                                <span class="minus">-</span>
                                <input type="text" value="1" name="qty" form="product-cart-form2-{{ $product->id }}"/>
                                <span class="plus">+</span>
                              </div>
                              <div class="leftStar">
                                <a href="#" data-toggle="modal" data-target="#exampleModal"><small> @lang('front.write_review')</small></a>
                                <span class="far fa-star" id="star1" onclick="$('#rating').val(1); $(this).attr('class', 'fa fa-star');"></span>
                                <span class="far fa-star" id="star2" onclick="$('#rating').val(2); $('#star1, #star2').attr('class', 'fa fa-star');"></span>
                                <span class="far fa-star" id="star3" onclick="$('#rating').val(3); $('#star1, #star2, #star3').attr('class', 'fa fa-star');"></span>
                                <span class="far fa-star" id="star4" onclick="$('#rating').val(4); $('#star1, #star2, #star3, #star4').attr('class', 'fa fa-star');"></span>
                                <span class="far fa-star" id="star5" onclick="$('#rating').val(5); $('#star1, #star2, #star3, #star4, #star5').attr('class', 'fa fa-star');"></span>
                              </div>
                              <div class="heartt">
                                <small>@lang('front.add_to_wish_list')</small>
                                @auth
                                    <i onclick="$('#add_to_fav_btn').click();" class="far fa-heart"></i>
                                @else
                                    <i data-toggle="modal" data-target="#login" class="far fa-heart"></i>
                                @endauth
                              </div>
                            </div>
                        </div>
                        <div class="col-6 noPad descProR">
                            <div class="row">
                            <div class="socialIcons">
                                <small>@lang('front.share')</small>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?text=Share+title&url={{ url()->current() }}"><i class="fab fa-twitter"></i></a>
                                {{-- <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-snapchat-ghost"></i></a> --}}
                              </div>
                              <div class="gUs socialIcons">
                                <small>@lang('front.call_or_send_message')</small>
                                <div class="aCent">
                                    <a href=""><i class="fab fa-whatsapp"></i></i></a>
                                    <a href=""><i class="fas fa-phone-alt"></i></a>
                                </div>
                                </div>
                            </div>
                        </div>
                        <button class="basicA" type="button" onclick="$('input[name=\'buy_now\']').val(1);$('#product-cart-form2-{{ $product->id }}').submit();" form="product-cart-form2-{{ $product->id }}">
                            @lang('front.buy_now')
                        </button>
                        <button class="basicA" type="button" onclick="$('#product-cart-form2-{{ $product->id }}').submit() ;">
                            @lang('front.add_to_cart')
                        </button>
                        <div class="col-12 noPad"><hr></div>
                    </div>
                </div>
            </div>
        </div>
      </section>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="POST" action="{{ route('write_review') }}">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">@lang('front.write_review')</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                @csrf
                <input type="hidden" class="form-control" name="rating" id="rating" value="1">
                <input type="hidden" class="form-control" name="product_id" value="{{ $product->id }}">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">@lang('front.name'):</label>
                    <input type="text" class="form-control" name="name" id="recipient-name" required>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">@lang('front.review'):</label>
                  <textarea class="form-control" name="review" id="message-text" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn" data-dismiss="modal">@lang('front.close')</button>
              <button type="submit" class="btn">@lang('front.send')</button>
            </div>
          </div>
        </div>
        </form>
      </div>

      <section class="desc_rev">
        <div class="container">
            <div class="row">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs">
                      <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#Description">@lang('front.description')</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#Review">@lang('front.comments')</a>
                      </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                      <div class="tab-pane container active" id="Description">
                        {!! $product->description !!}
                      </div>
                      <div class="tab-pane container fade" id="Review">
                        @foreach ($reviews as $review)
                        <div class="media">
                            <img src="{{ asset('front/dezato') }}/img/user.jpg" class="mr-3" alt="..." width="50px" height="50px">
                            <div class="media-body">
                            <h5 class="mt-0">{{ $review->name }}</h5>
                            <div class="p-rating">
                                @for($i=0; $i<$review->rating; $i++) <i class="fa fa-star-o"></i> @endfor
                                @for($i=5; $i>$review->rating; $i--) <i class="fa fa-star-o fa-fade"></i> @endfor
                            </div>
                            <p>{{ $review->review }} </p>
                            </div>
                        </div>
                        @endforeach
                      </div>
                  </div>
            </div>
        </div>
    </section>

    <section class="ourP">
      <div class="container">
        <h2 class="title-B">@lang('front.related_products')</h2>
        <div class="ourPslider">
        @foreach($sameCategory as $product)
          <div class="PItem">
            <img src="{{ $product->getFirstMediaUrl() }}" style="cursor: pointer" onclick="window.location='{{ $product->getWebUrl() }}'" alt="">
            <h4 style="cursor: pointer" onclick="window.location='{{ $product->getWebUrl() }}'">{{ $product->name }}</h4>
            <h6>{{ price($product->getPrice()) }}</h6>
          </div>
          @endforeach
        </div>
      </div>
    </section>
@endsection
