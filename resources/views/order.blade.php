@extends('sidebar')
@section('content')
<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Orders</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Product</th>
								<th>Quantity</th>
                                <th>amount</th>
                                <th>Address</th>
                                <th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($orders as $order )
							<tr>
								<!-- <td>Yubahwe</td> -->
								<td>{{$order ->user->username}}</td>
								<td>{{$order ->product->Title}}</td>
								<td>{{$order ->quantity}}</td>
                                <td>{{$order ->amount}}</td>
                                <td>{{$order ->address}}</td>
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
				
 <!-- <div class="todo"> -->
	<!-- code here -->
    <!-- <div class="head">
        <h3>Create Product</h3>
    </div>
	<div class="card">
		<form class="card-form" action="{{url('/product/create')}}" method="POST">
            {{csrf_field()}}
        <div class="input">
				<input type="file" class="input-field" placeholder="Image" required/>
			</div>
			<div class="input">
				<input type="text" class="input-field" placeholder="Title" required/>
			</div>
			<div class="input">
				<input type="text" class="input-field" placeholder="Description" required/>
			</div>
            <div class="input">
				<input type="text" class="input-field" placeholder="Categories" required/>
			</div>
            <div class="input">
				<input type="text" class="input-field" placeholder="Price" required/>
			</div>
            <div class="input">
				<input type="text" class="input-field" placeholder="Addres" required/>
			</div>
			<div class="action">
				<button class="action-button">create</button>
			</div>
		</form> -->
	<!-- </div> -->
</div>

			</div>
		</main>
        @endsection()