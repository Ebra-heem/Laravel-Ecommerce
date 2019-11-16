@extends('fontEnd.master')

@section('title')
Cart
@endsection

@section('mainContent')
<div class="checkout">
    <div class="container">
        <h3>Customer Information</h3>


        <div class="row">
            <div class="col-lg-6">
                <form action="{{url('/checkout/sign-up')}}" method="post">
                    {{csrf_field()}}
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>Customer </th>
                                <th>Registration</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><label>First Name:<span class="text-danger">*</span></label></td>
                                <td><input type="text" name="firstName" class="form-control" placeholder="First Name"></td>
                            </tr>
                            <tr>
                                <td><label>Last Name:<span class="text-danger">*</span></label></td>
                                <td><input type="text" name="lastName" class="form-control" placeholder="Last Name"></td>
                            </tr>
                            <tr>
                                <td><label>Email Address:<span class="text-danger">*</span></label></td>
                                <td><input type="text" name="emailAddress" class="form-control" placeholder="Email Address"></td>
                            </tr>
                            <tr>
                                <td><label>Password:<span class="text-danger">*</span></label></td>
                                <td><input type="password" name="password" class="form-control" placeholder="Password"></td>
                            </tr>
                            <tr>
                                <td><label>Phone Number:<span class="text-danger">*</span></label></td>
                                <td><input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number"></td>
                            </tr>

                            <tr>
                                <td><label>Address:<span class="text-danger">*</span></label></td>
                                <td><textarea name="address" class="form-control">

                                    </textarea></td>
                            </tr>
                            

                        </tbody>


                    </table>
                    &nbsp;
                    <br>
                    <center>
                        <button type="submit" class="btn btn-lg btn-success ">Register</button>
                    </center>   
                </form>

            </div>

            <div class="col-lg-6">
                <form action="{{url('/checkout/login')}}" method="post">
                    {{csrf_field()}}
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Login</th> 
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><label>Email Address:</label></td>
                                <td><input type="text" name="emailAddress" class="form-control" placeholder="Email Address"></td>
                            </tr>
                            <tr>
                                <td><label>Password:</label></td>
                                <td><input type="password" name="password" class="form-control" placeholder="Password"></td>
                            </tr>

                        </tbody>

                    </table>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-lg btn-success ">Login</button>
                    </center>  


                </form>

            </div>
        </div>

    </div>




</div>	
@endsection