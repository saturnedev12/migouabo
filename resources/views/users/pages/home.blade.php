@extends('users/layouts/master',['title'=>'home'])

@section('content')

<div class="slider-banner-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-8">
              <div class="slider-area  mb-30">
                  <div class="hero-slider-active-3 dot-style-2 dot-style-2-position-4 dot-style-2-active-purple">
                      <div class="single-hero-slider bg-rose single-animation-wrap">
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                  <div class="hero-slider-content-1 slider-animated-1 hero-slider-content-1-padding1">
                                      <h4 class="animated font-dec">Bienvenue sur Migouabo</h4>
                                      <h1 class="animated font-dec">imaginez le temps que vous gagnerez en faisant vos courses ici</h1>
                                      <p class="animated width-inc">decouvrez tout nos produits et offres a des prix aborde</p>
                                      
                                      <br>
                                      <div class="btn-style-1">
                                      <a class="animated btn-1-padding-1 btn-1-bg-purple" href="{{route('shop')}}">explorer maintenant</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                  <div class="hm6-hero-slider-img slider-animated-1">
                                      <img class="animated" src="users/assets/images/menu/mi-guabo Comande 1.png" alt="">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="single-hero-slider bg-girs single-animation-wrap">
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                  <div class="hm6-hero-slider-img slider-animated-1">
                                      <img class="animated" src="users/assets/images/menu/banner2.png" alt="">
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                  <div class="hero-slider-content-1 slider-animated-1 hero-slider-content-1-padding1">
                                      <h4 class="animated font-dec"></h4>
                                      <h1 class="animated font-dec"> ressentez le bonheur d’être satisfait.</h1>
                                      <p class="animated width-inc">faite vous livrer vos aliments tout frais rapidement et facilement.</p>
                                      <div class="btn-style-1">
                                        <a class="animated btn-1-padding-1 btn-1-bg-purple" href="{{route('shop')}}">explorer maintenant</a>
                                      </div>
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="row">
                  <div class="col-lg-12 col-md-6">
                      <div class="banner-wrap mb-30">
                          <div class="banner-img banner-img-zoom">
                              <a href="product-details.html"><img src="users/assets/images/banner/banner-14.jpg" alt=""></a>
                          </div>
                          <div class="banner-content-13">
                              <span>20x absorbs</span>
                              <h2>Triple <br>guards</h2>
                              <div class="product-available-wrap">
                                  <div class="single-product-available">
                                      <h3>6</h3>
                                      <span>pack</span>
                                  </div>
                                  <div class="single-product-available">
                                      <h3>124</h3>
                                      <span>diapers</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12 col-md-6">
                      <div class="banner-wrap mb-30">
                          <div class="banner-img banner-img-zoom">
                              <a href="product-details.html"><img src="users/assets/images/banner/banner-15.jpg" alt=""></a>
                          </div>
                          <div class="banner-content-14">
                              <span>ZHnio</span>
                              <h2>head <br>phone</h2>
                              <p>new version 3.0 for new era</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="service-area pb-115">
  <div class="container">
      <div class="service-wrap-border service-wrap-padding-3">
          <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                  <div class="single-service-wrap-2 mb-30">
                      <div class="service-icon-2 icon-purple">
                          <i class="icon-cursor"></i>
                      </div>
                      <div class="service-content-2">
                          <h3>Free Shipping</h3>
                          <p>Oders over $99</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1 service-border-1-none-md">
                  <div class="single-service-wrap-2 mb-30">
                      <div class="service-icon-2 icon-purple">
                          <i class="icon-refresh "></i>
                      </div>
                      <div class="service-content-2">
                          <h3>90 Days Return</h3>
                          <p>For any problems</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                  <div class="single-service-wrap-2 mb-30">
                      <div class="service-icon-2 icon-purple">
                          <i class="icon-credit-card "></i>
                      </div>
                      <div class="service-content-2">
                          <h3>Secure Payment</h3>
                          <p>100% Guarantee</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="single-service-wrap-2 mb-30">
                      <div class="service-icon-2 icon-purple">
                          <i class="icon-earphones "></i>
                      </div>
                      <div class="service-content-2">
                          <h3>24h Support</h3>
                          <p>Dedicated support</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="product-area pb-110">
  <div class="container">
      <div class="section-title-btn-wrap border-bottom-3 mb-50 pb-20">
          <div class="section-title-deal-wrap">
              <div class="section-title-3">
                  <h2>offre flash</h2>
              </div>
              <div class="timer-wrap-2">
                  <h4><i class="icon-speedometer"></i> Expires in:</h4>
                  <div class="timer-style-2" id="timer-2-active"></div>
              </div>
          </div>
          <div class="btn-style-7">
              <a href="shop.html">toutes les catégories</a>
          </div>
      </div>
      <div class="product-slider-active-3 nav-style-3">
        @foreach ($products as $product)
          <!-- produit -->
          <div class="product-plr-1">
              <div class="single-product-wrap">
                  <div class="product-img product-img-zoom mb-15">
                      <a href="{{route('product',['id_product'=>$product->id])}}">
                    <!--les encres vers les sections--->
                    {{-- 
                    
                    @foreach ($sub_categorys as $sub_category)
                        @if ($sub_category->name == $categorie->name)
                            <a @if($i == 0) class="active" @endif href="#product-{{ $sub_category->id}}" data-toggle="tab"> {{ $sub_category->name_sub_categorys}} </a>
                            @php $i++; @endphp
                        @endif
                    @endforeach
                     --}}
                     {{$product->id}}
                    @foreach ($images as $image)
                        @if ($product->id == $image->produit_id)
                            <img src="users/assets/images/products_images/{{$image->name}}" alt="">
                            @break
                        @endif
                    @endforeach
                     
                      </a>
                      <span class="pro-badge left bg-red">-40%</span>
                      <div class="product-action-2 tooltip-style-2">
                          <button title="Wishlist"><i class="icon-heart"></i></button>
                          <button title="Quick View" data-toggle="modal" data-target="#{{substr($product->name,0,2)}}"><i class="icon-size-fullscreen icons"></i></button>
                          <button title="Compare"><i class="icon-refresh"></i></button>
                      </div>
                  </div>
                  <div class="product-content-wrap-3">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">baby</a>
                      </div>
                      <h3><a class="purple" href="{{route('product',['id_product'=>$product->id])}}"> {{$product->name}} </a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                          </div>
                          <span>(4)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$38.50 </span>
                          <span class="old-price">$42.85</span>
                      </div>
                  </div>
                  <div class="product-content-wrap-3 product-content-position-2">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">baby</a>
                      </div>
                      <h3><a class="purple" href="{{route('product',['id_product'=>$product->id])}}"> {{$product->name}} </a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                          </div>
                          <span>(4)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$38.50 </span>
                          <span class="old-price">$42.85</span>
                      </div>
                      <div class="pro-add-to-cart-2">
                          <button title="Add to Cart">Add To Cart</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- fin produit -->
        @endforeach
        
          <div class="product-plr-1">
              <div class="single-product-wrap">
                  <div class="product-img product-img-zoom mb-15">
                      <a href="product-details.html">
                          <img src="users/assets/images/product/product-42.jpg" alt="">
                      </a>
                      <span class="pro-badge left bg-red">-20%</span>
                      <div class="product-action-2 tooltip-style-2">
                          <button title="Wishlist"><i class="icon-heart"></i></button>
                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                          <button title="Compare"><i class="icon-refresh"></i></button>
                      </div>
                  </div>
                  <div class="product-content-wrap-3">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">fashion</a>
                      </div>
                      <h3><a class="purple" href="product-details.html">Herchoe Backpack</a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star gray"></i>
                          </div>
                          <span>(2)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$26.50 </span>
                          <span class="old-price">$45.85</span>
                      </div>
                  </div>
                  <div class="product-content-wrap-3 product-content-position-2">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">fashion</a>
                      </div>
                      <h3><a class="purple" href="product-details.html">Herchoe Backpack</a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star gray"></i>
                          </div>
                          <span>(2)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$26.50 </span>
                          <span class="old-price">$45.85</span>
                      </div>
                      <div class="pro-add-to-cart-2">
                          <button title="Add to Cart">Add To Cart</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="product-plr-1">
              <div class="single-product-wrap">
                  <div class="product-img product-img-zoom mb-15">
                      <a href="product-details.html">
                          <img src="users/assets/images/product/product-43.jpg" alt="">
                      </a>
                      <span class="pro-badge left bg-red">-15%</span>
                      <div class="product-action-2 tooltip-style-2">
                          <button title="Wishlist"><i class="icon-heart"></i></button>
                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                          <button title="Compare"><i class="icon-refresh"></i></button>
                      </div>
                  </div>
                  <div class="product-content-wrap-3">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">baby</a>
                      </div>
                      <h3><a class="purple" href="product-details.html">Pampers baby-dry diapers</a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star gray"></i>
                              <i class="icon_star gray"></i>
                          </div>
                          <span>(6)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$43.50 </span>
                          <span class="old-price">$52.85</span>
                      </div>
                  </div>
                  <div class="product-content-wrap-3 product-content-position-2">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">baby</a>
                      </div>
                      <h3><a class="purple" href="product-details.html">Pampers baby-dry diapers</a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star gray"></i>
                              <i class="icon_star gray"></i>
                          </div>
                          <span>(6)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$43.50 </span>
                          <span class="old-price">$52.85</span>
                      </div>
                      <div class="pro-add-to-cart-2">
                          <button title="Add to Cart">Add To Cart</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="product-plr-1">
              <div class="single-product-wrap">
                  <div class="product-img product-img-zoom mb-15">
                      <a href="product-details.html">
                          <img src="users/assets/images/product/product-44.jpg" alt="">
                      </a>
                      <span class="pro-badge left bg-red">-10%</span>
                      <div class="product-action-2 tooltip-style-2">
                          <button title="Wishlist"><i class="icon-heart"></i></button>
                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                          <button title="Compare"><i class="icon-refresh"></i></button>
                      </div>
                  </div>
                  <div class="product-content-wrap-3">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">furniture </a>
                      </div>
                      <h3><a class="purple" href="product-details.html">White Plastic Chair</a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star gray"></i>
                              <i class="icon_star gray"></i>
                          </div>
                          <span>(3)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$123.50  </span>
                          <span class="old-price">$152.85</span>
                      </div>
                  </div>
                  <div class="product-content-wrap-3 product-content-position-2">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">furniture </a>
                      </div>
                      <h3><a class="purple" href="product-details.html">White Plastic Chair</a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star gray"></i>
                              <i class="icon_star gray"></i>
                          </div>
                          <span>(3)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$123.50 </span>
                          <span class="old-price">$152.85</span>
                      </div>
                      <div class="pro-add-to-cart-2">
                          <button title="Add to Cart">Add To Cart</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="product-plr-1">
              <div class="single-product-wrap">
                  <div class="product-img product-img-zoom mb-15">
                      <a href="product-details.html">
                          <img src="users/assets/images/product/product-45.jpg" alt="">
                      </a>
                      <span class="pro-badge left bg-red">-35%</span>
                      <div class="product-action-2 tooltip-style-2">
                          <button title="Wishlist"><i class="icon-heart"></i></button>
                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                          <button title="Compare"><i class="icon-refresh"></i></button>
                      </div>
                  </div>
                  <div class="product-content-wrap-3">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">women</a>
                      </div>
                      <h3><a class="purple" href="product-details.html">Ciate London Makeup</a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star "></i>
                          </div>
                          <span>(1)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$86.75 </span>
                          <span class="old-price">$94.52</span>
                      </div>
                  </div>
                  <div class="product-content-wrap-3 product-content-position-2">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">beauty</a>
                      </div>
                      <h3><a class="purple" href="product-details.html">Ciate London Makeup</a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star "></i>
                          </div>
                          <span>(1)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$86.75 </span>
                          <span class="old-price">$94.52</span>
                      </div>
                      <div class="pro-add-to-cart-2">
                          <button title="Add to Cart">Add To Cart</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="product-plr-1">
              <div class="single-product-wrap">
                  <div class="product-img product-img-zoom mb-15">
                      <a href="product-details.html">
                          <img src="users/assets/images/product/product-42.jpg" alt="">
                      </a>
                      <span class="pro-badge left bg-red">-20%</span>
                      <div class="product-action-2 tooltip-style-2">
                          <button title="Wishlist"><i class="icon-heart"></i></button>
                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                          <button title="Compare"><i class="icon-refresh"></i></button>
                      </div>
                  </div>
                  <div class="product-content-wrap-3">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">fashion</a>
                      </div>
                      <h3><a class="purple" href="product-details.html">Herchoe Backpack</a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star gray"></i>
                          </div>
                          <span>(2)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$26.50 </span>
                          <span class="old-price">$45.85</span>
                      </div>
                  </div>
                  <div class="product-content-wrap-3 product-content-position-2">
                      <div class="product-content-categories">
                          <a class="purple" href="shop.html">fashion</a>
                      </div>
                      <h3><a class="purple" href="product-details.html">Herchoe Backpack</a></h3>
                      <div class="product-rating-wrap-2">
                          <div class="product-rating-4">
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star"></i>
                              <i class="icon_star gray"></i>
                          </div>
                          <span>(2)</span>
                      </div>
                      <div class="product-price-4">
                          <span class="new-price">$26.50 </span>
                          <span class="old-price">$45.85</span>
                      </div>
                      <div class="pro-add-to-cart-2">
                          <button title="Add to Cart">Add To Cart</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="product-categories-area pb-115">
  <div class="container">
      <div class="section-title-btn-wrap border-bottom-3 mb-50 pb-20">
          <div class="section-title-3">
              <h2>categories populaires</h2>
          </div>
          <div class="btn-style-7">
          <a href="{{route('shop')}}">tout les produits</a>
          </div>
      </div>
      <div class="product-categories-slider-1 nav-style-3">
          @foreach ($categories as $categorie)
          <!--categorie-->
          <div class="product-plr-1">
              <div class="single-product-wrap">
                  <div class="product-img product-img-border mb-20">
                      <a href="{{route('shop',['id_category'=>$categorie->id])}}">
                      <img src="users/assets/images/categorie_image/{{$categorie->photo}}" alt="">
                        </a>
                    </div>
                    <div class="product-content-categories-2 text-center">
                        <h5><a href="{{route('shop',['id_category'=>$categorie->name])}}"> {{$categorie->name}}  </a></h5>
                    </div>
                </div>
            </div>
            <!--fin-->
        @endforeach
      </div>
  </div>
