@extends('sidebar')
@section('content')
<main>

			<div class="table-data">
				<div class="order">
                <div class="card">
		<form class="card-form" >
        <div class="input">
				<input type="text" value="{{$product-> Title}}" class="input-field" readOnly/>
			</div>
			<div class="input">
				<input type="text" value="{{$product-> Description}}" class="input-field" readOnly/>
			</div>
			<div class="input">
				<input type="text" value="{{$product-> Price}}" class="input-field" readOnly/>
			</div>
            <div class="input">
				<input type="text" value="{{$product-> Categories}}" class="input-field" readOnly/>
			</div>
            <div class="input">
				<input type="text" value="{{$product-> Address}}" class="input-field" readOnly/>
			</div>
            <!-- <div class="input">
				<input type="text" value="{{$product-> Title}}" class="input-field" />
			</div> -->
		</form>
	</div>
			</div>
				<div >
				@foreach($product->Image as $image )
               	 <img src="{{$image}}"  width="200px" height="200px">
				@endforeach
				</div>
			</div>
		</main>
				
@endsection()