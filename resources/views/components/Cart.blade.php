@extends('components.layout')
@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Cart</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">cart</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">Item Name</th>
                      <th class="">Item Price</th>
                      <th class="">quantity</th>
                      <th class="">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($carts as $cart)
                    <tr class="">
                      <td class="">
                        <!-- <div class="product-info">
                          <img width="80" src="images/shop/cart/cart-1.jpg" alt="" />
                          <a href="#!">{{$cart->name}}</a>
                        </div> -->
                      </td>
                      <td class="">{{$cart->Price}}</td>
                      <td class="">{{$cart->qty}}</td>
                      <td class="">
                        <a class="product-remove" href="/remove">Remove</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <a href="/checkout" class="btn btn-main pull-right">Checkout</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection()
