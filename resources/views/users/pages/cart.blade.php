@extends('users/layouts/master',['title'=>'panier'])
@section('content')
    
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        @foreach (\Cart::getContent() as $product)
                          <li class="single-product-cart">
                              <div class="cart-img">
                                  <a href="#"><img src="users/assets/images/products_images/{{ $product->attributes->image }}" alt=""></a>
                              </div>
                              <div class="cart-title">
                                  <h4><a href="#">{{ $product->name }}</a></h4>
                                  <span> {{$product->quantity}} × {{$product->price}}	</span>
                              </div>
                              <div class="cart-delete">
                                  <a href="{{ route('cart.delete', ['id' => $product->id ]) }}">×</a>
                              </div>
                          </li>
                        @endforeach
                    </ul>
                    <div class="cart-total">
                        <h4>Sous-total: <span>{{ Cart::getSubTotal() }} F CFA</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="{{ route('cart.index') }}">Votre panier</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="{{ route('checkout') }}">Commander</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <ul>
                        <li>
                            <a href="{{ route('index') }}">Accueil</a>
                        </li>
                        <li class="active">Panier </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cart-main-area pt-115 pb-120">
            <div class="container">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom du produit</th>
                                            <th>Prix Unitaire</th>
                                            <th>Qté</th>
                                            <th>Sous-total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (\Cart::getContent() as $product)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="users/assets/images/products_images/{{ $product->attributes->image }}" alt=""></a>
                                                </td>
                                                <td class="product-name"><a href="#">{{ $product->name }}</a></td>
                                                <td class="product-price-cart"><span class="amount">{{ $product->price }} F CFA</span></td>
                                                {{--  <form action="{{ route('cart.update', ['id' => $product->id]) }}" method="post" id="cart_update_{{ $product->id }}">  --}}
                                                    {{--  @csrf  --}}
                                                    <td class="product-quantity pro-details-quality">
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="{{ $product->quantity }}">
                                                        </div>
                                                    </td>
                                                
                                                    {{--  <input type="hidden" id="id_cart_product" name="cart_id" value="{{ $product->id }}">  --}}
                                                {{--  </form>  --}}
                                                <td class="product-subtotal">{{ $product->quantity * $product->price }}</td>
                                                <td class="product-remove">
                                                    <a href="{{ route('cart.delete', ['id' => $product->id ]) }}"><i class="icon_close"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="{{ route('shop') }}">Continue Shopping</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button>Update Cart</button>
                                            <a href="{{ route('cart.delete.all') }}">Clear Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label>
                                                    * Country
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Region / State
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Zip/Postal Code
                                                </label>
                                                <input type="text">
                                            </div>
                                            <button class="cart-btn-2" type="submit">Get A Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                    </div>
                                    <div class="discount-code">
                                        <p>Enter your coupon code if you have one.</p>
                                        <form>
                                            <input type="text" required="" name="name">
                                            <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                    </div>
                                    <h5>Total des produits <span>{{ \Cart::getTotal()}} F CFA</span></h5>
                                    <div class="total-shipping">
                                        <h5>Total shipping</h5>
                                        <form action="" method="post">
                                            <ul>
                                                <li><input type="radio" name="shipping"> Standard <span>1000 F CFA</span></li>
                                                <li><input type="radio" name="shipping"> Express <span>2000 F CFA</span></li>
                                                {{--  <li><input type="radio" name="radio1" id="radio1"><span>Autre express</span> </li>  --}}
                                            </ul>
                                        </form>
                                    </div>
                                    <h4 class="grand-totall-title">Grand Total 
                                        <span>
                                            @php
                                                
                                            @endphp
                                            {{ \Cart::getTotal()}}
                                        </span>
                                    </h4>
                                    <a href="{{ route('checkout') }}">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection