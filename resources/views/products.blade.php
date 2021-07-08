@extends('layouts.yo3an_wagef.master')

@section('content')
<!-- "breadcrumb">===========================================================================-->
<nav aria-label="breadcrumb text-center" class="nav-title">
    <ol class="breadcrumb text-center">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">@lang('front.home')</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
    </ol>
  </nav>
 <!--- Category============================================================================-->
<section class="category-section spad">
    <div class="container">
        <div class="row">
            @include('layouts.yo3an_wagef.partials.products-filter', ['categories'=> $categories, 'brands' => $brands])
            <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="category-title">
                    <h2>{{ $title }}</h2>
                </div>
                <div class="row">
                    @foreach($products as $product)
                        @if (isset($page) && $page=="offers")
                            @include('layouts.yo3an_wagef.partials.product-item-offer')
                        @else
                            @include('layouts.yo3an_wagef.partials.product-item-category')
                        @endif
                    @endforeach
                </div>
                <div class="text-center w-100 pt-3">
                    <div class="">{{ $products->render("pagination::simple-bootstrap-4") }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
