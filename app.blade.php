   <section class="menuSec">
      <div class="row">
         <div class="col-lg-7 col-md-12 rWbg forMobOnly" style="height: 754px;">
            <div class="centerImg">
               <img src="{{asset('frontend/img/1.png')}}" alt="" data-aos="fade-in" data-aos-duration="700" class="aos-init aos-animate">
            </div>
         </div>


         <div class="col-lg-5 col-md-12">
            <div class="col-md-12 pad0 menuBigDiv" style="max-height: 754px;">
               <div class="clearfix"></div>
               <div class="pi_di">
                  <button class="btn">@lang('site.DELIVERY')</button>
                  <a class="btn piBtn" href="{{route('pickup')}}">@lang('site.pickup')</a>
                  <div class="clearfix"></div>
                  <form action="" class="perfSerch">
                     <input type="text" id="myInput" onkeyup="getMySearch3()">
                     <i class="fas fa-search"></i>
                  </form>
               </div>
               <div class="clearfix"></div>
               <div class="topBtn">
                  <div id="btnContainer">
                     <button class="btn listView active" onclick="listView()"><i class="fa fa-bars"></i> </button>
                     <button class="btn gridView" onclick="gridView()"><i class="fa fa-th-large"></i> </button>
                  </div>
               </div>
               <div class="newMenu">

                  <div id="accordion" class="gridView">

                     @foreach (\App\Models\Category::get() as $category)



                     <div class="card">
                        <div class="card-header">
                           <h5 class="mb-0">
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne{{$category->id}}" aria-expanded="true" aria-controls="collapseOne">
                                 {{$category->name}} <small>({{$category->products->count()}})</small> <i class="fas fa-chevron-down"></i>
                                 <div class="forGrid">
                                    <a href="{{route('productall',$category->id)}}"> @lang('products.see')</a>
                                    <i class="fas fa-arrow-right"></i>
                                 </div>
                              </button>



                           </h5>
                        </div>
                        <div id="collapseOne{{$category->id}}" class="collapse show listViewMode{{ $loop->first ? 'show' : '' }} "   aria-labelledby="headingOne" data-parent="#accordion">
                           <div class="card-body">
                              <ul>
                                 @foreach ($category->products as $subproduct)

                                 <li class="column product_row" style="width: 100%;">
                                    <div class="MenuRow ">
                                       <div class="row">
                                          <img src="{{ $subproduct->getFirstMediaUrl() }}" alt="" onclick="window.location='{{ $subproduct->getProductUrl() }}';">
                                          <div onclick="window.location='{{ $subproduct->getProductUrl() }}';">
                                             <span class="foNam" onclick="window.location='{{ $subproduct->getProductUrl() }}';">{{$subproduct->name}}</span>
                                             <h6><p onclick="window.location='{{ $subproduct->getProductUrl() }}';">{!! $subproduct->description !!}<br></p></h6>
                                          </div>


                                          <div class="priDiv">
                                             <div class="foPrice">{{ price($subproduct->price) }}</div><div class="clearfix"></div>

{{--                                             <a href="{{route('favouritproduct',$subproduct->id)}}" id="favourite">--}}

{{--                                  <i class="@if($subproduct->favourite) fas @else far @endif fa-heart slide__heart "></i>--}}

{{--                                             </a>--}}




                                             <a class="favouritess" id="favouritess{{$subproduct->id}}" data-id="{{$subproduct->id}}"><i class=" @if($subproduct->favourite) fas @else far @endif fa-heart slide__heart "></i></a>

                                             <button class=" btn addToCart" onclick="addToCart('product-cart-form2-{{ $subproduct->id }}')">@lang('front.add_to_cart')</button>
                                             {{ BsForm::post(LaravelLocalization::localizeURL(url('/cart')), ['id' => 'product-cart-form2-'.$subproduct->id]) }}
                                             {{ Form::hidden('item_id', $subproduct->id) }}
                                             {{ Form::hidden('buy_now', 0) }}
                                             {{ Form::hidden('qty', 1) }}
                                             {{ Form::hidden('item_type', $subproduct->getMorphClass()) }}
                                             {{ BsForm::close() }}
                                          </div>

                                       </div>
                                    </div>
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
      </div></section>
