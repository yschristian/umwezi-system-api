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
							<a class="active" href="#">Products</a>
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
				<!-- <li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$25</h3>
						<p>Sales</p>
					</span>
				</li> -->
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All Messages</h3>
					
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>	
                          @foreach($contacts as $contact)					 
							<tr>
                            <td>{{ $contact->Name}}</td>
								<td>{{ $contact->Email}}</td>
                                <td>{{ $contact->Subject}}</td>
                                <td>{{ $contact->Message}}</td>
                                
                                <td>
                                    <a href="#">delete</a>
                                    <a href="#">View</a>
                                </td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
	

			</div>
		</main>
        @endsection()