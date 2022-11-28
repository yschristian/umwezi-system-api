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
          <h2 class="text-center">Create Your Account</h2>
          <form class="text-left clearfix" action="{{url('/user/create')}}" method="POST">
          {{csrf_field()}}
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Username" name="username" id="Username">
            </div>
            <div class="form-group">
        
              <input type="email" class="form-control"  placeholder="Email"  name="email" id="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control"  placeholder="Password"  name="password" id="Password">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center" >Sign In</button>
            </div>
          </form>
          <p class="mt-20">Already hava an account ?<a href="/login"> Login</a></p>
          <p><a href="/forgot"> Forgot your password?</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection()