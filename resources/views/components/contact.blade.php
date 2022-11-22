@extends('components.layout')
@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Contact Us</h1>
					<ol class="breadcrumb">
						<li><a href="/home">Home</a></li>
						<li class="active">contact</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" action="{{url('/contact/create')}}" method="POST"  role="form">
					{{csrf_field()}}
						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="Name" id="name">
						</div>
						
						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="Email" id="email">
						</div>
						
						<div class="form-group">
							<input type="text" placeholder="Subject" class="form-control" name="Subject" id="subject">
						</div>
						
						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="Message" id="message"></textarea>	
						</div>
						
						<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way 
						</div>
						
						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>
						
						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
						</div>						
						
					</form>
				</div>
				<!-- ./End Contact Form -->
				
				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<!-- <div class="google-map">
						<div id="map"></div>
					</div> -->
					<ul class="contact-short-info" >
						<li>
							<i class="tf-ion-ios-home"></i>
							<span>Kigal / Rwanda</span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Phone: +250 783 055 543</span>
						</li>
                        <li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span>Phone: +250 784 381 529</span>
						</li>
						<li>
							<i class="tf-ion-android-mail"></i>
							<span>Email: aimeeumuhoza1@gmail.com</span>
						</li>
					</ul>
					<!-- Footer Social Links -->
					<div class="social-icon">
						<ul>
							<li><a class="fb-icon" href="#"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-instagram"></i></a></li>
						</ul>
					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div>
</section>
@endsection()
