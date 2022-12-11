@extends('components.layout')
@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Market</h1>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">Market</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="products section ">

	<div class="container">
	
	<div class="row">
	  @foreach($products as $product)
			<div class="col-md-4">
			
				<div class="product-item ">
				
					<div class="product-thumb ">
						<span class="bage">Sale</span>
						<img class="img-responsive"   style="height:280px;" src="{{$product->Image[0]}}" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<a href="/singleProduct/{{$product->id}}" >
											<i class="tf-ion-ios-search-strong"></i>
										</a>
									</span>
								</li>
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
	
	</div>
</section>
@endsection()
