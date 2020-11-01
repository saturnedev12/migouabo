@extends('users/layouts/master',['title'=>'blogs'])

@section('content')
        <!-- Mobile menu start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
          <div class="clickalbe-sidebar-wrap">
              <a class="sidebar-close"><i class="icon_close"></i></a>
              <div class="mobile-header-content-area">
                  <div class="header-offer-wrap mobile-header-padding-border-4">
                      <p><i class="icon-paper-plane"></i> FREE SHIPPING world wide for all orders over <span>$199</span></p>
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
                              <li class="menu-item-has-children"><a href="index.html">Home</a>
                                  <ul class="dropdown">
                                      <li><a href="index.html">Home version 1 </a></li>
                                      <li><a href="index-2.html">Home version 2</a></li>
                                      <li><a href="index-3.html">Home version 3</a></li>
                                      <li><a href="index-4.html">Home version 4</a></li>
                                      <li><a href="index-5.html">Home version 5</a></li>
                                      <li><a href="index-6.html">Home version 6</a></li>
                                      <li><a href="index-7.html">Home version 7</a></li>
                                      <li><a href="index-8.html">Home version 8</a></li>
                                      <li><a href="index-9.html">Home version 9</a></li>
                                      <li><a href="index-10.html">Home version 10</a></li>
                                  </ul>
                              </li>
                              <li class="menu-item-has-children "><a href="#">shop</a>
                                  <ul class="dropdown">
                                      <li class="menu-item-has-children"><a href="#">shop layout</a>
                                          <ul class="dropdown">
                                              <li><a href="shop.html">standard style</a></li>
                                              <li><a href="shop-list.html">shop list style</a></li>
                                              <li><a href="shop-fullwide.html">shop fullwide</a></li>
                                              <li><a href="shop-no-sidebar.html">grid no sidebar</a></li>
                                              <li><a href="shop-list-no-sidebar.html">list no sidebar</a></li>
                                              <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                              <li><a href="store-location.html">store location</a></li>
                                          </ul>
                                      </li>
                                      <li class="menu-item-has-children"><a href="#">Products Layout</a>
                                          <ul class="dropdown">
                                              <li><a href="product-details.html">tab style 1</a></li>
                                              <li><a href="product-details-2.html">tab style 2</a></li>
                                              <li><a href="product-details-sticky.html">sticky style</a></li>
                                              <li><a href="product-details-gallery.html">gallery style </a></li>
                                              <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                              <li><a href="product-details-group.html">group style</a></li>
                                              <li><a href="product-details-fixed-img.html">fixed image style </a></li>
                                          </ul>
                                      </li>
                                  </ul>
                              </li>
                              <li class="menu-item-has-children"><a href="#">Pages</a>
                                  <ul class="dropdown">
                                      <li><a href="about-us.html">about us </a></li>
                                      <li><a href="cart.html">cart page</a></li>
                                      <li><a href="checkout.html">checkout </a></li>
                                      <li><a href="my-account.html">my account</a></li>
                                      <li><a href="wishlist.html">wishlist </a></li>
                                      <li><a href="compare.html">compare </a></li>
                                      <li><a href="contact.html">contact us </a></li>
                                      <li><a href="order-tracking.html">order tracking</a></li>
                                      <li><a href="login-register.html">login / register </a></li>
                                  </ul>
                              </li>
                              <li class="menu-item-has-children "><a href="#">Blog</a>
                                  <ul class="dropdown">
                                      <li><a href="blog.html">blog standard </a></li>
                                      <li><a href="blog-no-sidebar.html">blog no sidebar </a></li>
                                      <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                      <li><a href="blog-details.html">blog details</a></li>
                                  </ul>
                              </li>
                              <li><a href="contact.html">Contact us</a></li>
                          </ul>
                      </nav>
                      <!-- mobile menu end -->
                  </div>
                  <div class="mobile-header-info-wrap mobile-header-padding-border-3">
                      <div class="single-mobile-header-info">
                          <a href="order-tracking.html"><i class="lastudioicon-pin-3-2"></i> Track Your Order </a>
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
      <!-- mini cart start -->
      <div class="sidebar-cart-active">
          <div class="sidebar-cart-all">
              <a class="cart-close" href="#"><i class="icon_close"></i></a>
              <div class="cart-content">
                  <h3>Shopping Cart</h3>
                  <ul>
                      <li class="single-product-cart">
                          <div class="cart-img">
                              <a href="#"><img src="users/assets/images/cart/cart-1.jpg" alt=""></a>
                          </div>
                          <div class="cart-title">
                              <h4><a href="#">Simple Black T-Shirt</a></h4>
                              <span> 1 × $49.00	</span>
                          </div>
                          <div class="cart-delete">
                              <a href="#">×</a>
                          </div>
                      </li>
                      <li class="single-product-cart">
                          <div class="cart-img">
                              <a href="#"><img src="users/assets/images/cart/cart-2.jpg" alt=""></a>
                          </div>
                          <div class="cart-title">
                              <h4><a href="#">Norda Backpack</a></h4>
                              <span> 1 × $49.00	</span>
                          </div>
                          <div class="cart-delete">
                              <a href="#">×</a>
                          </div>
                      </li>
                  </ul>
                  <div class="cart-total">
                      <h4>Subtotal: <span>$170.00</span></h4>
                  </div>
                  <div class="cart-checkout-btn">
                      <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                      <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="breadcrumb-area bg-gray">
          <div class="container">
              <div class="breadcrumb-content text-center">
                  <ul>
                      <li>
                          <a href="index.html">Home</a>
                      </li>
                      <li class="active">Blog page</li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="blog-area pt-120 pb-120">
          <div class="container">
              <div class="row flex-row-reverse">
                  <div class="col-lg-9">
                      <div class="row">
                          <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                              <div class="blog-wrap mb-40">
                                  <div class="blog-img mb-20">
                                      <a href="blog-details.html"><img src="users/assets/images/blog/blog-1.jpg" alt="blog-img"></a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-meta">
                                          <ul>
                                              <li><a href="#">News </a></li>
                                              <li>May 25, 2020</li>
                                          </ul>
                                      </div>
                                      <h1><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg Show</a></h1>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                              <div class="blog-wrap mb-40">
                                  <div class="blog-img mb-20">
                                      <a href="blog-details.html"><img src="users/assets/images/blog/blog-2.jpg" alt="blog-img"></a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-meta">
                                          <ul>
                                              <li><a href="#">Inspiration </a></li>
                                              <li>May 25, 2020</li>
                                          </ul>
                                      </div>
                                      <h1><a href="blog-details.html">Designers matched perfectly to you on Envato Studio</a></h1>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                              <div class="blog-wrap mb-40">
                                  <div class="blog-img mb-20">
                                      <a href="blog-details.html"><img src="users/assets/images/blog/blog-3.jpg" alt="blog-img"></a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-meta">
                                          <ul>
                                              <li><a href="#">Lookbook </a></li>
                                              <li>May 25, 2020</li>
                                          </ul>
                                      </div>
                                      <h1><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a></h1>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                              <div class="blog-wrap mb-40">
                                  <div class="blog-img mb-20">
                                      <a href="blog-details.html"><img src="users/assets/images/blog/blog-6.jpg" alt="blog-img"></a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-meta">
                                          <ul>
                                              <li><a href="#">News </a></li>
                                              <li>May 25, 2020</li>
                                          </ul>
                                      </div>
                                      <h1><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg Show</a></h1>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                              <div class="blog-wrap mb-40">
                                  <div class="blog-img mb-20">
                                      <a href="blog-details.html"><img src="users/assets/images/blog/blog-7.jpg" alt="blog-img"></a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-meta">
                                          <ul>
                                              <li><a href="#">Inspiration </a></li>
                                              <li>May 25, 2020</li>
                                          </ul>
                                      </div>
                                      <h1><a href="blog-details.html">Designers matched perfectly to you on Envato Studio</a></h1>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                              <div class="blog-wrap mb-40">
                                  <div class="blog-img mb-20">
                                      <a href="blog-details.html"><img src="users/assets/images/blog/blog-8.jpg" alt="blog-img"></a>
                                  </div>
                                  <div class="blog-content">
                                      <div class="blog-meta">
                                          <ul>
                                              <li><a href="#">Lookbook </a></li>
                                              <li>May 25, 2020</li>
                                          </ul>
                                      </div>
                                      <h1><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a></h1>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="pro-pagination-style text-center mt-10">
                          <ul>
                              <li><a class="prev" href="#"><i class="icon-arrow-left"></i></a></li>
                              <li><a class="active" href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a class="next" href="#"><i class="icon-arrow-right"></i></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                          <div class="sidebar-widget mb-40">
                              <h4 class="sidebar-widget-title">Search </h4>
                              <div class="sidebar-search">
                                  <form class="sidebar-search-form" action="#">
                                      <input type="text" placeholder="Search Post">
                                      <button>
                                          <i class="icon-magnifier"></i>
                                      </button>
                                  </form>
                              </div>
                          </div>
                          <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                              <h4 class="sidebar-widget-title">Categories </h4>
                              <div class="shop-catigory">
                                  <ul>
                                      <li><a href="shop.html">T-Shirt</a></li>
                                      <li><a href="shop.html">Shoes</a></li>
                                      <li><a href="shop.html">Clothing </a></li>
                                      <li><a href="shop.html">Women </a></li>
                                      <li><a href="shop.html">Baby Boy </a></li>
                                      <li><a href="shop.html">Accessories </a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                              <h4 class="sidebar-widget-title">Recent Posts </h4>
                              <div class="recent-post">
                                  <div class="single-sidebar-blog">
                                      <div class="sidebar-blog-img">
                                          <a href="blog-details.html"><img src="users/assets/images/blog/blog-4.jpg" alt=""></a>
                                      </div>
                                      <div class="sidebar-blog-content">
                                          <h5><a href="blog-details.html">Basic colord mixed</a></h5>
                                          <span>Sep 5th, 2020</span>
                                      </div>
                                  </div>
                                  <div class="single-sidebar-blog">
                                      <div class="sidebar-blog-img">
                                          <a href="blog-details.html"><img src="users/assets/images/blog/blog-5.jpg" alt=""></a>
                                      </div>
                                      <div class="sidebar-blog-content">
                                          <h5><a href="blog-details.html">Five things you only</a></h5>
                                          <span>Sep 15th, 2020</span>
                                      </div>
                                  </div>
                                  <div class="single-sidebar-blog">
                                      <div class="sidebar-blog-img">
                                          <a href="blog-details.html"><img src="users/assets/images/blog/blog-4.jpg" alt=""></a>
                                      </div>
                                      <div class="sidebar-blog-content">
                                          <h5><a href="blog-details.html">Basic colord mixed</a></h5>
                                          <span>Sep 5th, 2020</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                              <h4 class="sidebar-widget-title">Archives </h4>
                              <div class="archives-wrap">
                                  <select>
                                      <option>Select Month</option>
                                      <option> January 2020 </option>
                                      <option> December 2018 </option>
                                      <option> November 2018 </option>
                                  </select>
                              </div>
                          </div>
                          <div class="sidebar-widget shop-sidebar-border pt-40">
                              <h4 class="sidebar-widget-title">Popular Tags</h4>
                              <div class="tag-wrap sidebar-widget-tag">
                                  <a href="#">Clothing</a>
                                  <a href="#">Accessories</a>
                                  <a href="#">For Men</a>
                                  <a href="#">Women</a>
                                  <a href="#">Fashion</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
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
      
    
@endsection