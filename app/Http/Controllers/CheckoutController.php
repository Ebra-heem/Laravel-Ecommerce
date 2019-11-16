<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Shipping;
use App\Order;
use App\OrderDetail;
use App\Payment;
use Gloudemans\Shoppingcart\Facades\Cart;
use DB;
use Session;
use Mail;
//use App\Mail\SendMail;
use App\Mail\SteximMail;

session_start();

class CheckoutController extends Controller {

    public function index() {
        return view('fontEnd.customer.customerContent');
    }

    public function customerRegistration(Request $request) {

        $customer = new Customer();
        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->emailAddress = $request->emailAddress;
        $customer->password = md5($request->password);
        $customer->phoneNumber = $request->phoneNumber;
        $customer->address = $request->address;
        $customer->save();
        $customerId = $customer->id;
        Session::put('customerId', $customerId);
        Session::put('emailAddress', $customer->emailAddress);
        Session::put('customerName',$customer->firstName.' '.$customer->lastName);
        return redirect('checkout/shipping');
    }

    public function customerLogin(Request $request) {

        $email = $request->emailAddress;
        $password = md5($request->password);

        $customer = DB::table('customers')
                ->where('emailAddress', $email)
                ->where('password', $password)
                ->first();
        


        if ($customer) {
            Session::put('emailAddress', $customer->emailAddress);
           // Session::put('password', $customer);
            Session::put('customerId', $customer->id);
            Session::put('customerName',$customer->firstName.' '.$customer->lastName);
            return redirect('checkout/shipping');
        } else {
            return view('fontEnd.customer.customerContent');
        }
    }

    public function showShippingForm() {
         $customer = Customer::find(Session::get('customerId'));
         if(Session::has('customerId')){
            return view('fontEnd.shipping.shippingContent',['customer'=>$customer]);
        }else{
            return redirect('/');
        }
       // return view('fontEnd.shipping.shippingContent',['customer'=>$customer]);
    }

    public function saveShippingInfo(Request $request) {
        $shipping = new Shipping();
        $shipping->fullName = $request->fullName;
        $shipping->emailAddress = $request->emailAddress;
        $shipping->address = $request->address;
        $shipping->phoneNumber = $request->phoneNumber;
        $shipping->save();
        $shippingId = $shipping->id;
        Session::put('shippingId', $shippingId);
        return redirect('/checkout/payment');
    }
    public function showPaymentForm(){
      //  $shippingid = Shipping::find(Session::get('shippingId'));
         if(Session::has('shippingId')){
            
            return view('fontEnd.payment.paymentContent');
        }else{
            return redirect('/');
        }
       // return view('fontEnd.payment.paymentContent');
    }
    
    public function customerHome(Request $request) {
        $this->validate($request, [
            'payment_type' => 'required',
            
        ]);
        $paymentType = $request->payment_type;
        if($paymentType == 'Cash') {
            $order = new Order();
            $order->customerId = Session::get('customerId');
            $order->shippingId = Session::get('shippingId');
            $order->orderTotal = Session::get('orderTotal');
            //return $order;
            $order->save();
            Session::put('orderId',$order->id);

            $payment = new Payment();
            $payment->orderId = $order->id;
            $payment->paymentType = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail = new OrderDetail();
                $orderDetail->orderId = $order->id;
                $orderDetail->productId = $cartProduct->id;
                $orderDetail->productName = $cartProduct->name;
                $orderDetail->productPrice = $cartProduct->price;
                $orderDetail->productQuantity = $cartProduct->qty;
                $orderDetail->save();
            }

          //  Mail::send(new SendMail());
            Mail::send(new SteximMail());

            Cart::destroy();

            return redirect('/complete/order');

        } else if($paymentType == 'Paypal') {

        } else if($paymentType == 'Bkash') {

        }else{
           return redirect('/checkout/payment');
        }


    }
    
    public function completeOrder(){
        return view('fontEnd.complete.thank');
    }

    

}
