@extends('users/layouts/master',['title'=>'Commande'])
@section('content')

        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        @if (\Cart::getContent()->count() != 0)
                          @foreach (\Cart::getContent() as $product)
                          <li class="single-product-cart">
                              <div class="cart-img">
                                  @php
                                      // dd($product->attributes->image);
                                      // {{$product->images->first()->name}}
                                  @endphp
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
                        @else
                            <p>Vous n'avez rien ajouté au panier</p>
                        @endif
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
                            <a href="index.html">Accueil</a>
                        </li>
                        <li class="active">Commande </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="checkout-main-area pt-120 pb-120">
            <div class="container">
                {{--  <div class="customer-zone mb-20">
                    <p class="cart-page-title">Returning customer? <a class="checkout-click1" href="#">Click here to login</a></p>
                    
                </div>  --}}
                {{--  <div class="customer-zone mb-20">
                    <p class="cart-page-title">Have a coupon? <a class="checkout-click3" href="#">Click here to enter your code</a></p>
                    <div class="checkout-login-info3">
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <input type="submit" value="Apply Coupon">
                        </form>
                    </div>
                </div>  --}}
                <form action="{{ route('checkout.store') }}" method="post">
                    @csrf
                    <div class="checkout-wrap pt-30">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="billing-info-wrap mr-50">
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label>Nom & Prénom(s) <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" name="nom_exp" value="{{ $user->name }}" disabled>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="billing-info mb-20">
                                                <label>Adresse <abbr class="required" title="required">*</abbr></label>
                                                <input class="billing-address @error('adresse_exp') is-invalid @enderror" name="adresse_exp" value="{{ old('adresse_exp') }}" placeholder="Ex.: Abidjan, Cocody Danga" type="text">
                                                @error('adresse_exp')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label>Numéro de téléphone <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" name="numero_exp" class="@error('numero_exp') is-invalid @enderror" value="{{ old('numero_exp') }}">
                                                @error('numero_exp')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="billing-info mb-20">
                                                <label>Adresse E-mail <abbr class="required" title="required">*</abbr></label>
                                                <input type="text" name="email_exp" value="{{ $user->email }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="additional-info-wrap">
                                        <label>Order notes</label>
                                        <textarea name="notes" placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="your-order-area">
                                    <h3>Votre commande</h3>
                                    <div class="your-order-wrap gray-bg-4">
                                        <div class="your-order-info-wrap">
                                            <div class="your-order-info">
                                                <ul>
                                                    <li>Produits <span>Total</span></li>
                                                </ul>
                                            </div>
                                            <div class="your-order-middle">
                                                <ul>
                                                    @foreach (\Cart::getContent() as $product)    
                                                        <li>{{ $product->name }} X {{ $product->quantity }} <span>{{ $product->quantity * $product->price }} </span></li>
                                                        {{--  <input type="hidden" name="product_id_{{ $product->id }}" value="{{ $product->id }}">  --}}
                                                    @endforeach
                                                    
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-subtotal">
                                                <ul>
                                                    <li>Sous-total <span>{{ \Cart::getSubTotal() }} </span></li>
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-shipping">
                                                <ul>
                                                    <li>Shipping <p>{{ $user->email }} </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="your-order-info order-total">
                                                <ul>
                                                    <li>Total <span> {{ \Cart::getTotal() }} </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="Place-order">
                                        {{--  <a href="#">Place Order</a>  --}}
                                        <button type="submit">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="subscribe-area bg-gray pt-115 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title">
                            <h2>keep connected</h2>
                            <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                                    <div class="mc-news" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area bg-gray pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-info-wrap">
                            <div class="footer-logo">
                                <a href="#"><img src="assets/images/logo/logo.png" alt="logo"></a>
                            </div>
                            <div class="single-contact-info">
                                <span>Our Location</span>
                                <p>869 General Village Apt. 645, Moorebury, USA</p>
                            </div>
                            <div class="single-contact-info">
                                <span>24/7 hotline:</span>
                                <p>(+99) 052 128 2399</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-right-wrap">
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop.html">Product </a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="blog.html">Blog.</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="social-style-2 social-style-2-mrg">
                                <a href="#"><i class="social_twitter"></i></a>
                                <a href="#"><i class="social_facebook"></i></a>
                                <a href="#"><i class="social_googleplus"></i></a>
                                <a href="#"><i class="social_instagram"></i></a>
                                <a href="#"><i class="social_youtube"></i></a>
                            </div>
                            <div class="copyright">
                                <p>Copyright © 2020 HasThemes | <a href="https://hasthemes.com/">Built with <span>Norda</span> by HasThemes</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection