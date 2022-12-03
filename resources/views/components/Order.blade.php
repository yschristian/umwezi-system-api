@extends('components.layout')
@section('content')
<form class="checkout-form">
                     <div class="form-group">
                        <label for="full_name">userid</label>
                        <input type="text" class="form-control" id="full_name" placeholder="">
                     </div>
                     <div class="form-group">
                        <label for="user_address">productid</label>
                        <input type="text" class="form-control" id="user_address" placeholder="">
                     </div>
                     <div class="checkout-country-code clearfix">
                        <div class="form-group">
                           <label for="user_post_code">quantity</label>
                           <input type="text" class="form-control" id="user_post_code" name="zipcode" value="">
                        </div>
                        <div class="form-group" >
                           <label for="user_city">amount</label>
                           <input type="text" class="form-control" id="user_city" name="city" value="">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="user_country">Country</label>
                        <input type="text" class="form-control" id="user_country" placeholder="">
                     </div>
                  </form>


@endsection()