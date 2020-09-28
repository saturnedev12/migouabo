@extends('layouts/master',['title'=>'shop'])
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
                                  <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
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
                                  <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
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
                          <li class="active">Shop </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="shop-area pt-120 pb-120">
              <div class="container">
                  <div class="row flex-row-reverse">
                      <div class="col-lg-9">
                          <div class="shop-topbar-wrapper">
                              <div class="shop-topbar-left">
                                  <div class="view-mode nav">
                                      <a class="active" href="#shop-1" data-toggle="tab"><i class="icon-grid"></i></a>
                                      <a href="#shop-2" data-toggle="tab"><i class="icon-menu"></i></a>
                                  </div>
                                  <p>Showing 1 - 20 of 30 results </p>
                              </div>
                              <div class="product-sorting-wrapper">
                                  <div class="product-shorting shorting-style">
                                      <label>View :</label>
                                      <select>
                                          <option value=""> 20</option>
                                          <option value=""> 23</option>
                                          <option value=""> 30</option>
                                      </select>
                                  </div>
                                  <div class="product-show shorting-style">
                                      <label>Sort by :</label>
                                      <select>
                                          <option value="">Default</option>
                                          <option value=""> Name</option>
                                          <option value=""> price</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="shop-bottom-area">
                              <div class="tab-content jump">
                                  <div id="shop-1" class="tab-pane active">
                                      <div class="row">
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-13.jpg" alt="">
                                                      </a>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(2)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$20.50</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(2)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$20.50</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-14.jpg" alt="">
                                                      </a>
                                                      <span class="pro-badge left bg-red">-20%</span>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                          </div>
                                                          <span>(5)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                                      <div class="product-price-2">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                          </div>
                                                          <span>(5)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                                      <div class="product-price-2">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-15.jpg" alt="">
                                                      </a>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                          </div>
                                                          <span>(4)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$35.45</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                          </div>
                                                          <span>(4)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$35.45</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-16.jpg" alt="">
                                                      </a>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$45.50</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$45.50</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-17.jpg" alt="">
                                                      </a>
                                                      <span class="pro-badge left bg-red">-20%</span>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(5)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                                      <div class="product-price-2">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(5)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                                      <div class="product-price-2">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-18.jpg" alt="">
                                                      </a>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$55.50</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Tie-up Sute Sandals</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$55.50</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-19.jpg" alt="">
                                                      </a>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                          </div>
                                                          <span>(5)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$65.50</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                          </div>
                                                          <span>(5)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Faded Grey T-Shirt</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$65.50</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-20.jpg" alt="">
                                                      </a>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(2)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$75.50</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(2)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Snakeskin print belt</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$75.50</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-95.jpg" alt="">
                                                      </a>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(2)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Simple Black T-Shirt</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$20.50</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(2)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Simple Black T-Shirt</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$20.50</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-96.jpg" alt="">
                                                      </a>
                                                      <span class="pro-badge left bg-red">-20%</span>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                          </div>
                                                          <span>(5)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Norda Simple Backpack</a></h3>
                                                      <div class="product-price-2">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                          </div>
                                                          <span>(5)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Norda Simple Backpack</a></h3>
                                                      <div class="product-price-2">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-97.jpg" alt="">
                                                      </a>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                          </div>
                                                          <span>(4)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Simple Blue T-Shirt</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$35.45</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                          </div>
                                                          <span>(4)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Simple Blue T-Shirt</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$35.45</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                              <div class="single-product-wrap mb-35">
                                                  <div class="product-img product-img-zoom mb-15">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-99.jpg" alt="">
                                                      </a>
                                                      <div class="product-action-2 tooltip-style-2">
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Basic Sneaker</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$45.50</span>
                                                      </div>
                                                  </div>
                                                  <div class="product-content-wrap-2 product-content-position text-center">
                                                      <div class="product-rating-wrap">
                                                          <div class="product-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <h3><a href="product-details.html">Basic Sneaker</a></h3>
                                                      <div class="product-price-2">
                                                          <span>$45.50</span>
                                                      </div>
                                                      <div class="pro-add-to-cart">
                                                          <button title="Add to Cart">Add To Cart</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div id="shop-2" class="tab-pane">
                                      <div class="shop-list-wrap mb-30">
                                          <div class="row">
                                              <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                  <div class="product-list-img">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-13.jpg" alt="Product Style">
                                                      </a>
                                                      <div class="product-list-quickview">
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                  <div class="shop-list-content">
                                                      <h3><a href="product-details.html">Basic Joggin Shorts</a></h3>
                                                      <div class="pro-list-price">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                      <div class="product-list-rating-wrap">
                                                          <div class="product-list-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                      <div class="product-list-action">
                                                          <button title="Add To Cart"><i class="icon-basket-loaded"></i></button>
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="shop-list-wrap mb-30">
                                          <div class="row">
                                              <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                  <div class="product-list-img">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-14.jpg" alt="Product Style">
                                                      </a>
                                                      <div class="product-list-quickview">
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                  <div class="shop-list-content">
                                                      <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                                      <div class="pro-list-price">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                      <div class="product-list-rating-wrap">
                                                          <div class="product-list-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                      <div class="product-list-action">
                                                          <button title="Add To Cart"><i class="icon-basket-loaded"></i></button>
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="shop-list-wrap mb-30">
                                          <div class="row">
                                              <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                  <div class="product-list-img">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-15.jpg" alt="Product Style">
                                                      </a>
                                                      <div class="product-list-quickview">
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                  <div class="shop-list-content">
                                                      <h3><a href="product-details.html">Basic White Simple Sneaker</a></h3>
                                                      <div class="pro-list-price">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                      <div class="product-list-rating-wrap">
                                                          <div class="product-list-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                      <div class="product-list-action">
                                                          <button title="Add To Cart"><i class="icon-basket-loaded"></i></button>
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="shop-list-wrap mb-30">
                                          <div class="row">
                                              <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                  <div class="product-list-img">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-16.jpg" alt="Product Style">
                                                      </a>
                                                      <div class="product-list-quickview">
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                  <div class="shop-list-content">
                                                      <h3><a href="product-details.html">Simple Rounded Sunglasses</a></h3>
                                                      <div class="pro-list-price">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                      <div class="product-list-rating-wrap">
                                                          <div class="product-list-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                      <div class="product-list-action">
                                                          <button title="Add To Cart"><i class="icon-basket-loaded"></i></button>
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="shop-list-wrap mb-30">
                                          <div class="row">
                                              <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                  <div class="product-list-img">
                                                      <a href="product-details.html">
                                                          <img src="assets/images/product/product-17.jpg" alt="Product Style">
                                                      </a>
                                                      <div class="product-list-quickview">
                                                          <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                  <div class="shop-list-content">
                                                      <h3><a href="product-details.html">Vintage Socks X3</a></h3>
                                                      <div class="pro-list-price">
                                                          <span class="new-price">$35.45</span>
                                                          <span class="old-price">$45.80</span>
                                                      </div>
                                                      <div class="product-list-rating-wrap">
                                                          <div class="product-list-rating">
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star"></i>
                                                              <i class="icon_star gray"></i>
                                                              <i class="icon_star gray"></i>
                                                          </div>
                                                          <span>(3)</span>
                                                      </div>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor labor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                      <div class="product-list-action">
                                                          <button title="Add To Cart"><i class="icon-basket-loaded"></i></button>
                                                          <button title="Wishlist"><i class="icon-heart"></i></button>
                                                          <button title="Compare"><i class="icon-refresh"></i></button>
                                                      </div>
                                                  </div>
                                              </div>
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
                      </div>
                      <div class="col-lg-3">
                          <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                              <div class="sidebar-widget mb-40">
                                  <h4 class="sidebar-widget-title">Search </h4>
                                  <div class="sidebar-search">
                                      <form class="sidebar-search-form" action="#">
                                          <input type="text" placeholder="Search here...">
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
                                  <h4 class="sidebar-widget-title">Price Filter </h4>
                                  <div class="price-filter">
                                      <span>Range:  $100.00 - 1.300.00 </span>
                                      <div id="slider-range"></div>
                                      <div class="price-slider-amount">
                                          <div class="label-input">
                                              <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                          </div>
                                          <button type="button">Filter</button>
                                      </div>
                                  </div>
                              </div>
                              <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                                  <h4 class="sidebar-widget-title">Refine By </h4>
                                  <div class="sidebar-widget-list">
                                      <ul>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox"> <a href="#">On Sale <span>4</span> </a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox" value=""> <a href="#">New <span>5</span></a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox" value=""> <a href="#">In Stock <span>6</span> </a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                                  <h4 class="sidebar-widget-title">Size </h4>
                                  <div class="sidebar-widget-list">
                                      <ul>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox" value=""> <a href="#">XL <span>4</span> </a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox" value=""> <a href="#">L <span>5</span> </a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox" value=""> <a href="#">SM <span>6</span> </a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox" value=""> <a href="#">XXL <span>7</span> </a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                                  <h4 class="sidebar-widget-title">Color </h4>
                                  <div class="sidebar-widget-list">
                                      <ul>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox" value=""> <a href="#">Green <span>7</span> </a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox" value=""> <a href="#">Cream <span>8</span> </a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox" value=""> <a href="#">Blue <span>9</span> </a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                          <li>
                                              <div class="sidebar-widget-list-left">
                                                  <input type="checkbox" value=""> <a href="#">Black <span>3</span> </a>
                                                  <span class="checkmark"></span>
                                              </div>
                                          </li>
                                      </ul>
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