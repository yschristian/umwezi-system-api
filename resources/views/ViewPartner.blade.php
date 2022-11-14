@extends('sidebar')
@section('content')
  <!-- <style>
        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 800px;
        height:400px;
        margin: auto;
        /* text-align: center; */
        font-family: arial;
        }
  </style>     
<h2 style="text-align:center">Partner</h2>

<div class="card">    
  <h4>FirstName: {{$patner-> FirstName}} </h4>
  <h4>FirstName: {{$patner-> LastName}}</h4>
  <span>Email: {{$patner-> Email}}</span>
  <span>role : {{$patner-> Option}}</span>
  <p class="title">Description : {{$patner-> Description}}</p>

</div> -->
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
 