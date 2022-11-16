@extends('components.layout')
@section('content')
<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.html">
          <h2 class="text-center">UMEZI FARMING</h2>
          </a>
          <!-- <h2 class="text-center">Welcome Back</h2> -->
          <form class="text-left clearfix" action="{{url('/user/login')}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <input type="email" class="form-control" name="email"  placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center">Login</button>
            </div>
          </form>
          <p class="mt-20">New in this site ?<a href="/signup"> Create New Account</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection()