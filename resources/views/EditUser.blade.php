@extends('sidebar')
@section('content')
<main>
			<div class="table-data">
				<div class="order">
                <div class="card">
		<form class="card-form" method="POST" action="{{url('/user/update/'.$user->id)}}" >
        {{csrf_field()}}
        @method("PATCH")
        <div class="input">
				<input type="text" value="{{$user-> username}}" class="input-field" />
			</div>
			<div class="input">
				<input type="text" value="{{$user-> email}}" class="input-field" />
			</div>
            <button type="submit" class="btn">update<button>
		</form>
	</div>
				</div>
			</div>
		</main>


 @endsection()