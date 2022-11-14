@extends('sidebar')
@section('content')
<main>
			<div class="table-data">
				<div class="order">
                <div class="card">
		<form class="card-form" >
        <div class="input">
				<input type="text" value="{{$patner-> FirstName}}" class="input-field" readOnly/>
			</div>
			<div class="input">
				<input type="text" value="{{$patner-> LastName}}" class="input-field" readOnly/>
			</div>
			<div class="input">
				<input type="text" value="{{$patner-> Email}}" class="input-field" readOnly/>
			</div>
            <div class="input">
				<input type="text" value="{{$patner-> Option}}" class="input-field" readOnly/>
			</div>
            <div class="input">
				<input type="text" value="{{$patner-> Description}}" class="input-field" readOnly/>
			</div>
		</form>
	</div>
				</div>
			</div>
		</main>


 @endsection()
 