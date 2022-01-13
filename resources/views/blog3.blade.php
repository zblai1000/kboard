@include('layouts.header')
  
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="{{ URL::asset('ds/img/fashion/fashion-header-bg-8.jpg') }}" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Blog</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li class="active">Blog</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- Blog Archive -->
  <section id="aa-blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-archive-area">
            <div class="row">
              <div class="col-md-9">
                <!-- Blog details -->
                <div class="aa-blog-content aa-blog-details">
                  <article class="aa-blog-content-single">                        
                    <h2><a href="#">Why are mechanical keyboards so popular?</a></h2>
                     <div class="aa-article-bottom">
                      <div class="aa-post-author">
                        Posted By <a href="#">Bryan Lai</a>
                      </div>
                      <div class="aa-post-date">
                        November 28th 2021
                      </div>
                    </div>
                    <figure class="aa-blog-img">
                      <a href="#"><img src="{{ URL::asset('ds/img/fashion/3.jpg') }}" alt="fashion img"></a>
                    </figure>
                    <p>Most computer keyboards look the same — three rows of letters, a row or two of numbers, and a lot of punctuation and function keys. But although they look similar, keyboards can vary wildly when it comes to how they work on the inside.</p>
                    <p>Most people today use one of two kinds of keyboards: membrane and mechanical keyboards.</p>
                    <p>Membrane keyboards, the more common type, feature some sort of rubber dome under each key. When you press a key, the rubber is compressed, and the key makes an electrical connection with the keyboard's wires.</p>
                    <ul>
                      <li>Mechanical keyboards are very different</li>
                      <li>Instead of rubber, they have a plastic switch under the key that makes the connection go through.</li>
                      <li>This might not sound that different, but the style of key has a huge impact on how you type.</li>
                      <li>Voluptate sunt tempora culpa et veritatis ex quo non tenetur similique blanditiis! Debitis, assumenda, provident.</li>
                      <li>Eligendi sunt ratione praesentium, tempore esse, iure ut dolor consequuntur eum ducimus commodi sequi beatae.</li>
                    </ul>
                    <p>Most computer keyboards look the same — three rows of letters, a row or two of numbers, and a lot of punctuation and function keys. But although they look similar, keyboards can vary wildly when it comes to how they work on the inside.</p>
                    <p>Most people today use one of two kinds of keyboards: membrane and mechanical keyboards.</p>
                    <p>Membrane keyboards, the more common type, feature some sort of rubber dome under each key. When you press a key, the rubber is compressed, and the key makes an electrical connection with the keyboard's wires.</p>
                    <div class="blog-single-bottom">
                      <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                         
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="blog-single-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                  </article>
                 

                </div>
              </div>

              <!-- blog sidebar -->
              <div class="col-md-3">
                <aside class="aa-blog-sidebar">
                  <div class="aa-sidebar-widget">
                    <h3>Category</h3>
                    <ul class="aa-catg-nav">
                    <li><a href="{{url('')}}/k100">K100</a></li>
              <li><a href="{{url('')}}/k96">K96</a></li>
              <li><a href="{{url('')}}/k80">K80</a></li>
              <li><a href="{{url('')}}/k75">K75</a></li>
              <li><a href="{{url('')}}/k60">K60</a></li>
                    </ul>
                  </div>
                  <div class="aa-sidebar-widget">
                    <h3>Tags</h3>
                    <div class="tag-cloud">
                      <a href="#">Mechanical Keyboard</a>
                      <a href="#">Switch</a>
                      <a href="#">Gaming</a>
                      <a href="#">Work</a>
                      <a href="#">RBG</a>
                      <a href="#">Sound</a>
                      <a href="#">Gadgets</a>
                    </div>
                  </div>
                  <div class="aa-sidebar-widget">
                    <h3>Related Products to this Blog</h3>
                    <div class="aa-recently-views">
                      <ul>
                      @foreach ($products as $product)
                      @if($product->size == '60%' & $product->connectivity == 'wireless')
                        <li>
                          <a class="aa-cartbox-img" href="/home/{{$product->id}}"><img src="/uploads/products/{{$product->main_image}}" alt="img"></a>
                          <div class="aa-cartbox-info">
                            <h4><a href="/home/{{$product->id}}">{{ $product->product_name }}</a></h4>
                            <p>RM{{ $product->price }}</p>
                          </div>                    
                        </li>   
                        @endif
                        @endforeach                                
                      </ul>
                    </div>                            
                  </div>
                </aside>
              </div>
            </div>           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Blog Archive -->



@include('layouts.footer')