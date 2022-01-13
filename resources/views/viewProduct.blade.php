@include('layouts.header')

<!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="{{ URL::asset('ds/img/fashion/fashion-header-bg-8.jpg') }}" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>{{$product->product_type}} Series</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li><a href="active">{{$product->product_type}}</a></li>
        </ol>
      </div>
     </div>
   </div>
  </section> 
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="/uploads/products/{{$product ->main_image}}" class="simpleLens-lens-image"><img src="/uploads/products/{{$product ->main_image}}" class="simpleLens-big-image"></a></div>
                      </div>
                      <div class="simpleLens-thumbnails-container">
                          <a data-big-image="/uploads/products/{{$product ->main_image}}" data-lens-image="/uploads/products/{{ $product->large_main_image }}" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="/uploads/products/{{$product ->tumbnail_main_image}}">
                          </a>                                    
                          <a data-big-image="/uploads/products/{{$product ->sub_image_1}}" data-lens-image="/uploads/products/{{ $product->large_sub_image_1 }}" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="/uploads/products/{{$product ->tumbnail_sub_image_1}}" style="display: {{$product->tumbnail_display_1}}">
                          </a>
                          <a data-big-image="/uploads/products/{{$product ->sub_image_2}}" data-lens-image="/uploads/products/{{ $product->large_sub_image_2 }}" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="/uploads/products/{{$product ->tumbnail_sub_image_2}}" style="display: {{$product->tumbnail_display_2}}">
                          </a>
                          <a data-big-image="/uploads/products/{{$product ->sub_image_3}}" data-lens-image="/uploads/products/{{ $product->large_sub_image_3 }}" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="/uploads/products/{{$product ->tumbnail_sub_image_3}}" style="display: {{$product->tumbnail_display_3}}">
                          </a>
                          <a data-big-image="/uploads/products/{{$product ->sub_image_4}}" data-lens-image="/uploads/products/{{ $product->large_sub_image_4 }}" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="/uploads/products/{{$product ->tumbnail_sub_image_4}}" style="display: {{$product->tumbnail_display_4}}">
                          </a>
                          <a data-big-image="/uploads/products/{{$product ->sub_image_5}}" data-lens-image="/uploads/products/{{ $product->large_sub_image_5 }}" class="simpleLens-thumbnail-wrapper" href="#">
                            <img src="/uploads/products/{{$product ->tumbnail_sub_image_5}}" style="display: {{$product->tumbnail_display_5}}">
                          </a>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{$product->product_name}}</h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">RM{{ $product->price }}</span>
                      <p class="aa-product-avilability">Stock available: <span>{{ $product->stock }}</span></p>
                    </div>
                    <!-- <p>subtitle</p> -->
                    <h4>Switch</h4>
                    <div class="aa-prod-view-size">
                    
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" id="form">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->product_name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->main_image }}"  name="main_image">
                        <select name="switch">
                          <option selected="Red" value="">Red</option>
                          <option value="Red">Red</option>
                          <option value="Blue">Blue</option>
                          <option value="Brown">Brown</option>

                        </select>
                        <input type="hidden" value="1" name="quantity">
                        <!-- <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button> -->
                        <a class="aa-add-to-cart-btn" href="javascript:;" onclick="parentNode.submit();">Add To Cart</a>
                    </form>
                    
                    </div>
                    <!-- <div class="aa-prod-quantity">
                      <form action="">
                        <select id="" name="">
                          <option selected="1" value="0">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                          <option value="5">6</option>
                        </select>
                      </form> -->
                      <p class="aa-prod-category">
                        Category: <a href="#">{{$product->product_type}} Keyboard</a>
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                    
                      <!-- <a class="aa-add-to-cart-btn" href="#">Wishlist</a> -->
                      <!-- <a class="aa-add-to-cart-btn" href="#">Compare</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Description</a></li>
                <li><a href="#review" data-toggle="tab">Reviews</a></li>                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  {!! html_entity_decode($product->description) !!}
                </div>
                <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4>2 Reviews for T-Shirt</h4> 
                   <ul class="aa-review-nav">
                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="{{ URL::asset('ds/img/testimonial-img-3.jpg') }}" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Jordan Kok</strong> - <span>November 26, 2021</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>The keyboard is great! It is exactly what I have been looking for!</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="{{ URL::asset('ds/img/testimonial-img-3.jpg') }}" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Harvey Lim</strong> - <span>November 25, 2021</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Great keyboard! Makes typing really enjoying!</p>
                          </div>
                        </div>
                      </li>
                   </ul>
                   <h4>Add a review</h4>
                   <div class="aa-your-rating">
                     <p>Your Rating</p>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                   </div>
                   <!-- review form -->
                   <form action="" class="aa-review-form">
                      <div class="form-group">
                        <label for="message">Your Review</label>
                        <textarea class="form-control" rows="3" id="message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>  
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                      </div>

                      <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                   </form>
                 </div>
                </div>            
              </div>
            </div>
            <!-- Related product -->
            <div class="aa-product-related-item">
             

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
              </div>
              <!-- / quick view modal -->   
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  @include('layouts.footer')