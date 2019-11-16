 <div class="footer">
            <div class="container">
                <div class="col-md-3 footer-left">
                    <h2><a href="index.html"><img src="{{asset('public/fontEnd/images/')}}/logo3.jpg" alt=" " /></a></h2>
                   
                </div>
                <div class="col-md-9 footer-right">
                    <div class="col-sm-6 newsleft">
                        
                    </div>
                    <div class="col-sm-6 newsright">
                        
                    </div>
                    <div class="clearfix"></div>
                    <?php 
                    $manufacturars = App\Manufacturar::all();
                    ?>
                    <div class="sign-grds">
                        <div class="col-md-4 sign-gd">
                            <h4>Brand</h4>
                            <ul>
                                @foreach($manufacturars as $manufacturar)
                                <li><a href="#">{{$manufacturar->manufacturarName}}</a></li> 
                                @endforeach   
                            </ul>
                        </div>

                        <div class="col-md-4 sign-gd-two">
                            <h4>Store Information</h4>
                            <ul>
                                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 99 Chawkbazar, Teripotti,<span>Cumilla.</span></li>
                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
                            </ul>
                        </div>
                        <div class="col-md-4 sign-gd flickr-post">
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <p class="copy-right">&copy 2018-{{Carbon\carbon::now()->year}} All rights reserved  | <b>Developed by<a href="https:www.ebrahimkholil.com/">Md Ebrahim Kholil</a></b></p>
            </div>
        </div>
        <!-- //footer -->
       