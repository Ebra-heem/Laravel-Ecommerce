@extends('fontEnd.master')

@section('title')
Home
@endsection

@section('mainContent')

<div class="bann    er-grid">
    <div id="visual">
        <div class="slide-visual">
            <!--             Slide Image Area (1000 x 424) -->
              <?php
            $sliders = DB::table('sliders')->get();
            ?>
            <ul class="slide-group">
                @foreach($sliders as $slider)
                <li><img class="img-responsive" src="{{asset('uploads/slider/'.$slider->image)}}" alt="Dummy Image" width="1000px" height="424px" /></li>
                @endforeach
             
            </ul>
          
            <!-- Slide Description Image Area (316 x 328) -->
            <div class="script-wrap">
                <ul class="script-group">
                    @foreach($sliders as $slider)
                    <li><div class="inner-script"><img class="img-responsive" src="{{asset('uploads/slider/'.$slider->image)}}" alt="{{$slider->image}}" width="316px" height="400px"/></div></li>
                    @endforeach
                    
                </ul>
                <div class="slide-controller">
                    
                    <a href="#" class="btn-prev"><img src="{{asset('fontEnd/images/')}}/btn_prev.png" alt="Prev Slide" /></a>
                    <a href="#" class="btn-play"><img src="{{asset('fontEnd/images/')}}/btn_play.png" /></a>
                    <a href="#" class="btn-pause"><img src="{{asset('fontEnd/images/')}}/btn_pause.png" /></a>
                     <a href="#" class="btn-next"><img src="{{asset('fontEnd/images/')}}/btn_next.png" alt="Next Slide" /></a>
                   
                    
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script type="text/javascript" src="{{asset('fontEnd/js/pignose.layerslider.js')}}"></script>
    <script type="text/javascript">
//<![CDATA[
$(window).load(function () {
    $('#visual').pignoseLayerSlider({
        play: '.btn-play',
        pause: '.btn-pause',
        next: '.btn-next',
        prev: '.btn-prev'
    });
});
//]]>
    </script>

</div>
<!-- //banner -->

<!-- product-nav -->

<div class="product-easy">
    <div class="container">

        <script src="{{asset('fontEnd/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
$(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
    });
});

        </script>
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Products</span></li> 
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>All Products</span></li> 
                    
                </ul>
                <?php 
                $publatestproducts = DB::table('products')->latest()->where('publicationStatus',1)->get();
                ?>				  	 
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                        @foreach($publatestproducts as $publatestproduct)
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset($publatestproduct->productImage)}}" alt="" class="pro-image-front" width="200" height="200">
                                    <img src="{{asset($publatestproduct->productImage)}}" alt="" class="pro-image-back" width="200" height="200">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{url('/product-details/'.$publatestproduct->id)}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="{{url('/product-details/'.$publatestproduct->id)}}">{{$publatestproduct->productName}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">Tk {{$publatestproduct->sproductPrice}}</span>
                                        <del>Tk{{$publatestproduct->productPrice}}</del>
                                    </div>
                                    <a href="{{url('/cart-add/'.$publatestproduct->id)}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
                                </div>
                            </div>
                        </div>
                        @endforeach
                            </div>
                        </div>
        <!-- Another tab -->
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        @foreach($publishedProducts as $publishedProduct)
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset($publishedProduct->productImage)}}" alt="" class="pro-image-front" width="200" height="200">
                                    <img src="{{asset($publishedProduct->productImage)}}" alt="" class="pro-image-back" width="200" height="200">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{url('/product-details/'.$publishedProduct->id)}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="{{url('/product-details/'.$publishedProduct->id)}}">{{$publishedProduct->productName}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">TK {{$publishedProduct->sproductPrice}}</span>
                                        <del>TK{{$publishedProduct->productPrice}} </del>
                                    </div>
                                    <a href="{{url('/cart-add/'.$publishedProduct->id)}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>                                  
                                </div>
                            </div>
                        </div>
                        @endforeach
                            </div>
                        </div>

                        <div class="clearfix"></div>		
                    </div>	
                </div>	
            </div>
        </div>
    </div>
</div>


<!-- content -->

<div class="new_arrivals">
    <div class="container">
        <h3><span>Our </span>Store</h3>
        
        <div class="new_grids">
            <div class="col-md-4 new-gd-left">
                <img src="{{asset('fontEnd/images/')}}/p3.jpg" alt=" " />
                
            </div>
            <div class="col-md-4 new-gd-middle">
                <div class="new-levis">
                    <div class="mid-text">
                        <h4>up to 40% <span>off</span></h4>
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="new-levis">
                    <div class="mid-text">
                        <h4>up to 50% <span>off</span></h4>
                        
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 new-gd-left">
                <img src="{{asset('fontEnd/images/')}}/122.jpg" alt=" " />
                
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //content -->

<!-- content-bottom -->

<div class="content-bottom">
    <div class="col-md-7 content-lgrid">
        <div class="col-sm-6 content-img-left text-center">
            <div class="content-grid-effect slow-zoom vertical">
                <div class="img-box"><img src="{{asset('fontEnd/images/')}}/nut1.png" alt="image" class="img-responsive zoom-img"></div>
                <div class="info-box">
                    <div class="info-content simpleCart_shelfItem">
                        <h4></h4>
                        <span class="separator"></span>
                        <p><span class="item_price"></span></p>
                        <span class="separator"></span>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 content-img-right">
            <h3>Special Offers and<span>Discount On</span> All Products</h3>
        </div>

        <div class="col-sm-6 content-img-right">
            <h3>Buy 1 get 1  free on <span> Branded</span> Products</h3>
        </div>
        <div class="col-sm-6 content-img-left text-center">
            <div class="content-grid-effect slow-zoom vertical">
                <div class="img-box"><img src="{{asset('fontEnd/images/')}}/p2.jpg" alt="image" class="img-responsive zoom-img"></div>
                <div class="info-box">
                    <div class="info-content simpleCart_shelfItem">
                        <h4></h4>
                        <span class="separator"></span>
                        <p><span class="item_price"></span></p>
                        <span class="separator"></span>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-5 content-rgrid text-center">
        <div class="content-grid-effect slow-zoom vertical">
            <div class="img-box"><img src="{{asset('fontEnd/images/')}}/banner4.jpg" alt="image" class="img-responsive zoom-img"></div>
            <div class="info-box">
                <div class="info-content simpleCart_shelfItem">
                    <h4></h4>
                    <span class="separator"></span>
                    <p><span class="item_price"></span></p>
                    <span class="separator"></span>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //content-bottom -->
@endsection()
