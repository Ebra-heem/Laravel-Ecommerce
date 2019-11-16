@extends('fontEnd.master')

@section('title')
Cart
@endsection

@section('mainContent')
<div class="checkout">
    <div class="container">
        <h3>Shipping Information</h3>

        <div class="col-md-12 well text-center text-success">
              Dear {{ Session::get('customerName') }}. You have to give us product shipping info to complete your valuable order. If your billing info & shipping info are same then just press on save shipping info button.
            </div>
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6">
                <form action="{{url('/checkout/save-shipping')}}" method="post">
                    {{csrf_field()}}
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>Shipping </th>
                                <th>Address</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><label>Full Name:<span class="text-danger">*</span></label></td>
                                <td><input type="text" name="fullName" class="form-control" value="{{$customer->firstName}} {{$customer->lastName}}" ></td>
                            </tr>

                            <tr>
                                <td><label>Email Address:<span class="text-danger">*</span></label></td>
                                <td><input type="text" name="emailAddress" class="form-control" value="{{$customer->emailAddress}}"></td>
                            </tr>

                            <tr>
                                <td><label>Phone Number:<span class="text-danger">*</span></label></td>
                                <td><input type="text" name="phoneNumber" class="form-control" value="{{$customer->phoneNumber}}"></td>
                            </tr>

                            <tr>
                                <td><label>Address:<span class="text-danger">*</span></label></td>
                                <td><textarea name="address" class="form-control">{{$customer->address}}
                                    </textarea></td>
                            </tr>
                            

                        </tbody>


                    </table>
                    &nbsp;
                    <br>
                    <center>
                        <button type="submit" class="btn btn-lg btn-success ">Save Shipping Info</button>
                    </center>   
                </form>

            </div>


        </div>

    </div>




</div>	
@endsection