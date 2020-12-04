@extends('users/layouts/master',['title'=>'blog-detail'])
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
                              <a href="#"><img src="{{ asset('users/assets/images/cart/cart-1.jpg') }}" alt=""></a>
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
                              <a href="#"><img src="{{ asset('users/assets/images/cart/cart-2.jpg') }}" alt=""></a>
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
                      <li class="active">Blog details</li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="blog-area pt-120 pb-120">
          <div class="container">
              <div class="row flex-row-reverse">
                  <div class="col-lg-9">
                      <div class="blog-details-wrapper">
                          <div class="blog-details-top">
                              <div class="blog-details-img">
                                  <img alt="" src="{{ url('users/assets/images/article_image/'. $article->image) }}">
                              </div>
                              <div class="blog-details-content">
                                  <div class="blog-meta-2">
                                      <ul>
                                          {{-- <li>News</li> --}}
                                          <li>{{ $article->created_at->format('d/m/Y') }}</li>
                                      </ul>
                                  </div>
                                  <h1>{{ $article->titre }}</h1>
                                  <p>{!! $article->contenu !!} </p>
                                  {{-- <blockquote>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud.</blockquote>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> --}}
                              </div>
                          </div>
                          <div class="dec-img-wrapper">
                              <div class="row">
                                  <div class="col-md-6 col-sm-6 col-12">
                                      <div class="dec-img mb-50">
                                          <img alt="" src="{{ asset('users/assets/images/blog/blog-details-2.jpg') }}">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-sm-6 col-12">
                                      <div class="dec-img mb-50">
                                          <img alt="" src="{{ asset('users/assets/images/blog/blog-details-3.jpg') }}">
                                      </div>
                                  </div>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                          </div>
                          <div class="tag-share">
                              <div class="dec-tag">
                                  <ul>
                                      <li><a href="#">lifestyle ,</a></li>
                                      <li><a href="#">interior ,</a></li>
                                      <li><a href="#">outdoor</a></li>
                                  </ul>
                              </div>
                              <div class="blog-share">
                                  <span>share :</span>
                                  <div class="share-social">
                                      <ul>
                                          <li>
                                              <a class="facebook" href="#">
                                                  <i class="icon-social-facebook"></i>
                                              </a>
                                          </li>
                                          <li>
                                              <a class="twitter" href="#">
                                                  <i class="icon-social-twitter"></i>
                                              </a>
                                          </li>
                                          <li>
                                              <a class="instagram" href="#">
                                                  <i class="icon-social-instagram"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="next-previous-post">
                              <a href="#"> <i class="fa fa-angle-left"></i> prev post</a>
                              <a href="#">next post <i class="fa fa-angle-right"></i></a>
                          </div>
                          <div class="blog-comment-wrapper mt-55">
                              <h4 class="blog-dec-title">comments : 02</h4>
                              <div class="single-comment-wrapper mt-35">
                                  <div class="blog-comment-img">
                                      <img src="{{ asset('users/assets/images/blog/comment-1.jpg') }}" alt="">
                                  </div>
                                  <div class="blog-comment-content">
                                      <h4>Anthony Stephens</h4>
                                      <span>October 14, 2020 </span>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                      <div class="blog-details-btn">
                                          <a href="blog-details.html">read more</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="single-comment-wrapper mt-50 ml-120">
                                  <div class="blog-comment-img">
                                      <img src="{{ asset('users/assets/images/blog/comment-2.jpg') }}" alt="">
                                  </div>
                                  <div class="blog-comment-content">
                                      <h4>DX Joxova</h4>
                                      <span>October 14, 2020 </span>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                      <div class="blog-details-btn">
                                          <a href="blog-details.html">read more</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="blog-reply-wrapper mt-50">
                              <h4 class="blog-dec-title">post a comment</h4>
                              <form class="blog-form" action="#">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="leave-form">
                                              <input type="text" placeholder="Full Name">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="leave-form">
                                              <input type="email" placeholder="Email Address ">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="text-leave">
                                              <textarea placeholder="Message"></textarea>
                                              <input type="submit" value="POST COMMENT">
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
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
                          <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                              <h4 class="sidebar-widget-title">Articles récents</h4>
                              <div class="recent-post">
                            @php
                                $post_rct_i = 0;
                            @endphp  
                            @foreach ($articles as $article)
                                @if ($post_rct_i < 3)
                                    <div class="single-sidebar-blog">
                                        <div class="sidebar-blog-img">
                                            <a href="{{ route('article', ['article_id' => $article->id]) }}"><img src="{{ url('users/assets/images/article_image/'. $article->image) }}" alt="blog-img"></a>
                                        </div>
                                        <div class="sidebar-blog-content">
                                            <h5><a href="{{ route('article', ['article_id' => $article->id]) }}">{{ $article->titre }}</a></h5>
                                            <span>{{ $article->created_at->format('d/m/Y') }}</span>
                                        </div>
                                    </div>
                            @php
                                $post_rct_i++;
                            @endphp
                                @endif
                            @endforeach
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