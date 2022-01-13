<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Kboard | Best Mechanical Keyboard in Malaysia</title>

    <link rel="icon" href="{{ URL::asset('ds/img/kboardIcon.png') }}">
    
    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ URL::asset('ds/css/font-awesome.css') }}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('ds/css/bootstrap.css') }}" />
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('ds/css/jquery.smartmenus.bootstrap.css') }}" />
    <!-- Product view slider -->
    <link rel="stylesheet" href="{{ URL::asset('ds/css/jquery.simpleLens.css') }}" /> 
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ URL::asset('ds/css/slick.css') }}" />
    <!-- price picker slider -->
    <link rel="stylesheet" href="{{ URL::asset('ds/css/nouislider.css') }}" />
    <!-- Theme color -->
    <link rel="stylesheet" id="switcher" href="{{ URL::asset('ds/css/theme-color/default-theme.css') }}" />
    <!-- Top Slider CSS -->
    <link rel="stylesheet" media="all" href="{{ URL::asset('ds/css/sequence-theme.modern-slide-in.css') }}" />

    <!-- Main style sheet -->
    <link rel="stylesheet" href="{{ URL::asset('ds/css/style.css') }}" /> 

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <!-- !Important notice -->
  <!-- Only for product page body tag have to added .productPage class -->
  <body class="productPage">  
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
 <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="{{ URL::asset('ds/img/flag/english.jpg') }}" alt="english flag">ENGLISH
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><img src="{{ URL::asset('ds/img/flag/french.jpg') }}" alt="">FRENCH</a></li>
                      <li><a href="#"><img src="{{ URL::asset('ds/img/flag/english.jpg') }}" alt="">ENGLISH</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-myr"></i>MYR
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                      <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>+6012 463 2391</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <!-- <li><a href="account.html">My Account</a></li> -->
                  <!-- <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li> -->
                  <li class="hidden-xs"><a href="{{url('')}}/cart">My Cart</a></li>
                  <!-- <li class="hidden-xs"><a href="checkout.html">Checkout</a></li> -->
                  @guest
                  <li><a href="{{url('')}}/login">Login</a></li>
                  @endguest
                  @auth
                  <li><a href="{{url('')}}/user/profile">{{ auth()->user()->name }}</a></li>
                  @endauth
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <!-- <a href="#">
                  <span class="fa fa-shopping-cart"></span>
                  <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                </a> -->
                <!-- img based logo -->
                <a href="{{url('')}}"><img src="{{ URL::asset('ds/img/kboardLogo.png') }}" alt="logo img"></a>
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="{{url('')}}/cart">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">{{ Cart::getTotalQuantity() }}</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    @auth
                    @foreach ($cartItems as $item)
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="/uploads/products/{{ $item->attributes->image }}" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">{{ $item->name }}</a></h4>
                        <p>{{ $item->quantity }} x RM{{ $item->price }}</p>
                      </div>
                      <form action="{{ route('cart.remove') }}" method="POST" enctype="multipart/form-data" id="form">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <a class="aa-remove-product" href="javascript:;" onclick="parentNode.submit();"><span class="fa fa-times"></span></a>
                      </form>
                    </li>
                    @endforeach
                    @endauth
                                       
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        RM{{ Cart::getTotal() }}
                      </span>
                    </li>
                  </ul>
                  <!-- <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a> -->
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Search">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{url('')}}">Home</a></li>
              <li><a href="{{url('')}}/k100">K100 (100%)</a></li>
              <li><a href="{{url('')}}/k96">K96 (96%)</a></li>
              <li><a href="{{url('')}}/k80">K80 (80%)</a></li>
              <li><a href="{{url('')}}/k75">K75 (75%)</a></li>
              <li><a href="{{url('')}}/k60">K60 (60%)</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div> 
      </div>
    </div>
  </section>
  <!-- / menu -->  
 
