@extends('Frontend.Layout.main')
@section('content')
<body>
    <div id="box-mobile-menu" class="box-mobile-menu full-height full-width">
        <div class="box-inner">
            <span class="close-menu"><span class="icon pe-7s-close"></span></span>
        </div>
    </div>
    <div id="header-ontop" class="is-sticky"></div>
        <div class="main-container no-sidebar">
            <div class="container">
                <div class="main-content">
                    <div class="page-title">
                        <h3>SHOPPING CART</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <table class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Qty</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carts as $cart)
								@if($cart->Clientid == session('Clientid') && $cart->isdeleted != 1)	
                                    <tr>
                                        <td class="product-thumbnail"><img src="{{asset('uploads/products/'.$cart->Image)}}" alt=""></td>
                                        <td class="product-name"><a href="#">{{$cart->Name}}</a></td>
                                        <td>{{$cart->Price}}</td>
                                        <td><input class="qty" type="text" value="{{$cart->Quantity}}"></td>
                                        <td>{{$cart->Price * $cart->Quantity}}</td>
                                        <td class="product-remove"><a href="/cart/delete/{{$cart->Id}}"><i class="fa fa-close"></i></a></td>
                                    </tr>
                                    @endif
							@endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="box-cart-total">
                                <h2 class="title">Cart Totals</h2>
                                <table>
                                    <tr class="order-total">
                                        <td>Toal</td>
                                        <td><span class="price">{{ $carts->reject(function($cart) { return $cart->isdeleted == 1; })->sum(function($cart) { return $cart->Price * $cart->Quantity; }) }}</span></td>
                                    </tr>
                                </table>
                                <a class="button btn-primary medium checkout-button" href="/checkout">PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="scroll_top" title="Scroll to Top" style="display: block;"><i class="fa fa-arrow-up"></i></a>
</body>
@endsection