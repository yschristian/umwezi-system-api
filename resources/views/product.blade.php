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
						<h3>All Products</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Image</th>
								<th>Title</th>
								<th>Description</th>
                                <th>Categories</th>
                                <th>Price</th>
                                <th>Address</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/test.jpeg">
								</td>
								<td>sgdhsa</td>
								<td>title</td>
                                <td>descr</td>
                                <td>categories</td>
                                <td>price</td>
								<td>
									<a href="#" class="btn">View</a>
								</td>
							</tr>
                            <tr>
								<td>
									<img src="img/test.jpeg">
								</td>
								<td>sgsag</td>
								<td>title</td>
                                <td>descr</td>
                                <td>categories</td>
                                <td>price</td>
								<td>
									<a href="#" class="btn">View</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				
 <div class="todo">
	<!-- code here -->
    <div class="head">
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
		</form>
	</div>
</div>

			</div>
		</main>
        @endsection()