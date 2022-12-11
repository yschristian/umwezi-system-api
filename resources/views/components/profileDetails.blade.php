@extends('components.layout')
@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Dashboard</h1>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">my account</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="user-dashboard page-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="list-inline dashboard-menu text-center">
          <li><a href="/userdashboard">Dashboard</a></li>
          <li><a href="/userOrder">Orders</a></li>
          <li><a href="address.html">Address</a></li>
          <li><a class="active"  href="/profiledetails">Profile Details</a></li>
        </ul>
        <div class="dashboard-wrapper dashboard-user-profile">
          <div class="media">
            <div class="pull-left text-center" href="#!">
              <img class="media-object user-img" src="images/chris.png" alt="Image">
              <a href="#x" class="btn btn-transparent mt-20">Change Image</a>
            </div>
            <div class="media-body">
              <ul class="user-profile-list">
                <li><span>Full Name:</span>chris</li>
                <li><span>city:</span>kigali</li>
                <li><span>Email:</span>yegokowe@gmail.com</li>
                <!-- <li><span>Phone:</span>+880123123</li>
                <li><span>Date of Birth:</span>Dec , 22 ,1991</li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection()
