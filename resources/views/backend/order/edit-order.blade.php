@extends('backend.master')
@section('title')
View order
@endsection

@section('home')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Order Details info For This order</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Order No</th>
                            <td>#STEXIM-{{ $order->id }}</td>
                        </tr>
                        <tr>
                            <th>Order Total</th>
                            <td>{{ $order->orderTotal  }}</td>
                        </tr>
                        <tr>
                            <th>Order Status</th>
                            <td>{{ $order->orderStatus  }}</td>
                        </tr>
                        <tr>
                            <th>Order Date</th>
                            <td>{{ $order->created_at  }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Payment info For This order</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Payment Type</th>
                            <td>{{ $payment->paymentType }}</td>
                        </tr>
                        <tr>
                            <th>Payment status</th>
                            <td>{{ $payment->paymentStatus }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
            <form role="form" action="{{ route('update-order-detail') }}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
               
                <div class="form-group has-warning">
                  <label for="id">Order status:</label>   
                  <select class="form-control" id="id" name="orderStatus">
                    <option value="Pending">Pending</option>
                    <option value="Complete">Complete</option>
                  </select>
                  <input type="hidden" name="order_id" value="{{$order->id}}">
                  
                </div>
                <div class="form-group has-warning">
                  <label for="id">Payment Status:</label>
                  <select class="form-control" id="id" name="paymentStatus">
                    <option value="Pending">Pending</option>
                    <option value="Complete">Complete</option>
                  </select>
                </div>
 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
                </div>
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Customer info For This order</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Customer Name</th>
                            <td>{{ $customer->firstName.' '.$customer->lastName  }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $customer->phoneNumber  }}</td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td>{{ $customer->emailAddress  }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $customer->address  }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Shipping info For This order</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Full Name</th>
                            <td>{{ $shipping->fullName }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $shipping->phoneNumber }}</td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td>{{ $shipping->emailAddress }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $shipping->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="xyz">Product Info For this order</h3>
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>Sl No</th>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                        </tr>
                        @php($i=1)
                            @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $orderDetail->productId }}</td>
                                <td>{{ $orderDetail->productName }}</td>
                                <td>TK. {{ $orderDetail->productPrice }}</td>
                                <td>{{ $orderDetail->productQuantity }}</td>
                                <td>TK. {{ $orderDetail->productPrice*$orderDetail->productQuantity }}</td>
                            </tr>
                             @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection