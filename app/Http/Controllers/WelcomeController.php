<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class WelcomeController extends Controller
{
    public function index(){
        $publishedProducts=Product::where('publicationStatus',1)->orderBy('productName')->get();
        return view('fontEnd.home.homeContent',['publishedProducts'=>$publishedProducts]);
    }
    public function category($id){
        $publishedCategoryProducts = Product::where('categoryId',$id)
                                     ->where('publicationStatus',1)
                                     ->get();
                                     
        return view('fontEnd.category.categoryContent',['publishedCategoryProducts'=>$publishedCategoryProducts]);
    }
    public function productDetails($id){
        $publishedProductDetails = Product::where('id',$id)->first();
          
        //return $publishedProductDetails;
        return view('fontEnd.product.productContent',['publishedProductDetails'=>$publishedProductDetails]);
    }
    public function contactUs(){
        return view('fontEnd.contact.contactContent');
    }
    public function search(Request $request)
    {
       $searchKey = $request->Search;
      // return $searchKey;
       //$sproducts = Product::search($searchKey)->get();
      $sproducts = Product::where('productName','LIKE','%'.$searchKey.'%')->orWhere('productInfo','LIKE','%'.$searchKey.'%')->get();
     // return $sproducts;
    if(count($sproducts) > 0){
      return view('fontEnd.search.search',compact('sproducts'))->withDetails($sproducts)->withQuery ( $searchKey );
    }    
    else{
      return view ('fontEnd.search.search')->withMessage('No Details found. Try to search again !');
    } 
       //return view('fontEnd.search.search',compact('sproducts'));
    }
    public function searchget(Request $request)
    {
       $searchKey = $request->Search;
      // return $searchKey;
        $sproducts = Product::where('productName','LIKE','%'.$searchKey.'%')->orWhere('productInfo','LIKE','%'.$searchKey.'%')->get();
       if(count($sproducts) > 0){
      return view('fontEnd.search.search',compact('sproducts'))->withDetails($sproducts)->withQuery ( $searchKey );
    }    
    else{
      return view ('fontEnd.search.search')->with('Message','No Details found. Try to search again !');
    }
    }
    
}
