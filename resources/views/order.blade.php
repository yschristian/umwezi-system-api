@extends('sidebar')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">   
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script>  
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
						<h3>{{ \App\Models\Order::all()->count() }}</h3>
						<p>Orders</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>{{ \App\Models\User::all()->count() }}</h3>
						<p>Users</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$25</h3>
						<p>Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All Orders</h3>
						
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
								<th>Date</th>
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
		</main>
		<script>  
$('table').DataTable();  
</script>  
        @endsection()