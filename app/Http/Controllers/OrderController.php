<?php

namespace App\Http\Controllers;


use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Shipping;
use Illuminate\Http\Request;
use DB;
use PDF;

class OrderController extends Controller
{
      public function __construct() {
       $this->middleware('auth');
   }

   public function manageOrderInfo() {
          $orders = DB::table('orders')
                        ->join('customers', 'orders.customerId', '=', 'customers.id')
                        ->join('payments', 'orders.id', '=', 'payments.orderId')
                        ->select('orders.*', 'customers.firstName', 'customers.lastName', 'payments.paymentType', 'payments.paymentStatus')
                        ->latest()
                        ->get();
        return view('backend.order.manage-order', ['orders'=>$orders]);
    }

    public function viewOrderDetail($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customerId);
        $shipping = Shipping::find($order->shippingId);

        $payment = Payment::where('orderId', $order->id)->first();


        $orderDetails = OrderDetail::where('orderId', $order->id)->get();

        return view('backend.order.view-order', [
            'order' =>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'payment'=>$payment,
            'orderDetails'=>$orderDetails
        ]);
    }
    public function viewOrderInvoice($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customerId);
        $shipping = Shipping::find($order->shippingId);

//        $payment = Payment::where('order_id', $order->id)->first();
        $orderDetails = OrderDetail::where('orderId', $order->id)->get();

        return view('backend.order.view-order-invoice', [
            'order' =>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'orderDetails'=>$orderDetails
        ]);
    }
    public function downloadOrderInvoice($id) {
        
        $order = Order::find($id);
        $customer = Customer::find($order->customerId);
        $shipping = Shipping::find($order->shippingId);
        $orderDetails = OrderDetail::where('orderId', $order->id)->get();	
        $pdf=PDF::loadView('backend.order.test',[
            'order' =>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'orderDetails'=>$orderDetails
        ]);
        return $pdf->download('invoice.pdf');
       // return $pdf->stream('backend.order.download-invoice.pdf');
    }
     public function editOrderDetail($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customerId);
        $shipping = Shipping::find($order->shippingId);

      
        $orderDetails = OrderDetail::where('orderId', $order->id)->get();
         $payment = Payment::where('orderId', $order->id)->first();
        return view('backend.order.edit-order', [
            'order' =>$order,
            'payment' =>$payment,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'orderDetails'=>$orderDetails
        ]);
    }
    public function updateOrderDetail(Request $request)
    {
        $orderStatus = Order::find($request->order_id);
        $orderStatus->orderStatus = $request->orderStatus;
        $orderStatus->save();
        $paymentStatus = DB::table('payments')
                         ->where('orderId',$request->order_id)
                         ->update(['paymentStatus' => $request->paymentStatus]);
        
       return redirect()->route('manage-order');
        
    }
    public function orderDelete($id)
    {
        $order = Order::find($id);
        $order->delete();
        $payment = Payment::where('orderId', $id)->first();
        $payment->delete();
        
        return redirect()->route('manage-order');
    }
    
    
}
