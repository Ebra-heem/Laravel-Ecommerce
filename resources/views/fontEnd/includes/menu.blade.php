<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>

                        <li class="dropdown menu__item">
                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Categories <span class="caret"></span></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">
                               

                                @foreach($categoris as $item)
                                 @if($item->childs->count()>0)
                                    <div class="col-sm-3 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="{{url('/category-view/'.$item->id)}}"><h5><b>{{$item->categoryName}}</h5></b></a>
                                            </li>
                                            @foreach($item->childs as $subMenu)
                                            <ul>
                                            <li><a href="{{url('/category-view/'.$subMenu->id)}}">--{{$subMenu->categoryName}}</a></li>
                                            </ul>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                 @endforeach

                                    
                                
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                            
                            <li class="menu__item"><a class="menu__link" href="{{url('/contactus')}}">contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>	
        </div>
        <div class="top_nav_right">
            <div class="cart box_1">
                <a href="{{url('/cart-show')}}">
                    <h3> <div class="total">
                            <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                            <span class="simple  Cart_total"></span> ({{Cart::content()->count()}}items)</div>

                    </h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

            </div>	
        </div>
        <div class="clearfix"></div>
    </div>
</div>