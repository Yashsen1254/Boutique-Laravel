@extends('Frontend.Layout.main')
@section('content')

    <body>
        <div class="product-details-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-7 col-sm-12">
                        <div class="product-detail-image">
                            <div class="main-image-wapper">
                                <img class="main-image" src="{{url('uploads/products/'.$products->Image)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-12">
                        <div class="product-details-right">
                            <div class="breadcrumbs">
                                <a href="/">Home</a>
                                <a href="/shop">Shop</a>
                            </div>
                            <h3 class="product-name">{{$products->Name}}</h3>
                            <div class="short-descript">
                                <p>{{$products->Description}}
                                </p>
                            </div>
                            <form class="cart" enctype="multipart/form-data" method="POST" action="{{url('/cart/store')}}" >
							@csrf
							<input type="hidden" name="Productid" id="Productid" value="{{ $products->Id }}">
                                <div class="quantity">
                                    <span>Quantity</span>
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="+1" name="Quantity" id="Quantity">
                                </div>
                                @if(Session::has('Clientid'))
									<button type="submit" class="button is-grey">
										<span class="button_text">Add to Cart</span>
										<span class="button_icon icon is-cart"></span>
									</button>
								@else
									<a href="{{ route('front.register') }}" class="button is-grey">
										<span class="button_text">Add To Cart</span>
										<span class="button_icon icon is-cart"></span>
									</a>
								@endif
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tab-details-product padding-40-60">
                <ul class="box-tabs nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-1">DESCRIPTION</a></li>
                    <li><a data-toggle="tab" href="#tab-2">ADDITIONAL INFORMATION</a></li>
                </ul>
                <div class="tab-container">
                    <div id="tab-1" class="tab-panel active">
                        <p>Lorem ipsum dolor sit amet isse potenti sesquam ante aliquet lacusemper elit. Cras neque nulla
                            convallis non comodo.</p>
                        <ul>
                            <li>Soft-touch jersey</li>
                            <li>Crew neck </li>
                            <li>Logo print</li>
                            <li>Regular fit - true to size</li>
                        </ul>
                        <ul>
                            <li>Machine wash</li>
                            <li>100% Cotton</li>
                            <li>Our model wears a size Medium and is 185.5cm/6'1" tall</li>
                        </ul>
                    </div>
                    <div id="tab-2" class="tab-panel">
                        <p>Quisque sodales sodales lacus pharetra bibendum. Etiam commodo non velit ac rhoncus. Mauris
                            euismod purus sem, ac adipiscing quam laoreet et. Praesent vulputate ornare sem vel scelerisque.
                            Ut dictum augue non erat lacinia, sed lobortis elit gravida. Proin ante massa, ornare accumsan
                            ultricies et, posuere sit amet magna. Praesent dignissim, enim sed malesuada luctus, arcu sapien
                            sodales sapien, ut placerat eros nunc vel est. Donec tristique mi turpis, et sodales nibh
                            gravida eu. Etiam odio risus, porttitor non lacus id, rhoncus tempus tortor. Curabitur tincidunt
                            molestie turpis, ut luctus nibh sollicitudin vel. Sed vel luctus nisi, at mattis metus. Aenean
                            ultricies dolor est, a congue ante dapibus varius. Nulla at auctor nunc. Curabitur accumsan
                            feugiat felis ut pretium. Praesent semper semper nisi, eu cursus augue.</p>
                    </div>
                </div>
            </div>

            <div class="upsell-products">
                <div class="section-title text-center">
                    <h3>UPSELL PRODUCTS</h3>
                </div>
                <ul class="owl-carousel" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'
                    data-autoplay="true" data-loop="true" data-items="4" data-dots="false" data-nav="false"
                    data-margin="30">
                    <li class="product-item">
                        <div class="product-inner">
                            <div class="product-thumb">
                                <a href="#"><img src="Frontend/Assests/images/products/5.jpg" alt=""></a>
                                <div class="gorup-button">
                                    <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                                    <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                                <span class="price">
                                    <ins>£85.00</ins>
                                    <del>£95.00</del>
                                </span>
                                <a href="#" class="button">ADD TO CART</a>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="product-inner">
                            <div class="product-thumb">
                                <a href="#"><img src="Frontend/Assests/images/products/6.jpg" alt=""></a>
                                <div class="gorup-button">
                                    <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                                    <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                                <span class="price">
                                    <ins>£85.00</ins>
                                    <del>£95.00</del>
                                </span>
                                <a href="#" class="button">ADD TO CART</a>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="product-inner">
                            <div class="product-thumb">
                                <a href="#"><img src="Frontend/Assests/images/products/7.jpg" alt=""></a>
                                <div class="gorup-button">
                                    <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                                    <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                                <span class="price">
                                    <ins>£85.00</ins>
                                    <del>£95.00</del>
                                </span>
                                <a href="#" class="button">ADD TO CART</a>
                            </div>
                        </div>
                    </li>
                    <li class="product-item">
                        <div class="product-inner">
                            <div class="product-thumb">
                                <a href="#"><img src="Frontend/Assests/images/products/8.jpg" alt=""></a>
                                <div class="gorup-button">
                                    <a href="#" class="wishlist"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="compare"><i class="fa fa-exchange"></i></a>
                                    <a href="#" class="quick-view"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                                <span class="price">
                                    <ins>£85.00</ins>
                                    <del>£95.00</del>
                                </span>
                                <a href="#" class="button">ADD TO CART</a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div> <!--END CONTAINER-->



        <div class="box-list-reviews">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 ">
                        <div class="box-review">
                            <h4 class="title-border"><span class="text">CUSTOMER REVIEWS</span><span class="subtext">(
                                    2 Reviews )</span></h4>
                            <ol class="commentlist">
                                <li class="comment">
                                    <div class="comment_container">
                                        <div class="comment-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="meta">
                                                <span class="author">James Koster</span>
                                                <span class="date">20 Dec 2015</span>
                                            </div>
                                        </div>
                                        <div class="comment-text">
                                            <h5 class="comment-title">What a Beautiful Design</h5>
                                            <div class="comment-content">
                                                Cras neque nulla, convallis non commodo et, euismod nonsese. At vero eos et
                                                accusamus et iusto odio dignimos ducimus qui blanditiis praesentium
                                                voluptatum deleniti atque corrupti.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment_container">
                                        <div class="comment-info">
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="meta">
                                                <span class="author">James Koster</span>
                                                <span class="date">20 Dec 2015</span>
                                            </div>
                                        </div>
                                        <div class="comment-text">
                                            <h5 class="comment-title">What a Beautiful Design</h5>
                                            <div class="comment-content">
                                                Cras neque nulla, convallis non commodo et, euismod nonsese. At vero eos et
                                                accusamus et iusto odio dignimos ducimus qui blanditiis praesentium
                                                voluptatum deleniti atque corrupti.
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="box-review form-review">
                            <h4 class="title-border"><span class="text">ADD A REVIEW</span></h4>
                            <form class="reviews">
                                <p>
                                    <input type="text" name="name" placeholder="Your name" />
                                </p>
                                <p>
                                    <input type="email" name="email" placeholder="Your email" />
                                </p>
                                <p>
                                    <textarea cols="40" placeholder="Your review"></textarea>
                                </p>
                                <div class="rating">
                                    <label>Your rating</label>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <input type="submit" class="button submit" name="email" value="ADD A REVIEW" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="margin-top-60 margin-bottom-30">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="element-icon style2">
                            <div class="icon"><i class="flaticon flaticon-origami28"></i></div>
                            <div class="content">
                                <h4 class="title">FREE SHIPPING WORLD WIDE</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="element-icon style2">
                            <div class="icon"><i class="flaticon flaticon-curvearrows9"></i></div>
                            <div class="content">
                                <h4 class="title">MONEY BACK GUARANTEE</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="element-icon style2">
                            <div class="icon"><i class="flaticon flaticon-headphones54"></i></div>
                            <div class="content">
                                <h4 class="title">ONLINE SUPPORT 24/7</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <!-- Mirrored from html.kutethemes.com/boutique/html/product-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Nov 2024 17:26:18 GMT -->

    </html>
@endsection
