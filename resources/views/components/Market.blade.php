@extends('components.layout')
@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Market</h1>
					<ol class="breadcrumb">
						<li><a href="/home">Home</a></li>
						<li class="active">Market</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="products section">
	<div class="container">
		<div class="row">
			@foreach($products as $product)
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="{{$product->Image[0]}}" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<a href="/singleProduct/{{$product->id}}" >
											<i class="tf-ion-ios-search-strong"></i>
										</a>
									</span>
								</li>
								<!-- <li>
			                        <a href="#!" ><i class="tf-ion-ios-heart"></i></a>
								</li>-->
								<li>
									<a href="/cart"><i class="tf-ion-android-cart"></i></a>
								</li> 
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="{{url('/singleProduct/'.$product->id)}}">{{$product->Title}}</a></h4>
						<p class="price">${{$product->Price}}</p>
					</div>
				</div>
			</div>
			@endforeach
			</div>
		
		<!-- Modal -->
		<!-- <div class="modal product-modal fade" id="product-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="images/shop/products/modal-product.jpg" alt="product-img" />
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
			        				<p class="product-price">$200</p>
			        				<p class="product-short-description">
			        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
			        				</p>
			        				<a href="/cart" class="btn btn-main">Add To Cart</a>
			        				<a href="/singleproduct" class="btn btn-transparent">View Product Details</a>
			        			</div>
			        		</div>
			        	</div>
			        </div>
		    	</div>
		  	</div>
		</div> -->

		</div>
	</div>
</section>
@endsection()
