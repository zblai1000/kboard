@include('layouts.header')


  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{ URL::asset('ds/img/slider/1.jpg') }}" alt="Men slide img" />
              </div>
              <div class="seq-title">
               <!-- <span data-seq>Save Up to 75% Off</span>                 -->
                <h2 data-seq>K100 Series</h2>                
                <p data-seq>For the ones who wants it all.</p>
                <a data-seq href="{{url('')}}/k100" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{ URL::asset('ds/img/slider/2.jpg') }}" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                <!-- <span data-seq>Save Up to 40% Off</span>                 -->
                <h2 data-seq>K96 Series</h2>                
                <p data-seq>For the ones who values usability.</p>
                <a data-seq href="{{url('')}}/k96" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{ URL::asset('ds/img/slider/3.jpg') }}" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                <!-- <span data-seq>Save Up to 75% Off</span>                 -->
                <h2 data-seq>K80 Series</h2>                
                <p data-seq>Balance between efficiency and portability.</p>
                <a data-seq href="{{url('')}}/k80" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="{{ URL::asset('ds/img/slider/4.jpg') }}" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                <!-- <span data-seq>Save Up to 75% Off</span>                 -->
                <h2 data-seq>K75 Series</h2>                
                <p data-seq>Portabe but powerful.</p>
                <a data-seq href="{{url('')}}/k75" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="{{ URL::asset('ds/img/slider/5.jpg') }}" alt="Male Female slide img" />
              </div>
              <div class="seq-title">
                <!-- <span data-seq>Save Up to 50% Off</span>                 -->
                <h2 data-seq>K60 Series</h2>                
                <p data-seq>Maximizing poratbility with innovation.</p>
                <a data-seq href="{{url('')}}/k60" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>                   
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="{{ URL::asset('ds/img/promo-banner-1.jpg') }}" alt="img">                    
                    <div class="aa-prom-content">
                      <span>Exclusive Item</span>
                      <h4><a href="{{url('')}}/k100">K100 series</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ URL::asset('ds/img/promo-banner-3.jpg') }}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="{{url('')}}/k96">K96 series</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ URL::asset('ds/img/promo-banner-2.jpg') }}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="{{url('')}}/k80">K80 series</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ URL::asset('ds/img/promo-banner-4.jpg') }}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="{{url('')}}/k75">K75 series</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{ URL::asset('ds/img/promo-banner-5.jpg') }}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="{{url('')}}/k60">K60 series</a></h4>                        
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
  </section>
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">K100</a></li>
                    <li><a href="#women" data-toggle="tab">K96</a></li>
                    <li><a href="#sports" data-toggle="tab">K80</a></li>
                    <li><a href="#electronics" data-toggle="tab">K75</a></li>
                    <li><a href="#electronics" data-toggle="tab">K60</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start K100 product category -->
                    <div class="tab-pane fade in active" id="men">
                        <ul class="aa-product-catg">
                            @foreach ($products as $product)
                            @if($product->size == '100%')
                            <!-- start single product item -->
                            <li>
                            <figure>
                                <a class="aa-product-img" href="/home/{{$product->id}}"><img src="/uploads/products/{{$product ->main_image}}" alt="" /></a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" id="form">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->product_name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->main_image }}"  name="main_image">
                                    <input type="hidden" value="1" name="quantity">
                                    <!-- <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button> -->
                                    <a class="aa-add-card-btn" href="javascript:;" onclick="parentNode.submit();"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                </form>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#">{{ $product->product_name }}</a></h4>
                                <span class="aa-product-price">RM{{ $product->price }}</span>
                                </figcaption>
                            </figure>                        
                            <div class="aa-product-hvr-content">
                                <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                           -->
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                            </li>
                            @endif
                            @endforeach
                            
                        </ul>                      
                        <!-- <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> -->
                    </div>
                    <!-- / K100 product category -->
                    <!-- Start K96 product category -->
                    <div class="tab-pane fade" id="women">
                        <ul class="aa-product-catg">
                            @foreach ($products as $product)
                            @if($product->size == '96%')
                            <!-- start single product item -->
                            <li>
                            <figure>
                                <a class="aa-product-img" href="/home/{{$product->id}}"><img src="/uploads/products/{{$product ->main_image}}" alt="" /></a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" id="form">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->product_name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->main_image }}"  name="main_image">
                                    <input type="hidden" value="1" name="quantity">
                                    <!-- <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button> -->
                                    <a class="aa-add-card-btn" href="javascript:;" onclick="parentNode.submit();"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                </form>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#">{{ $product->product_name }}</a></h4>
                                <span class="aa-product-price">RM{{ $product->price }}</span>
                                </figcaption>
                            </figure>                        
                            <div class="aa-product-hvr-content">
                                <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                           -->
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                            </li>
                            @endif
                            @endforeach
                            
                        </ul>                      
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / K96 product category -->
                    <!-- Start K80 product category -->
                    <div class="tab-pane fade" id="sports">
                        <ul class="aa-product-catg">
                            @foreach ($products as $product)
                            @if($product->size == '80%')
                            <!-- start single product item -->
                            <li>
                            <figure>
                                <a class="aa-product-img" href="/home/{{$product->id}}"><img src="/uploads/products/{{$product ->main_image}}" alt="" /></a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" id="form">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->product_name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->main_image }}"  name="main_image">
                                    <input type="hidden" value="1" name="quantity">
                                    <!-- <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button> -->
                                    <a class="aa-add-card-btn" href="javascript:;" onclick="parentNode.submit();"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                </form>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#">{{ $product->product_name }}</a></h4>
                                <span class="aa-product-price">RM{{ $product->price }}</span>
                                </figcaption>
                            </figure>                        
                            <div class="aa-product-hvr-content">
                                <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                           -->
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                            </li>
                            @endif
                            @endforeach
                            
                        </ul>                      
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / K80 product category -->
                    <!-- Start K75 product category -->
                    <div class="tab-pane fade" id="electronics">
                        <ul class="aa-product-catg">
                            @foreach ($products as $product)
                            @if($product->size == '75%')
                            <!-- start single product item -->
                            <li>
                            <figure>
                                <a class="aa-product-img" href="/home/{{$product->id}}"><img src="/uploads/products/{{$product ->main_image}}" alt="" /></a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" id="form">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->product_name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->main_image }}"  name="main_image">
                                    <input type="hidden" value="1" name="quantity">
                                    <!-- <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button> -->
                                    <a class="aa-add-card-btn" href="javascript:;" onclick="parentNode.submit();"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                </form>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#">{{ $product->product_name }}</a></h4>
                                <span class="aa-product-price">RM{{ $product->price }}</span>
                                </figcaption>
                            </figure>                        
                            <div class="aa-product-hvr-content">
                                <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                           -->
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                            </li>
                            @endif
                            @endforeach
                            
                        </ul>                      
                        <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / K75 product category -->
                    <!-- Start K60 product category -->
                    <div class="tab-pane fade" id="men">
                        <ul class="aa-product-catg">
                            @foreach ($products as $product)
                            @if($product->size == '60%')
                            <!-- start single product item -->
                            <li>
                            <figure>
                                <a class="aa-product-img" href="/home/{{$product->id}}"><img src="/uploads/products/{{$product ->main_image}}" alt="" /></a>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" id="form">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->product_name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->main_image }}"  name="main_image">
                                    <input type="hidden" value="1" name="quantity">
                                    <!-- <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button> -->
                                    <a class="aa-add-card-btn" href="javascript:;" onclick="parentNode.submit();"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                </form>
                                <figcaption>
                                <h4 class="aa-product-title"><a href="#">{{ $product->product_name }}</a></h4>
                                <span class="aa-product-price">RM{{ $product->price }}</span>
                                </figcaption>
                            </figure>                        
                            <div class="aa-product-hvr-content">
                                <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                           -->
                            </div>
                            <!-- product badge -->
                            <span class="aa-badge aa-sale" href="#">SALE!</span>
                            </li>
                            @endif
                            @endforeach
                            
                        </ul>                      
                        <!-- <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a> -->
                    </div>
                    <!-- / K60 product category -->
                  <!-- quick view modal -->                  
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                              <img src="{{ URL::asset('ds/img/view-slider/medium/polo-shirt-1.png') }}" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                          <img src="{{ URL::asset('ds/img/view-slider/thumbnail/polo-shirt-1.png') }}">
                                      </a>                                    
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                          <img src="{{ URL::asset('ds/img/view-slider/thumbnail/polo-shirt-3.png') }}">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                          <img src="{{ URL::asset('ds/img/view-slider/thumbnail/polo-shirt-4.png') }}">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>T-Shirt</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">$34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Size</h4>
                                <div class="aa-prod-view-size">
                                  <a href="#">S</a>
                                  <a href="#">M</a>
                                  <a href="#">L</a>
                                  <a href="#">XL</a>
                                </div>
                                <div class="aa-prod-quantity">
                                  <form action="">
                                    <select name="" id="">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Polo T-Shirt</a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
            <a href="#"><img src="{{ URL::asset('ds/img/fashion-banner.jpg') }}" alt="fashion banner img"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <!-- <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                <li><a href="#latest" data-toggle="tab">Latest</a></li>                    
              </ul> -->
              <!-- Tab panes -->

          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>ONLY RM5 SHIPPING</h4>
                <P>We offer the lowest shipping rate in the country!</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>We guarantee our product satisfaction.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Our team is always here for you!</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <!-- <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="{{ URL::asset('ds/img/testimonial-img-2.jpg') }}" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Allison</p>
                    <span>Designer</span>
                    <a href="#">Dribble.com</a>
                  </div>
                </div>
              </li> -->
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="{{ URL::asset('ds/img/testimonial-img-1.jpg') }}" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>We hope to create the best product, in order to create the typing experience you deserve.</p>
                  <div class="aa-testimonial-info">
                    <p>Aldy Vincent Hartono</p>
                    <span>CEO</span>
                    <a href="#">Kboard</a>
                  </div>
                </div>
              </li>
               <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="{{ URL::asset('ds/img/testimonial-img-3.jpg') }}" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Bringing the best keyboard in the world to your doorstep with the power of ecommerce.</p>
                  <div class="aa-testimonial-info">
                    <p>Lai Zemin Bryan</p>
                    <span>CTO</span>
                    <a href="#">Kboard</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->

  <!-- Latest Blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>LATEST BLOG</h2>
            <div class="row">
              <!-- single latest blog -->
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="{{url('')}}/blog1"><img src="{{ URL::asset('ds/img/promo-banner-1.jpg') }}" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="{{url('')}}/blog1">What is a mechanical keyboard?</a></h3>
                    <p>Most computer keyboards look the same — three rows of letters, a row or two of numbers, and a lot of punctuation and function keys. But although they look similar, keyboards can vary wildly when it comes to how they work on the inside.</p> 
                    <a href="{{url('')}}/blog1" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <!-- single latest blog -->
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="{{url('')}}/blog2"><img src="{{ URL::asset('ds/img/promo-banner-2.jpg') }}" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="{{url('')}}/blog2">Featues of a mechanical keyboard?</a></h3>
                    <p>Most computer keyboards look the same — three rows of letters, a row or two of numbers, and a lot of punctuation and function keys. But although they look similar, keyboards can vary wildly when it comes to how they work on the inside.</p> 
                    <a href="{{url('')}}/blog2" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
              <!-- single latest blog -->
              <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="{{url('')}}/blog3"><img src="{{ URL::asset('ds/img/promo-banner-3.jpg') }}" alt="img"></a>  
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i>5K</span>
                      <a href="#"><i class="fa fa-thumbs-o-up"></i>426</a>
                      <a href="#"><i class="fa fa-comment-o"></i>20</a>
                      <span href="#"><i class="fa fa-clock-o"></i>June 26, 2016</span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h3 class="aa-blog-title"><a href="{{url('')}}/blog3">Why are mechanical keyboards so popular?</a></h3>
                    <p>Most computer keyboards look the same — three rows of letters, a row or two of numbers, and a lot of punctuation and function keys. But although they look similar, keyboards can vary wildly when it comes to how they work on the inside.</p> 
                    <a href="{{url('')}}/blog3" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>
  <!-- / Latest Blog -->

  <!-- Client Brand -->
  <!-- <section id="aa-client-brand">
    <div class="container">
    <h2>OUR TRUSTED BUSINESS PARTNERS</h2>
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-java.png') }}" alt="java img"></a></li>
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-jquery.png') }}" alt="jquery img"></a></li>
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-html5.png') }}" alt="html5 img"></a></li>
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-css3.png') }}" alt="css3 img"></a></li>
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-wordpress.png') }}" alt="wordPress img"></a></li>
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-joomla.png') }}" alt="joomla img"></a></li>
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-java.png') }}" alt="java img"></a></li>
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-jquery.png') }}" alt="jquery img"></a></li>
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-html5.png') }}" alt="html5 img"></a></li>
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-css3.png') }}" alt="css3 img"></a></li>
              <li><a href="#"><img src="{{ URL::asset('ds/img/client-brand-wordpress.png') }}" alt="wordPress img"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- / Client Brand -->

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


@include('layouts.footer')