@extends('users/layouts/master',['title'=>'login'])
@section('content')
    
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
                      <li class="active">login - register </li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="login-register-area pt-115 pb-120">
          <div class="container">
              <div class="row">
                  <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                      <div class="login-register-wrapper">
                          <div class="login-register-tab-list nav">
                              <a class="active" data-toggle="tab" href="#lg1">
                                  <h4> login </h4>
                              </a>
                              <a data-toggle="tab" href="#lg2">
                                  <h4> register </h4>
                              </a>
                          </div>
                          <div class="tab-content">
                              <div id="lg1" class="tab-pane active">
                                  <div class="login-form-container">
                                      <div class="login-register-form">
                                          <form action="#" method="post">
                                              <input type="text" name="user-name" placeholder="Username">
                                              <input type="password" name="user-password" placeholder="Password">
                                              <div class="button-box">
                                                  <div class="login-toggle-btn">
                                                      <input type="checkbox">
                                                      <label>Remember me</label>
                                                      <a href="#">Forgot Password?</a>
                                                  </div>
                                                  <button type="submit">Login</button>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <div id="lg2" class="tab-pane">
                                  <div class="login-form-container">
                                      <div class="login-register-form">
                                          <form action="#" method="post">
                                              <input type="text" name="user-name" placeholder="Username">
                                              <input type="password" name="user-password" placeholder="Password">
                                              <input name="user-email" placeholder="Email" type="email">
                                              <div class="button-box">
                                                  <button type="submit">Register</button>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
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