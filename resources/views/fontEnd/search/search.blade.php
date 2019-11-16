@extends('fontEnd.master')

@section('title')
    Category
@endsection

@section('mainContent')

<!-- mens -->
<div class="men-wear">
    <div class="container">
       
        <div class="col-md-12 products-right">
            <h5>Search Result</h5>
            <div class="sort-grid">
               
                <div class="clearfix"></div>
            </div>
            
           
         @if(isset($sproducts))
            @foreach($sproducts as $product)
            
            <div class="col-md-3 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{asset($product->productImage)}}" alt="" class="pro-image-front" width="200" height="200">
                        <img src="{{asset($product->productImage)}}" alt="" class="pro-image-back" width="200" height="200">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="{{url('/product-details/'.$product->id)}}" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">{{$product->productName}}</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">Tk{{$product->sproductPrice}}</span>
                            <del>Tk{{$product->productPrice}}</del>
                        </div>
                        <a href="{{url('/cart-add/'.$product->id)}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                  
                    </div>
                </div>
            </div>
            @endforeach
        @else
        <div class="single-pro">
              
           <p>No Details found. Try to search again !</p>
        </div>
        @endif

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

        
            <div class="clearfix"></div>
        </div>
    </div>
</div>  

@endsection

