@extends('backend.master')
@section('home')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="xyz">{{ Session::get('message') }}</h3>
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr class="bg-primary"> 
                            <th>Sl No</th>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Order Total</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Action</th>     
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>#STEXIM-{{ $order->id}}</td>
                                <td>{{ $order->firstName.' '.$order->lastName }}</td>
                                <td>{{ $order->orderTotal }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td><?php
                                    if($order->orderStatus =='pending'||$order->orderStatus =='Pending'){
                                     echo '<span class="label label-danger">Pending</span>';
                                    }else if($order->orderStatus == 'Complete'){
                                    echo '<span class="label label-success">Complete</span>';
                                    }
                                ?></td>
                                <td>{{ $order->paymentType }}</td>
                                <td>
                                <?php
                                    if($order->paymentStatus =='pending'||$order->paymentStatus =='Pending'){
                                     echo '<span class="label label-danger">Pending</span>';
                                    }else if($order->paymentStatus == 'Complete'){
                                    echo '<span class="label label-success">Complete</span>';
                                    }
                                ?>
                                </td>
                                <td>
                                    <a href="{{ route('view-order-detail', ['id'=>$order->id]) }}" class="btn btn-info btn-xs" title="View Order Details">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>

                                    <a href="{{ route('view-order-invoice', ['id'=>$order->id]) }}" class="btn btn-warning btn-xs" title="View Order Invoice">
                                        <span class="glyphicon glyphicon-zoom-out"></span>
                                    </a>
                                    <a href="{{ route('download-order-invoice', ['id'=>$order->id]) }}" class="btn btn-primary btn-xs" title="Download Order Invoice">
                                        <span class="glyphicon glyphicon-download"></span>
                                    </a>
                                    <a href="{{ route('edit-order-detail', ['id'=>$order->id]) }}" class="btn btn-success btn-xs" title="Edit Order">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ route('delete-order', ['id'=>$order->id]) }}" class="btn btn-danger btn-xs" title="Delete Order" onclick="return confirm('Are you sure want to delete this?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection