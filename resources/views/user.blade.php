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
							<a class="active" href="#">Users</a>
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
						<h3>All Users</h3>
					
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Username</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($users as $user)
							<tr>
								<td>{{$user-> username}}</td>
								<td>{{$user -> email}}</td>
								<td style="display:flex">
								<a href="{{url('/user/getone/'.$user->id)}}" class="btn">View</a>
                                    <a href="{{url('/user/edit/'.$user->id)}}" class="btn">edit</a>
                                    <form method="POST" action="{{url('/user/delete/'.$user->id)}}" style="display:inline">
										{{csrf_field()}}
										@method("DELETE")
									<button  style="border: none; cursor:pointer" class="btn">delete</button>
									</form>
								</td>
							</tr>
                            @endforeach
						</tbody>
					</table>
				</div>
				
 <div class="todo">
	<!-- code here -->
    <div class="head">
        <h3>Create User</h3>
    </div>
	<div class="card">
		<form class="card-form" action="{{url('/user/create')}}" method="POST">
            {{csrf_field()}}
        <!-- <div class="input">
				<input type="file" class="input-field" placeholder="Image" required/>
			</div> -->
			<div class="input">
				<input type="text" class="input-field" placeholder="username" required/>
			</div>
			<div class="input">
				<input type="text" class="input-field" placeholder="email" required/>
			</div>
            <div class="input">
				<input type="text" class="input-field" placeholder="password" required/>
			</div>
			<div class="action">
				<button class="action-button">create</button>
			</div>
		</form>
	</div>
</div>

			</div>
		</main>
        @endsection()