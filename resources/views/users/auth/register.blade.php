@extends('users/layouts/auth',['title'=>'Inscription - connexion'])
@section('content')
    
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                    @if (\Cart::getContent()->count() == 0)
                        <p>Vous n'avez pas encore ajouter de produit dans votre panier</p>
                    @else
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
                    @endif
                      
                    </ul>
                    <div class="cart-total">
                        <h4>SOUS-TOTAL: <span>{{ Cart::getSubTotal() }} F CFA</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="{{ route('cart.index') }}">Votre Panier</a>
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
                      <li class="active">{{ __('Inscription') }} </li>
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
                              <a class="active"  href="{{ route('register') }}">
                                  <h4> {{ __('Inscription') }} </h4>
                              </a>
                              <p>Vous êtes déjà inscrit ? 
                                <a  href="{{ route('login') }}">
                                    <h4> {{ __(' Connectez-vous ici') }} </h4>
                                </a>
                            </p>
                          </div>
                          <div class="tab-content">
                              <div id="lg2" class="tab-pane active">
                                  <div class="login-form-container">
                                      <div class="login-register-form">
                                          <form action="{{ route('register') }}" method="post">
                                            @csrf
                                            <div>
                                                <input type="text" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="{{ __('Nom et prénoms') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div>
                                                <input type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="{{ __('E-mail') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div>
                                                <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="{{ __('Mot de passe') }}">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div>
                                                <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror" placeholder="{{ __('Confirmer votre mot de passe') }}">
                                                @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                              <div class="button-box">
                                                  <button type="submit">{{ __("S'inscrire") }}</button>
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