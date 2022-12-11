<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{URL::asset('css/style.css');}}"}>

	<title>umweziFarming</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Umwezi Farming</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="/dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li >
				<a href="/product/getAll">
					<i class='bx bx-box' ></i>
					<span class="text">Products</span>
				</a>
			</li>
			<li>
				<a href="/order/getAll">
					<i class='bx bx-list-ul' ></i>
					<span class="text">Order List</span>
				</a>
			</li>
			<li>
				<a href="/user/getAll">
					<i class='bx bxs-group' ></i>
					<span class="text">All Users</span>
				</a>
			</li>
			<li>
				<a href="/request/getAll">
					<i class='bx bxs-group' ></i>
					<span class="text">Partners</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="/contact/getAll">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">configuration</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
			@if(auth()->user())
				<a href="/logout" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
				@endif
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="{{URL::asset('img/test.jpeg');}}">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		@yield('content')
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="{{URL::asset('js/script.js');}}"></script>
</body>
</html>