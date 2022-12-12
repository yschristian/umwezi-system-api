@extends('sidebar')
@section('content')
<main>
			<div class="head-title">
				<div class="left">
					<h1>{{auth()->user()->username}}</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
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
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Product</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/test.jpeg">
									<p>umuhoza</p>
								</td>
								<td>rice</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>shema</p>
								</td>
								<td>mango</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<!-- <div class="head">
						<h3>users</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div> -->
					<!-- <ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul> -->
				</div>
			</div>
		</main>
        @endsection()