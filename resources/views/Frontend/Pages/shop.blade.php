@extends('Frontend.Layout.main')
@section('content')
<body>
    <div id="box-mobile-menu" class="box-mobile-menu full-height full-width">
        <div class="box-inner">
            <span class="close-menu"><span class="icon pe-7s-close"></span></span>
        </div>
    </div>
    <div id="header-ontop" class="is-sticky"></div>
    <div class="banner">
        <div class="banner-content">
            <img src="Frontend/Assests/images/b/1.jpg" alt="">
        </div>
    </div>
    <div class="main-container no-slidebar">
        <div class="container">
            <div class="row">
                <div class="main-content col-sm-12">
                    <div class="shop-top">
                        <div class="shop-top-left">
                            <div class="breadcrumbs">
                                <a href="/">Home</a>
                                <span>Shop</span>
                            </div>
                        </div>
                    </div>
                    <ul class="product-list-grid desktop-columns-2 tablet-columns-2 mobile-columns-1 row">
						@foreach($products as $product)
                        <li class="product-item col-sm-6">
                            <div class="product-inner">
                                <div class="product-thumb has-back-image">
                                    <a href="#"><img src="{{url('uploads/products/'.$product->Image)}}" alt=""></a>
                                    <a class="back-image" href="#"></a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a href="#">{{$product->Name}}</a></h3>
                                    <span class="price">
                                        <ins>{{$product->Price}}</ins>
                                    </span>
                                    <a href="{{url('/singleproduct/'.$product->Id)}}" class="button">ADD TO CART</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection