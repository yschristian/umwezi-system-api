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
							<a href="#">Partners</a>
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
						<h3>All Partners</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>FirstName</th>
								<th>LastName</th>
								<th>Email</th>
                                <th>Option</th>
                                <th>Description</th>
							</tr>
						</thead>
						<tbody>
							@foreach($partners as $partner )
							<tr>
								<td>{{$partner -> FirstName}}</td>
								<td>{{$partner -> LastName}}</td>
                                <td>{{$partner -> Email}}</td>
                                <td>{{$partner -> Option}}</td>
                                <td>{{$partner -> Description}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				
 <div class="todo">
	<!-- code here -->
    <div class="head">
        <h3>Create Product</h3>
    </div>
	<div class="card">
		<form class="card-form" action="{{url('/request/create')}}" method="GET">
            {{csrf_field()}}
        <div class="input">
				<input type="file" class="input-field" placeholder="FirstName" required/>
			</div>
			<div class="input">
				<input type="text" class="input-field" placeholder="LastName" required/>
			</div>
			<div class="input">
				<input type="text" class="input-field" placeholder="Email" required/>
			</div>
            <div class="input">
				<input type="text" class="input-field" placeholder="Options" required/>
			</div>
            <div class="input">
				<input type="text" class="input-field" placeholder="Description" required/>
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