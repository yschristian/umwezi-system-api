@extends('components.layout')
@section('content')
<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.html">
            <!-- <img src="images/logo.png" alt=""> -->
          </a>
          <h2 class="text-center">Partner</h2>
          <form class="text-left clearfix" action="{{url('/request/create')}}"  method="POST">
          {{csrf_field()}}
            <div class="form-group">
              <input type="text" name="FirstName" class="form-control"  placeholder="FirstName">
            </div>
            <div class="form-group">
              <input type="text" name="LastName" class="form-control"  placeholder="LastName">
            </div>
            <div class="form-group">
              <input type="email" name="Email" class="form-control"  placeholder="Email">
            </div>
            <div class="form-group">
            <label for="permissions">role:</label>
				<select name="Option" class="form-control">
                    <option value= "farmer" name="farmer">farmer</option>
                    <option value= "sales-person" name="sales-person" >salesPerson</option>
				</select>					
			</div>	
            <div class="form-group">
						<textarea rows="6" placeholder="Description" class="form-control" name="Description" id="message"></textarea>	
				</div>	
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection()