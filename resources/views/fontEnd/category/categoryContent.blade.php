@extends('fontEnd.master')

@section('title')
    Category
@endsection

@section('mainContent')

<!-- mens -->
<div class="men-wear">
    <div class="container">
        <div class="col-md-4 products-left">
            
          

            <div class="css-treeview">
                <h4>Categories</h4>
                
                <ul class="tree-list-pad">
                    @foreach($categoris as $item)
                      @if($item->childs->count()>0)
                    <li><a href="{{$item->id}}"><strong>{{$item->categoryName}}</strong></a>
                        <ul>
                            <li>
                                @foreach($item->childs as $subMenu)
                                <ul>
                                    <li><a href="{{$subMenu->id}}">--{{$subMenu->categoryName}}</a></li>  
                                </ul>
                                @endforeach
                            </li>
                           
                        </ul>
                    </li>   
                </ul>
                @endif
                 @endforeach
            </div>
              <div class="css-treeview">
                <h4>Shop</h4>
                <div class="new-gd-left">
                <img src="{{asset('fontEnd/images/')}}/122.jpg" alt=" "  />
                
            </div>
                
                <ul class="tree-list-pad">
                  
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="col-md-8 products-right">
            <h5>Category Wise Product</h5>
            <div class="sort-grid">

                
                <div class="clearfix"></div>
            </div>
            
           
         
            @foreach($publishedCategoryProducts as $publishedCategoryProduct)
            
            <div class="col-md-4 product-men no-pad-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item">
                        <img src="{{asset($publishedCategoryProduct->productImage)}}" alt="" class="pro-image-front" width="200" height="200">
                        <img src="{{asset($publishedCategoryProduct->productImage)}}" alt="" class="pro-image-back" width="200" height="200">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="{{url('/product-details/'.$publishedCategoryProduct->id)}}" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>

                    </div>
                    <div class="item-info-product ">
                        <h4><a href="single.html">{{$publishedCategoryProduct->productName}}</a></h4>
                        <div class="info-product-price">
                            <span class="item_price">Tk {{$publishedCategoryProduct->sproductPrice}}</span>
                            <del>Tk {{$publishedCategoryProduct->productPrice}}</del>
                        </div>
                        <a href="{{url('/cart-add/'.$publishedCategoryProduct->id)}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                    </div>
                </div>
            </div>
            @endforeach
           

            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="single-pro">
              
           
            </div>
            <div class="clearfix"></div>
        </div>
        
    </div>
</div>	

@endsection

