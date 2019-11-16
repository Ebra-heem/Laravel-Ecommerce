<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h1>Billing Info</h1>
    <table border="1">
        <tr>
            <th>Customer Name</th>
            <td>{{ $customer->firstName.' '.$customer->lastName }}</td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td>{{ $customer->phoneNumber }}</td>
        </tr>
    </table>
    <h1>Shipping Info</h1>
    <table border="1">
        <tr>
            <th>Customer Name</th>
            <td>{{ $shipping->fullName}}</td>
        </tr>
        <tr>
            <th>Phone Number</th>
            <td>{{ $shipping->phoneNumber }}</td>
        </tr>
    </table>
    <h1>Product Info</h1>
    <table border="1">
        <tr>
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

</body>
</html>