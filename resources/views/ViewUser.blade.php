@extends('sidebar')
@section('content')
<main>
			<div class="table-data">
				<div class="order">
                <div class="card">
		<form class="card-form" >
        <div class="input">
				<input type="text" value="{{$user-> username}}" class="input-field" readOnly/>
			</div>
			<div class="input">
				<input type="text" value="{{$user-> email}}" class="input-field" readOnly/>
			</div>
			
		</form>
	</div>
				</div>
			</div>
		</main>


 @endsection()
 