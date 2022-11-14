
<main>
			<div class="table-data">
				<div class="order">
                <div class="card">
		<form class="card-form" action="{{url('/user/login')}}" method="POST">
		{{csrf_field()}}
        <div class="input">
				<input type="text" name="email" class="input-field" placeholder="email"/>
			</div>
			<div class="input">
				<input type="password" name="password" class="input-field"  placeholder="password"/>
			</div>
            <button type="submit">Login</button>
		</form>
	</div>
				</div>
			</div>
		</main>
