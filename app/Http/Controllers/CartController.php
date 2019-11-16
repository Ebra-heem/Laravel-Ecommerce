<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
class CartController extends Controller {

    public function addToCart($id){
       
        $productById= Product::find($id);
        Cart::add([
            'id'=>$productById->id,
            'name'=>$productById->productName,
            'price'=>$productById->sproductPrice,
            'qty'=>1,
        ]);
        return redirect('/cart-show');
    }
    public function showCart() {
        $cartProducts = Cart::content();
        return view('fontEnd.cart.cartContent1',['cartProducts'=>$cartProducts]);
    }
    public function updateCart(Request $request){
        $qty = $request->newQty;
        $rowId = $request->rowID;
       
        Cart::update($rowId,$qty);
        
        echo 'Cart updated Successfully';
    }

    public function deleteToCart($rowId) {
       Cart::remove($rowId);
        return redirect('/cart-show');
    }

}
