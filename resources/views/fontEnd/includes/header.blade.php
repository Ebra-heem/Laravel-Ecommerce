 <div class="header">
            <div class="container">
                <ul>
                    <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Fast Delivery Service</li>
                    <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping  for specific area</li>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:stexim@gmail.com">stexim@gmail.com</a></li>
                </ul>
                <div class="row">
                   <marquee>
                    <h4 style="color: #40FF00;">"17th December our shop will be remain closed."</h4>
                   </marquee> 
                </div>
            </div>
        </div>
        <!-- //header -->
        <!-- header-bot -->
        <div class="header-bot">
            <div class="container">
                <div class="col-md-3 header-left">
                    <h1><a href="{{ url('/') }}"><img src="{{asset('fontEnd/images/')}}/stexim.png"></a></h1>
                </div>
                <table>
                    <form action="{{ url('/search') }}" method="post">
                        {{csrf_field()}}
                    <tr>
                    <div class="col-md-6 header-middle">
                             <input type="text" class="form-control" placeholder="Search your products here.." name="Search">  
                    </div>
                    <div style="margin-top: 13px;">
                        <button type="submit" class="btn btn-sm btn-primary">Search</button>
                    </div>
                    
                    </tr>
                     </form>
                </table>
                
                
                
               
                <div class="col-md-3 header-right footer-bottom">
                    <ul>
                        <li><a class="fb" href="#"></a></li>
                        <li><a class="twi" href="#"></a></li>
                        <li><a class="insta" href="#"></a></li>
                        <li><a class="you" href="#"></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>