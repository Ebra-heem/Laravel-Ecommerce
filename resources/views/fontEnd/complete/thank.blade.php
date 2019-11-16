@extends('fontEnd.master')

@section('title')
Cart
@endsection

@section('mainContent')
<div class="checkout">
    <div class="container">
        <h3>Thank you for Shopping here...</h3>

			<center><b>Your Order No:#Stexim-{{Session::get('orderId')}}</b></center>
        <div class="row">
            <div class="col-lg-3">

            </div>
   


        </div>

    </div>




</div>	
@endsection