@extends('fontEnd.master')

@section('title')
Cart
@endsection

@section('mainContent')
<div class="checkout">
    <div class="container">
        <h3>Payment Information</h3>


        <div class="row">
            <div class="col-lg-3">

            </div>
             
            <div class="col-lg-6">
                <form action="{{url('/checkout/save-order')}}" method="post">
                    {{csrf_field()}}
                    <table class="timetable_sub">
                        <thead>

                        </thead>
                        <tbody>
                <div class="form-group has-success {{ $errors->has('payment_type') ? ' has-error' : 'has-success' }}">
                        <input type="radio" name="payment_type" value="Cash"> Cash on Delivery<br>
                        @if ($errors->has('payment_type'))
                        <span class="help-block">
                             <strong>{{ $errors->first('payment_type') }}</strong>
                        </span>
                   @endif
               </div>
            <strong class="has-warning">{{ Session::get('msg') }}</strong>

                        </tbody>
                    </table>
                    &nbsp;
                    <br>
                    <center>
                        <button type="submit" class="btn btn-lg btn-success ">Confirm Order</button>
                    </center>   
                </form>

            </div>


        </div>

    </div>




</div>	
@endsection