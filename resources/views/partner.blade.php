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
							<a href="#">Partners</a>
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
						<h3>All Partners</h3>
						
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>FirstName</th>
								<th>Email</th>
                                <th>Option</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($partners as $partner )
							<tr>
								<td>{{$partner -> FirstName}}</td>
                                <td>{{$partner -> Email}},</td>
                                <td>{{$partner -> Option}}</td>
								<td>{{$partner -> Status}}</td>
								<td style="display: flex ">
								<a href="{{url('/request/getOne/'.$partner->id)}}" class="btn">View</a>
								<form method="POST" action="{{url('/request/approve/'.$partner->id)}}"  style="display:inline">
								{{csrf_field()}}
									<button style="border: none; cursor:pointer" class="btn">accept</button>
								</form>
									<form method="POST" action="{{url('/request/delete/'.$partner->id)}}"  style="display:inline">
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
				
 <!-- <div class="todo"> -->
	<!-- code here -->
    <!-- <div class="head">
        <h3>Create Partners</h3>
    </div> -->
	<!-- <div class="card">
		<form class="card-form" action="{{url('/request/create')}}" method="POST">
            {{csrf_field()}}
        <div class="input">
				<input type="text" name="FirstName" class="input-field" placeholder="FirstName" required/>
			</div>
			<div class="input">
				<input type="text" name="LastName" class="input-field" placeholder="LastName" required/>
			</div>
			<div class="input">
				<input type="text" name="Email" class="input-field" placeholder="Email" required/>
			</div>
            <div class="input"> -->
				<!-- <select name="Option">
					@foreach($roles as $role) -->
					<!-- <input type="text" name="Option" class="input-field" placeholder="Options" required/> -->
					<!-- <option value= "{{$role->name}}">{{$role->name}}</option>
					@endforeach -->
				<!-- </select>
				<label for="permissions">role:</label> -->
					
			<!-- </div>
            <div class="input">
				<input type="text" name="Description" class="input-field" placeholder="Description" required/>
			</div>
			<div class="action">
				<button class="action-button">create</button>
			</div>
		</form>
	</div> -->
</div>

			</div>
		</main>
		<script>  
$('table').DataTable();  
</script>  
        @endsection()