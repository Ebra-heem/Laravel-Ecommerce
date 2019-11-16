@extends('fontEnd.master')

@section('title')
Cart
@endsection

@section('mainContent')

 <script type="text/javascript">
            $(document).ready(function(){
            $("#CartMsg").hide();
            @foreach($cartProducts as $pro)
            $("#upCart{{$pro->id}}").on('keyup change',function(){
                var newQty = $("#upCart{{$pro->id}}").val();
                var rowID = $("#rowID{{$pro->id}}").val();
                
                $.ajax({
                    url:'{{url('/cart-update')}}',
                    type:'get',
                    data:'rowID='+ rowID +'&newQty='+ newQty, 
                    
                    success:function(response){
                    $("#upCartMsg").on('click',function(){
                        $("#CartMsg").show();
                    });
                    
                    console.log(response);
                    $("#CartMsg").html(response);
                    }
                });
            });
            @endforeach
            });
            </script>
<div class="checkout">
    <div class="container">
        <h3>My Shopping Bag</h3>
   
        @if(Cart::count()!="0")
        <p id="CartMsg" class="alert alert-success"></p>
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <?php $total=0;?>
                
                @foreach($cartProducts as $pro)
                <tr class="rem1">
                    <td class="invert-closeb">
                        <div class="rem">
                            <a href="{{url('cart-delete')}}/{{$pro->rowId}}"
                                   class="cart-remove close1"></a>
                            
                        </div>
                      
                    </td>
                    <td class="invert">{{$pro->name}}</td>
                    <td class="invert">৳{{$pro->price}}</td>
                    <td class="invert">
                        <input type="hidden"  class="entry" size="5" id="rowID{{$pro->id}}" value="{{$pro->rowId}}"/>
                                                
                                
                        <input type="number" name="newQty" class="entry" size="5" min="1" id="upCart{{$pro->id}}" value="{{$pro->qty}}"/>
                          
                        
                    </td>
                    <td class="invert">৳{{$itemTotal=$pro->price*$pro->qty}}</td>
                    <?php $total=$total+$itemTotal?>
                </tr>
        @endforeach
          
            </table>

        </div>
        <hr>
        <center>
            <a href="{{url('/cart-show')}}" class="btn btn-danger" id="upCartMsg">Update Now</a>
        </center>
        <hr>
           
        <div class="checkout-left">	

            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                <a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
                  <a href="{{url('/checkout')}}">Buy Now</a>
            </div>
          <p class="text-danger">NB:-"If your product quantity is more than 50kg you must pay shipping cost"</p>
            <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                <h4>Shopping basket</h4>
                <ul>
                    <li>Sub Total <i>-</i> <span>৳ {{Cart::subtotal()}}</span></li>
                    <li>Tax (%) <i>-</i> <span>৳ 0</span></li>
                    
                    <li>Total <i>-</i> <span class="fa-bdt">৳ <?php echo $total ?></span></li>
                    <?php 
                              Session::put('orderTotal',$total);
                            ?>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    @else
    <h1 class="text-center text-warning"> Your Cart is Empty</h1>
    <center>
    <a href="{{url('/')}}" class="glyphicon glyphicon-menu-left btn btn-primary"> Back To Shopping</a>
    </center>
                  
 
<br>
@endif
</div>	



@endsection