</div>
<div class="banner-area pb-90">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6">
              <div class="banner-wrap mb-30">
                  <div class="banner-img banner-img-zoom">
                      <a href="product-details.html"><img src="users/assets/images/banner/banner-10.jpg" alt=""></a>
                  </div>
                  <div class="banner-content-11 banner-content-11-modify">
                      <h2><span>Zara</span> Pattern Boxed <br>Underwear</h2>
                      <p>Stretch, & Fress cool</p>
                      <div class="btn-style-4">
                          <a class="hover-red" href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-md-6">
              <div class="banner-wrap mb-30">
                  <div class="banner-img banner-img-zoom">
                      <a href="product-details.html"><img src="users/assets/images/banner/banner-11.jpg" alt=""></a>
                  </div>
                  <div class="banner-content-11 banner-content-11-modify">
                      <h2><span>Basic</span> Color<br>Caps</h2>
                      <p>Less is more!</p>
                      <div class="btn-style-4">
                          <a class="hover-red" href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!--zone produit-->
@foreach ($categories as $categorie)
<div class="product-area pb-85">
    <div class="container">
        <div class="section-title-5 section-title-5-bg-2 mb-10">
        <i class='{{$categorie->icon}}'></i>
        <i class='fas fa-carrot'></i>
            <h5 class="purple"> {{$categorie->name}} </h5>
        </div>
        @php $i = 0;  @endphp
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="tab-style-7 tab-hm6-categories nav">
                    <!--les encres vers les sections--->
                    
                    
                    @foreach ($sub_categorys as $sub_category)
                        @if ($sub_category->categorie->name == $categorie->name) 
                            <a @if($i == 0) class="active" @endif href="#product-{{ $sub_category->id}}" data-toggle="tab"> {{ $sub_category->name}} </a>
                            @php $i++; @endphp
                        @endif
                    @endforeach
                     
                </div>
                @php $i = 0;  @endphp
                <div class="tab-content tab-hm6-categories-slider tab-content-mrg-top jump">
                    <!--zone prise par l'id affichage de section de sous categorie et 4 exemple de produits qu'il contient-->
                    @foreach ($sub_categorys as $sub_category)
                        @if ($sub_category->categorie->id == $categorie->id)
                            <div id="product-{{ $sub_category->id}}" class="tab-pane @if($i == 0) {{"active"}} @endif">

                                <div class="product-slider-active-5">
                                    @foreach ($products_all as $product)
                                    @if ($product->souscategorie_id == $sub_category->id)
                                        <div class="product-plr-1" {{-- comment  style="background-color: red;"--}}>
                                            <div class="single-product-wrap">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="{{route('product',['id_product'=>$product->id])}}">
                                                    {{-- image produit --}}
                                                    @foreach ($images as $image)
                                                        @if ($product->id == $image->produit_id)
                                                            <img src="users/assets/images/products_images/{{$image->name}}" alt="">
                                                        @endif
                                                    @endforeach    
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">
                                                    <h3><a href="{{route('product',['id_product'=>$product->id])}}"> {{$product->name}} </a></h3>
                                                    <div class="product-price-2">
                                                        <span>$38.50</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                    <h3><a href="{{route('product',['id_product'=>$product->id])}}">{{$product->name}}</a></h3>
                                                    <div class="product-price-2">
                                                        <span>$38.50</span>
                                                    </div>
                                                    <div class="pro-add-to-cart">
                                                        <button title="Add to Cart">Add To Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach

                                </div>
                            </div>
                            @php $i++; @endphp
                        @endif
                    @endforeach
                    @php $i=0; @endphp
                </div>

                <div class="padding-10-row-col">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="banner-wrap banner-border-1 mt-40 mb-30">
                                <div class="banner-img banner-img-zoom">
                                    <a href="product-details.html"><img src="users/assets/images/banner/banner-23.jpg" alt=""></a>
                                </div>
                                <div class="banner-content-19">
                                    <h2>set 3 soften <br>shorts</h2>
                                    <span>discount</span>
                                    <h4>25% OFF</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="banner-wrap banner-border-1 banner-mt-none-xs mt-40 mb-30">
                                <div class="banner-img banner-img-zoom">
                                    <a href="product-details.html"><img src="users/assets/images/banner/banner-24.jpg" alt=""></a>
                                </div>
                                <div class="banner-content-21">
                                    <span>mega sale</span>
                                    <h2><span>50% OFF</span> Basic <br> Tee Flavor</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-list-style-wrap">
                    <div class="product-list-style">


                        @foreach ($sub_categorys as $sub_category)
                            @if ($sub_category->categorie->name == $categorie->name)
                                <a href="{{route('shop_sub',['sub_category'=>$sub_category->name])}}"> {{ $sub_category->name}} </a>
                            @endif
                        @endforeach


                    </div>
                    <div class="btn-style-8">
                        <a href="shop.html">voir tout </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endforeach
