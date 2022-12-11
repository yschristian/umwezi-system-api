@extends('components.layout')
@section('content')

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Checkout</h1>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">checkout</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                        <h3 class="panel-title" >Payment Details</h3>
                </div>
                <div class="panel-body">
    
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif
                    
                    <form 
                            role="form" 
                            action="/checkout" 
                            method="post" 
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card'>
                                <label class='control-label'>Amount</label> <input
                                    autocomplete='off' class='form-control' value="{{$total}}"
                                    type='text' readonly>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
    
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
                     <!-- <div class="form-group">
                        <label for="full_name">userid</label>
                        <input type="text" class="form-control" id="full_name" name="username" placeholder="" value="{{auth()->user()->username}}" readonly>
                     </div> -->
                     <!-- <div class="form-group">
                        <label for="user_address">product</label>
                        <input type="text" class="form-control" name="cart[]" id="user_address" name="id" placeholder="" value="{{$carts}}">
                     </div> -->
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now {{$total}}</button>
                            </div>
                        </div>
                            
                    </form>
                </div>
            </div>        
        </div>
       <div class="col-md-4" style="margin-left: 500px;  ">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Order Summary</h4>
                     <div class="media product-card">
                        <!-- <a class="pull-left" href="product-single.html">
                           <img class="media-object" src="images/shop/cart/cart-1.jpg" alt="Image" />
                        </a> -->
                        @foreach($carts as $cart)
                        <div class="media-body">
                           <h4 class="media-heading"><a href="product-single.html">{{$cart->name}}</a></h4>
                           <p class="price">{{$cart->qty}} x {{$cart->price}}</p>
                           <span class="remove" >Remove</span>
                        </div>
                     </div>
                     
                     @endforeach
                    
                     <!-- <div class="checkout-country-code clearfix">
                        <div class="form-group">
                           <label for="user_post_code">quantity</label>
                           <input type="text" class="form-control" id="user_post_code" name="quantity" value="{{$cart->qty}}">
                        </div>
                        <div class="form-group" >
                           <label for="user_city">amount</label>
                           <input type="text" class="form-control" id="user_city" name="amount" value="{{$total}}">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="user_country">status</label>
                        <input type="text" class="form-control" id="user_country" placeholder="">
                     </div> -->
                     <!-- <a href="" class="btn btn-main mt-20" type="submit">Place Order</a > -->
                  </form>
                     
                     <!-- <div class="discount-code">
                        <p>Have a discount ? <a data-toggle="modal" data-target="#coupon-modal" href="#!">enter it here</a></p>
                     </div> -->
                     
                     <!-- <div class="verified-icon">
                        <img src="images/shop/verified.png">
                     </div> -->
                     <ul class="summary-prices">
                        <li>
                           <span>Shipping:</span>
                           <span>Free</span>
                        </li>
                     </ul>
                     <div class="summary-total">
                        <span>Total</span>
                        <span>{{$total}}</span>
                     </div>
   
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   <!-- Modal -->
   <div class="modal fade" id="coupon-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <form>
                  <div class="form-group">
                     <input class="form-control" type="text" placeholder="Enter Coupon Code">
                  </div>
                  <button type="submit" class="btn btn-main">Apply Coupon</button>
               </form>
            </div>
         </div>
      </div>
   </div>
   
@endsection()
