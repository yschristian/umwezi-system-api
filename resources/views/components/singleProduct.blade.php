@extends('components.layout')
@section('content')
<!-- @if(session('message'))
<div>{{session("message")}}</div>
@endif -->
<section class="single-product">
	<div class="container">

		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li><a href="/market">Market</a></li>
					<li class="active">Single Product</li>
				</ol>
			</div>
		</div>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img src='{{$product->Image[0]}}' alt='' data-zoom-image="images/shop/single-products/product-1.jpg" />
								</div>
								<div class='item'>
									<img src='{{$product->Image[1]}}' alt='' data-zoom-image="images/shop/single-products/product-2.jpg" />
								</div>
								
								<div class='item'>
									<img src='{{$product->Image[2]}}' alt='' data-zoom-image="images/shop/single-products/product-3.jpg" />
								</div>
								<!-- <div class='item'>
									<img src='images/shop/single-products/product-4.jpg' alt='' data-zoom-image="images/shop/single-products/product-4.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-5.jpg' alt='' data-zoom-image="images/shop/single-products/product-5.jpg" />
								</div>
								<div class='item'>
									<img src='images/shop/single-products/product-6.jpg' alt='' data-zoom-image="images/shop/single-products/product-6.jpg" />
								</div> -->
								
							</div>
							
							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src='images/shop/single-products/product-1.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='1'>
								<img src='images/shop/single-products/product-2.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='2'>
								<img src='images/shop/single-products/product-3.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='3'>
								<img src='images/shop/single-products/product-4.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='4'>
								<img src='images/shop/single-products/product-5.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='5'>
								<img src='images/shop/single-products/product-6.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='6'>
								<img src='images/shop/single-products/product-7.jpg' alt='' />
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-details">
					<h2>{{$product-> Title}}</h2>
					<p class="product-price" >${{$product-> Price}}</p>
					
					<p class="product-description mt-20">
						{{$product->Description}}
					</p>
					<div class="product-category">
						<span>Categories:</span>
						<ul>
							<li><a >{{$product -> Categories}}</a></li>
						</ul>
					</div>
					<form action="{{url('/cart')}}" method="POST" enctype="multipart/form-data">
					<!-- url(route('cart.store') -->
                        @csrf
						<input type="hidden" value="{{ $product->id }}" name="id">
						<!-- <input type="hidden" value="{{ $product->Price }}" name="price"> -->
						<div class="product-quantity">
						<span>Quantity:</span>
						<div class="product-quantity-slider">
							<input id="product-quantity" type="number" value="1" name="qty">
						</div>
					 </div>
                         <button type="submit" class="btn btn-main mt-20">Add To Cart</button> 
                    </form>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="tabCommon mt-20">
					<div class="tab-content patternbg">
						<div id="details" class="tab-pane fade active in">
							<h4>Product Description</h4>
							<p>{{$product->Description}}</p>
							<p>{{$product->Description}}</p>
						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
