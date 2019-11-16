@extends('fontEnd.master')
@section('title')
Contact Us
@endsection

@section('mainContent')

<!-- banner -->
<div class="page-head">
    <div class="container">
        <h3>Contact</h3>
    </div>
</div>
<!-- //banner -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="contact-grids">
            <div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
                <div class="contact-grid1">
                    <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                    <h4>Address</h4>
                    <p>Address : 99 Chawkbazar, Teripotti, <span>Cumilla.</span></p>
                </div>
            </div>
            <div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
                <div class="contact-grid2">
                    <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                    <h4>Call Us</h4>
                    <p>+1234 758 839<span>+1273 748 730</span></p>
                </div>
            </div>
            <div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
                <div class="contact-grid3">
                    <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                    <h4>Email</h4>
                    <p><a href="mailto:info@example.com">info@example1.com</a><span><a href="mailto:info@example.com">info@example2.com</a></span></p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="map wow fadeInDown animated" data-wow-delay=".5s">
           
        </div>
        <h3 class="tittle">Contact Form</h3>
        @if(Session::has('message'))
        <center><p class="alert alert-success">{{Session::get('message')}}</p></center>
        @endif
        <form action="{{  route('contact.store') }} " method="POST">
            {{csrf_field()}}
            <div class="contact-form2">
                <input type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'Name';
                        }" required="">
                <input type="text" value="Phone" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'Phone';}" required="">
                <textarea type="text" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {
                            this.value = 'Message...';}" required="">Message...</textarea>
                <input type="submit" value="Submit" >
            </div>
        </form>
    </div>
</div>

<!-- //contact -->

@endsection

