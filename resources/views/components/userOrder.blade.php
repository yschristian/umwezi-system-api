@extends('components.layout')
@section('content')
</section>
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
					<li><a class="active" href="order.html">Orders</a></li>
					<!-- <li><a href="address.html">Address</a></li> -->
					<li><a href="/profiledetails">Profile Details</a></li>
				</ul>
				<div class="dashboard-wrapper user-dashboard">
					<div class="table-responsive">
						<table class="table">
							<thead>
							<tr>
								<th>User</th>
								<th>Product</th>
								<th>Quantity</th>
                                <th>amount</th>
                                <!-- <th>Address</th> -->
								<th>Date</th>
                                <th>Status</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							@foreach($orders as $order )
							<tr>
								<!-- <td>Yubahwe</td> -->
								<td>{{Auth()->user()->username}}</td>
								<td>{{$order ->product->Title}}</td>
								<td>{{$order ->quantity}}</td>
                                <td>{{$order ->amount}}</td>
                                <!-- <td>{{$order ->address}}</td> -->
								<td>{{$order ->created_at}}</td>
                                <td>{{$order ->status}}</td>
								<td>
									<a href="#" class="btn">view</a>
									<a href="#" class="btn">delete</a>
								</td>
							</tr>
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection()
