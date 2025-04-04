@extends('Frontend.layout.main')
@section('content')
<body>

    <div class="main-container no-sidebar">
        <div class="container">
            <div class="main-content">
                <div class="page-title">
                    <h3>CHECKOUT</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-checkout">
                            <form action="{{ url('/checkout/store') }}" method="POST">
                                @csrf
                                <h5 class="form-title">BILLING ADDRESS</h5>
                                <p><input type="text" placeholder="Name" id="Name" name="Name"></p>
                                <p><input type="text" placeholder="Mobile" id="Mobile" name="Mobile"></p>
                                <p><input type="text" placeholder="Email" id="Email" name="Email"></p>
                                <p><input type="text" placeholder="Address" id="Address" name="Address"></p>
                                @foreach($carts->where('Clientid', session('Clientid')) as $cart)
											<input type="hidden" name="Cartid" value="{{ $cart->Id }}">
										@endforeach
										<input type="hidden" name="Totalquantity" value="{{ $cart->Quantity }}">
										<input type="hidden" name="Status" value="PENDING">
                        </div>
                        <div class="form-checkout order">
                            <h5 class="form-title">YOUR ORDER</h5>
                            <table class="shop-table order">
                                <thead> 
                                    <tr>
                                        <th class="product-name">PRODUCT</th>
                                        <th class="total">TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td class="product-name">{{ $product->Name }}</td>
                                        <td class="total"><span class="price">{{ $product->Price }}</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <td class="subtotal">ORDER TOTAL</td>
                                        <td class="total"><span class="price">{{ $products->sum('Price') * $carts->sum('Quantity') }}</span></td>
											<input type="hidden" name="Totalamount" value="{{ $products->sum('Price') * $carts->sum('Quantity') }}">
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button class="button btn-primary medium">PROCEED TO CHECKOUT</button>
                        </form>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
	
</body>
@endsection