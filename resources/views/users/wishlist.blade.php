@extends('layouts.yo3an_wagef.master', ['title' => trans('products.favorites')])

@section('content')
<nav aria-label="breadcrumb text-center" class="nav-title">
    <ol class="breadcrumb text-center">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">@lang('dashboard.home')</a></li>
        <li class="breadcrumb-item" aria-current="page">@lang('products.favorites')</li>
    </ol>
  </nav>
    <!-- ****** WHISHLIST ********* -->
    <div class="flash-deal mt-5">
        <div class="container">
       <h2 class="head-title">@lang('products.favorites') ({{ auth()->user()->favorites()->count() }})</h2>
       <div class="products">
           <div class="owl-product owl-theme owl-carousel">
               @foreach($favoriteProducts as $product)
                   @include('layouts.yo3an_wagef.partials.product-item-home')
               @endforeach
            </div>
       </div>
    </div>
</div>


@endsection
