@include('layouts.header')

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
  <img src="{{ URL::asset('ds/img/fashion/fashion-header-bg-8.jpg') }}" alt="fashion img">
  <div class="aa-catg-head-banner-area">
    <div class="container">
    <div class="aa-catg-head-banner-content">
      <h2>Cart Page</h2>
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>                   
        <li class="active">Cart</li>
      </ol>
    </div>
    </div>
  </div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="cart-view">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cart-view-area">
          <div class="cart-view-table">
            <form action="">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($cartItems as $item)
                    <tr>
                      <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id}}" >
                        <!-- <td><a class="remove" href="javascript:;" onclick="parentNode.submit();"><fa class="fa fa-close"></fa></a></td> -->
                        <td><button type="submit" class="px-4 py-2 text-white bg-red-600">x</button></td>
                      </form>
                        <td><a href="#"><img src="ds/img/{{ $item->attributes->image }}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">{{ $item->name }}</a></td>
                        <td>${{ $item->price }}</td>
                      <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id}}" >
                        <td><input class="aa-cart-quantity" name="quantity" type="number" value="{{ $item->quantity }}" onchange='this.form.submit()'></td>
                        <td>${{ number_format($item->quantity * $item->price, 2)}}</td>
                      </form>
                    </tr>
                    @endforeach
                    <tr>
                      <td colspan="6" class="aa-cart-view-bottom">
                        <!-- <div class="aa-cart-coupon">
                          <input class="aa-coupon-code" type="text" placeholder="Coupon">
                          <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                        </div> -->
                        <!-- <input class="aa-cart-view-btn" type="submit" value="Update Cart"> -->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </form>
            <!-- Cart Total view -->
            <div class="cart-view-total">
              <h4>Cart Totals</h4>
              <table class="aa-totals-table">
                <tbody>
                  <tr>
                    <th>Total</th>
                    <td>${{ Cart::getTotal()}}</td>
                  </tr>
                </tbody>
              </table>
              <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Cart view section -->



@include('layouts.footer')