<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>migouabo- {{$title}}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon and font awesome --> 
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/fave.png">
    <!-- All CSS is here
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('users/assets/css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/vendor/signericafat.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/vendor/cerebrisans.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/vendor/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/vendor/elegant.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/vendor/linear-icon.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/plugins/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/plugins/easyzoom.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/plugins/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/plugins/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/plugins/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/plugins/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('users/assets/css/style.css') }}">
</head>
<body>

  <!--corps de page-->
    <div id="content" class="main-wrapper">
        <!--debut header-->
        <header class="header-area">
            <div class="header-large-device">
                <div class="header-top header-top-ptb-6 bg-gray-6">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-7">
                                <div class="header-offer-wrap-2 mrg-none">
                                    <p><span>FREE SHIPPING</span> world wide for all orders over $199</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="header-top-right">
                                    <div class="same-style-wrap">
                                        <div class="same-style same-style-mrg-2 track-order">
                                            <a href="store-location.html">Store Location </a>
                                        </div>
                                        <div class="same-style same-style-mrg-2 currency-wrap">
                                            <a class="currency-dropdown-active" href="#"> USD($) <i class="icon-arrow-down"></i></a>
                                            <div class="currency-dropdown">
                                                <ul>
                                                    <li><a href="#">USD</a></li>
                                                    <li><a href="#">EUR</a></li>
                                                    <li><a href="#">BDT</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="same-style same-style-mrg-2 language-wrap">
                                            <a class="language-dropdown-active" href="#">English <i class="icon-arrow-down"></i></a>
                                            <div class="language-dropdown">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">German</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href=""><img src="{{ asset('users/assets/images/logo/migouabo.png') }}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu main-menu-padding-1 main-menu-lh-2">
                                    <nav>
                                        <ul>
                                            <li><a href="/">HOME <span class="bg-red">HOT</span></a>

                                            </li>
                                            <li><a href=" {{route('shop')}}  ">SHOP </a>

                                            </li>
                                            <li><a href="{{ route('blogs') }}">BLOG <span class="bg-green">NEW</span></a>
                                            </li>
                                            <li><a href="{{route('contact')}}">CONTACT </a></li>
                                            <li><a href="#">A PROPOS </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="header-action header-action-flex">
                                    <div class="same-style-2 same-style-2-font-inc">
                                    @auth
                                        <!--  <a href="/user/profile" > <div class="user_bulle"></div></a>
                                        Example single danger button -->
                                        <div class="dropdown user_bulle">
                                            <a role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{substr($user->name,0,2)}}
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="/user/profile">profile</a>
                                            <div class="dropdown-divider"></div>
                                            {{--  <a class="dropdown-item" href="{{ route('logout') }}">Se déconnecter</a>  --}}
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se déconnecter') }}
                                    </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="dropdown-item">
                                                @csrf
                                            </form>
                                            </div>
                                        </div>
                                        @else
                                            <!-- <a href="/login"><i class="icon-user"></i></a>
                                            Example single danger button -->
                                            <div class="dropdown user_bulle">
                                                <a role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-user"></i>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{route('login')}}">se connecter</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{route('register')}}">s'enrégistrer</a>

                                                </div>
                                            </div>
                                    @endauth



                                    </div>
                                    <div class="same-style-2 same-style-2-font-inc">
                                        <a href="{{ route('wishlist') }}"><i class="icon-heart"></i>
                                            <span class="pro-count purple">
                                                @if ($user)
                                                    {{ App\Models\Wishlist::where('user_id', $user->id)->count() }}
                                                @else
                                                    0
                                                @endif
                                            </span></a>
                                    </div>
                                    <div class="same-style-2 same-style-2-font-inc header-cart">
                                        <a class="cart-active" href="#">
                                            <i class="icon-basket-loaded"></i><span class="pro-count purple">{{ Cart::getContent()->count() }}</span>
                                            <span class="cart-amount">{{ Cart::getSubTotal() }} F CFA</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-bottom-ptb">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                {{-- liste deroulante menu principale --}}
                                
                                <div class="main-categori-wrap main-categori-wrap-modify">
                                    <a class="categori-show" href="#"><i class="lnr lnr-menu"></i> toutes les catégories<i class="icon-arrow-down icon-right"></i></a>
                                    <div class="category-menu categori-hide categori-not-visible">
                                        <nav>
                                           <ul>
                                                {{-- categoories end sub categorie --}}
                                                @foreach ($categories as $categorie)
                                                <li class="cr-dropdown"><a href="{{route('shop',['id_category'=>$categorie->id])}}"> {{$categorie->name}} <span class="icon-arrow-right"></span></a>
                                                    <div class="category-menu-dropdown ct-menu-res-height-2">
                                                        @foreach ($sub_categorys as $sub_category)
                                                            @if ($sub_category->categorie_id == $categorie->id)
                                                                <div class="single-category-menu ct-menu-mrg-bottom">
                                                                    <h4> {{$sub_category->name}} </h4>
                                                                    <ul>
                                                                        @foreach ($products_all as $product)
                                                                            @if ($product->souscategorie_id == $sub_category->id)
                                                                                <li><a href="{{route('product',['produit_id'=>$product->id])}}"> {{$product->name}} </a></li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        @endforeach        
                                                    </div>
                                                </li>
                                                @endforeach
                                                <!--fin header categorie-->

                                            </ul>
                                            
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="categori-search-wrap categori-search-wrap-modify">
                                    <div class="categori-style-1">
                                        <select class="nice-select nice-select-style-1">
                                            <option>toutes les catégories</option>
                                            <option>Clothing </option>
                                            <option>T-Shirt</option>
                                            <option>Shoes</option>
                                            <option>Jeans</option>
                                        </select>
                                    </div>
                                    <div class="search-wrap-3">
                                        <form action="#">
                                            <input placeholder="chercher un produit..." type="text">
                                            <button class='btn'><i class="lnr lnr-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="header-offer-wrap-5">
                                    <h3>50% OFF</h3>
                                    <h4>cyber <br>funk</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <img alt="" src="users/assets/images/logo/logo_mb.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="login-register.html"><i class="icon-user"></i></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc">
                                    <a href="{{ route('wishlist') }}"><i class="icon-heart"></i><span class="pro-count purple">{{ App\Models\Wishlist::count() }}</span></a>
                                </div>
                                <div class="same-style-2 same-style-2-font-inc header-cart">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count purple">02</span>
                                    </a>
                                </div>
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--fin header-->

        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    @if (\Cart::getContent()->count() == 0)
                        <p>Vous n'avez rien ajouté au panier</p>
                        <div class="cart-total">
                            <h4>Sous-total: <span>0 FCFA</span></h4>
                        </div>
                    @else
                    <ul>
                        @foreach (\Cart::getContent() as $product)
                        
                            <li class="single-product-cart">
                                <div class="cart-img">
                                    <a href="#"><img src="users/assets/images/cart/cart-1.jpg" alt=""></a>
                                </div>
                                <div class="cart-title">
                                    <h4><a href="#">{{$product->name}}</a></h4>
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
                    @endif
                    
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="{{ route('checkout') }}">Commander</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobile header start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="header-offer-wrap-2 mrg-none mobile-header-padding-border-4">
                        <p><span>FREE SHIPPING</span> world wide for all orders over $199</p>
                    </div>
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="{{route('index')}}">Home</a>
                                  
                                </li>
                                <li class="menu-item-has-children "><a href="{{route('shop')}}">shop</a>
                                </li>
                                <li class="menu-item-has-children"><a href="#">A propos</a>
                                </li>
                                <li class="menu-item-has-children "><a href="{{ url('/blog/articles') }}">Blog</a>
                                </li>
                                <li><a href="{{route('contact')}}">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
                        <a class="categori-show purple" href="#">
                            <i class="lnr lnr-menu"></i> toutes les catégories <i class="icon-arrow-down icon-right"></i>
                        </a>
                        <div class="categori-hide-2">
                            <nav>
                                <ul class="mobile-menu">

                                    <!--toutes les categories-->
                                    @foreach ($categories as $categorie)
                                        <li class="menu-item-has-children "><a href="#">{{$categorie->name}} </a>
                                            <ul class="dropdown">
                                                @foreach ($sub_categorys as $sub_category)
                                                    @if ($sub_category->categorie->name == $categorie->name)
                                                    <li class="menu-item-has-children"><a href="#">{{$sub_category->name}}</a>
                                                        <ul class="dropdown">
                                                            @foreach ($products_all as $product)
                                                            @if ($product->souscategorie->name == $sub_category->name)
                                                                <li><a href="{{route('product',['produit_id'=>$product->id])}}">{{$product->name}}</a></li>
                                                            @endif
                                                            @endforeach
                                                        </ul>
                                                   </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                     @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="mobile-header-info-wrap mobile-header-padding-border-3">
                        <div class="single-mobile-header-info">
                            <a href="store-location.html"><i class="lastudioicon-pin-3-2"></i> Store Location </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a class="mobile-language-active" href="#">Language <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown lang-dropdown-active">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-mobile-header-info">
                            <a class="mobile-currency-active" href="#">Currency <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown curr-dropdown-active">
                                <ul>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">Real</a></li>
                                    <li><a href="#">BDT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-contact-info mobile-header-padding-border-4">
                        <ul>
                            <li><i class="icon-phone "></i> (+612) 2531 5600</li>
                            <li><i class="icon-envelope-open "></i> norda@domain.com</li>
                            <li><i class="icon-home"></i> PO Box 1622 Colins Street West Australia</li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--fin mobile header-->

      <!--contenu-->
          @yield('content')
      <!--fin contenu-->


        <!--debut footer-->
        <div class="subscribe-area bg-gray-4 pt-95 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title-3">
                            <h2>Our Newsletter</h2>
                            <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form-2">
                            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style-2" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form-2">
                                    <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                                    <div class="mc-news-2" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear-2 clear-2-purple">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area bg-gray-4">
            <div class="footer-top border-bottom-4 pb-55">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-title">Quick Shop</h3>
                                <div class="footer-info-list info-list-50-parcent">
                                    <ul>
                                        <li><a href="shop.html">New In</a></li>
                                        <li><a href="shop.html">T-Shirts</a></li>
                                        <li><a href="shop.html">Best Seller</a></li>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">Clothing</a></li>
                                        <li><a href="shop.html">Bags</a></li>
                                        <li><a href="shop.html">Men</a></li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Women</a></li>
                                        <li><a href="shop.html">Jeans</a></li>
                                        <li><a href="shop.html">Baby Girl</a></li>
                                        <li><a href="shop.html">Shorts</a></li>
                                        <li><a href="shop.html">Baby Boys</a></li>
                                        <li><a href="shop.html">Blouses & Shirts</a></li>
                                        <li><a href="shop.html">Accessories</a></li>
                                        <li><a href="shop.html">Blazers</a></li>
                                        <li><a href="shop.html">Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="footer-widget ml-70 mb-40">
                                <h3 class="footer-title">useful links</h3>
                                <div class="footer-info-list">
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="wishlist.html">My Wishlish</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Track Order</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Returns/Exchange</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="footer-widget mb-40 ">
                                <h3 class="footer-title">Contact Us</h3>
                                <div class="contact-info-2">
                                    <div class="single-contact-info-2">
                                        <div class="contact-info-2-icon">
                                            <i class="icon-call-end"></i>
                                        </div>
                                        <div class="contact-info-2-content contact-info-2-content-purple">
                                            <p>Got a question? Call us 24/7</p>
                                            <h3 class="purple">(365) 8635 56-24-02 </h3>
                                        </div>
                                    </div>
                                    <div class="single-contact-info-2">
                                        <div class="contact-info-2-icon">
                                            <i class="icon-cursor icons"></i>
                                        </div>
                                        <div class="contact-info-2-content">
                                            <p>268 Orchard St, Mahattan, 12005, CA, United State</p>
                                        </div>
                                    </div>
                                    <div class="single-contact-info-2">
                                        <div class="contact-info-2-icon">
                                            <i class="icon-envelope-open "></i>
                                        </div>
                                        <div class="contact-info-2-content">
                                            <p>contact@norda.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="social-style-1 social-style-1-font-inc social-style-1-mrg-2">
                                    <a href="#"><i class="icon-social-twitter"></i></a>
                                    <a href="#"><i class="icon-social-facebook"></i></a>
                                    <a href="#"><i class="icon-social-instagram"></i></a>
                                    <a href="#"><i class="icon-social-youtube"></i></a>
                                    <a href="#"><i class="icon-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-30 pb-30 ">
                <div class="container">
                    <div class="row flex-row-reverse">
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-img payment-img-right">
                                <a href="#"><img src="users/assets/images/icon-img/payment.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright copyright-center">
                                <p>Copyright © 2020 HasThemes | <a href="https://hasthemes.com/">Built with <span>Norda</span> by HasThemes</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--fin footer-->

        @foreach ($products_all as $product)
          <!-- Modal -->
          <div class="modal fade" id="{{substr($product->name,0,4)}}" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                      </div>
                      <div class="modal-body">
                          <div class="row">
                              <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                  <div class="tab-content quickview-big-img">
                                      <div id="pro-1" class="tab-pane fade show active">
                                          {{-- les images --}}
                                          <img src="users/assets/images/products_images/{{$product->images->first()->name}}">
                                      </div>
                                      <div id="pro-2" class="tab-pane fade">
                                          <img src="users/assets/images/product/product-3.jpg" alt="">
                                      </div>
                                      <div id="pro-3" class="tab-pane fade">
                                          <img src="users/assets/images/product/product-6.jpg" alt="">
                                      </div>
                                      <div id="pro-4" class="tab-pane fade">
                                          <img src="users/assets/images/product/product-3.jpg" alt="">
                                      </div>
                                  </div>

                              </div>
                              <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                  <div class="product-details-content quickview-content">
                                      <h2>{{$product->name}}</h2>{{substr($product->name,0,4)}}
                                      <div class="product-ratting-review-wrap">
                                          <div class="product-ratting-digit-wrap">
                                              <div class="product-ratting">
                                                  <i class="icon_star"></i>
                                                  <i class="icon_star"></i>
                                                  <i class="icon_star"></i>
                                                  <i class="icon_star"></i>
                                                  <i class="icon_star"></i>
                                              </div>
                                              <div class="product-digit">
                                                  <span>5.0</span>
                                              </div>
                                          </div>
                                          <div class="product-review-order">
                                              <span>62 Reviews</span>
                                              <span>242 orders</span>
                                          </div>
                                      </div>
                                      <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                                      <div class="pro-details-price">
                                          <span class="new-price">$75.72</span>
                                          <span class="old-price">$95.72</span>
                                      </div>
                                      <div class="pro-details-color-wrap">
                                          <span>Color:</span>
                                          <div class="pro-details-color-content">
                                              <ul>
                                                  <li><a class="dolly" href="#">dolly</a></li>
                                                  <li><a class="white" href="#">white</a></li>
                                                  <li><a class="azalea" href="#">azalea</a></li>
                                                  <li><a class="peach-orange" href="#">Orange</a></li>
                                                  <li><a class="mona-lisa active" href="#">lisa</a></li>
                                                  <li><a class="cupid" href="#">cupid</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="pro-details-size">
                                          <span>Size:</span>
                                          <div class="pro-details-size-content">
                                              <ul>
                                                  <li><a href="#">XS</a></li>
                                                  <li><a href="#">S</a></li>
                                                  <li><a href="#">M</a></li>
                                                  <li><a href="#">L</a></li>
                                                  <li><a href="#">XL</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="pro-details-quality">
                                          <span>Quantity:</span>
                                          <div class="cart-plus-minus">
                                              <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                          </div>
                                      </div>
                                      <div class="product-details-meta">
                                          <ul>
                                              <li><span>Categories:</span> <a href="#">Woman,</a> <a href="#">Dress,</a> <a href="#">T-Shirt</a></li>
                                              <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a href="#">Texas</a></li>
                                          </ul>
                                      </div>
                                      <div class="pro-details-action-wrap">
                                          <div class="pro-details-add-to-cart">
                                              <a title="Add to Cart" href="#">Add To Cart </a>
                                          </div>
                                          <div class="pro-details-action">
                                              <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                              <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                              <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                              <div class="product-dec-social">
                                                  <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                                  <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                                  <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                                  <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Modal end -->
        @endforeach
        <!--fin conten-->
    </div>
  <!--fin corpd de page-->

    <!-- All JS is here
============================================ -->

    <script src="{{ asset('users/users/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('users/assets/js/vendor/jquery-3.5.1.min.j') }}s"></script>
    <script src="{{ asset('users/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('users/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/jquery.instagramfeed.min.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/jquery-ui-touch-punch.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/easyzoom.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('users/assets/js/plugins/ajax-mail.js') }}"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above
<script src="users/assets/js/vendor/vendor.min.js"></script>
<script src="users/assets/js/plugins/plugins.min.js"></script>  -->
    <!-- Main JS -->
    <script src="{{ asset('users/assets/js/main.js') }}"></script>
    <script src="{{ asset('jquery.js') }}"></script>


</body>

</html>
