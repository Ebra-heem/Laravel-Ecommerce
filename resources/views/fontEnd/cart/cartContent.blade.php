@extends('fontEnd.master')

@section('title')
Cart
@endsection

@section('mainContent')
<div class="page-head">
    <div class="container">
        <h3>Check Out</h3>
    </div>
</div>
<!-- //banner -->
<!-- check out -->
<!-- design of cart page -->

@if(Cart::count()!="0")

<div class="row">
    <div class="cart">
        <div class="col-sm-12">
            <h2>Shopping Basket</h2>
            <div class="row">
                <div class="col-sm-8">

                    @foreach($cartProducts as $pro)
                    <div class="cart-row">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 text-center">
                                <img src="images/thumb1.jpg" class="img-responsive pull-left" />
                                <span class="pull-left top20"><strong>{{$pro->name}}</strong></span></div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <div class="cart-qty"> <span>Qty : </span>
                                    <input type="number"
                                           value="1" class="qty-fill">
                                </div>
                                <div class="cart-remove">Update</div>
                                <a href="{{url('cart-delete')}}/{{$pro->rowId}}"
                                   class="cart-remove">Remove</a>
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3">
                                <h6>Unit Price</h6>
                                <p>Tk{{$pro->price}}</p>
                                <hr/>
                                <h6 class="redtext">Total: INR
                                    {{$pro->price *$pro->qty}}
                                </h6>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="chk-coupon">
                            <label>Coupon Code (if any)</label>
                            <div class="input-group">
                                <input type="text" class="form-control" >
                                <span class="input-group-btn">
                                    <input type="button" class="btn fld-btn" value="Redeem Coupon" />
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-sm-4">
                    <div class="cart-total">
                        <h4>Total Amount</h4>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Sub Total</td>
                                    <td>$ {{Cart::subtotal()}}</td>
                                </tr>
                                <tr>
                                    <td>Tax($)</td>
                                    <td>$ {{$pro->tax()}}</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>$ {{ $orderTotal = $pro->total()}}</td>
                                     
                                   <?php 
                                   Session::put('orderTotal',$orderTotal);
                                   ?>
                                
                                </tr>
                            
                            </tbody>
                        </table>
                        <input type="submit" class="btn update btn-block"
                               value="Continue Shopping">
                        <input type="submit" class="btn check_out btn-block"
                               value="Check Out">
                        <p>{{Session::get('orderTotal');}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@else
<h1> empty</h1>
@endif



@endsection