<!--fin zone produit-->

<div class="about-us-area pb-115">
  <div class="container">
      <div class="about-us-content-2">
          <div class="about-us-content-2-title">
              <h4>NORDA The One-stop Shopping Destination</h4>
          </div>
          <p>E-commerce is revolutionizing the way we all shop in Bangladesh. Why do you want to hop from one store to another in search of the latest phone when you can find it on the Internet in a single click? Not only mobiles. Flipkart houses
              everything you can possibly imagine, from trending electronics like laptops, tablets, smartphones, and mobile accessories to in-vogue fashion staples like shoes, clothing and lifestyle accessories; from modern furniture like sofa
              sets and wardrobes to appliances that make your life easy like washing machines, TVs, ACs, mixer grinder juicers and other time-saving kitchen and small appliances; from home furnishings like cushion covers, mattresses and bedsheets
              to toys and musical instruments, we got them all covered. You name it, and you can stay assured about finding them all here. For those of you with erratic working hours, Flipkart is your best bet. Shop in your PJs, at night or
              in the wee hours of the morning. This e-commerce never shuts down.</p>
          <p>What's more, with our year-round shopping festivals and events, our prices are irresistible. We're sure you'll find yourself picking up more than what you had in mind. If you are wondering why you should shop from Flipkart when there
              are multiple options available to you, well, the below will answer your question.</p>
      </div>
  </div>
</div>

@endsection
