@extends('users/layouts/auth',['title'=>'Inscription - connexion'])
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
                          <a href="{{ route('index') }}">Acceuil</a>
                      </li>
                      <li class="active">{{ __('Connexion') }} </li>
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
                              <a class="active"  href="{{ route('login') }}">
                                  <h4> {{ __('Connexion') }} </h4>
                              </a>
                              <a href="{{ route('register') }}">
                                  <h4> {{ __('Inscription') }} </h4>
                              </a>
                          </div>
                          <div class="tab-content">
                              <div id="lg1" class="tab-pane active">
                                  
                               
                                @if(isset($errors) && $errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif                                   


                                  <div class="login-form-container">
                                      <div class="login-register-form">
                                          <form action="{{ route('login') }}" method="post">
                                            @csrf
                                            <div>
                                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Votre E-mail') }}" required autocomplete="email">
                                            </div>
                                            <div>
                                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="{{ __('Votre mot de passe') }}" required autocomplete="current-password">
                                            </div>
                                              <div class="button-box">
                                                  <div class="login-toggle-btn">
                                                      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                      <label for="remember">{{ __('Se souvenir de moi') }}</label>
                                                      @if (Route::has('password.request'))   
                                                        <a href="{{ route('password.request') }}">
                                                            {{ __('Mot de passe oublié?') }}
                                                        </a>
                                                      @endif
                                                  </div>
                                                  <button type="submit">Se connecter</button>
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