@extends('backend.master')
@section('home')
<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
            
  @include('sweet::alert')
  <?php $totalproduct = DB::table('products')->count();?>
            <div class="info-box-content">
              <span class="info-box-text">Products</span>
              <span class="info-box-number">{{$totalproduct}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-files-o"></i></span>
               <?php $totalcategory = DB::table('categories')->count();?>
            <div class="info-box-content">
              <span class="info-box-text">Category</span>
              <span class="info-box-number">{{$totalcategory}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
            <?php $totalorder = DB::table('orders')->count();?>
            <div class="info-box-content">
              <span class="info-box-text">Total Orders</span>
              <span class="info-box-number">{{$totalorder}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-files-o"></i></span>
        <?php $total = DB::table('orders')->where('orderStatus','Complete')->count();?>
            <div class="info-box-content">
              <span class="info-box-text">Complete Order</span>
              <span class="info-box-number">{{$total}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


                <!-- Default box -->
          <div class="box">

            <div class="row">
              <div class="col-md-6">

                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <p class="navbar-brand" >
                          <i class="glyphicon glyphicon-th"></i>
                          Basic Information about STexim Shop
                        </p>
                      </div>
                    </div>
                  </nav>
                <center>
                  <img src="{{asset('backend/stexim.png')}}" alt="logo">
                </center>
                <h4 class="text-center text-success mt-5"> Shah Trading Export Import Online</h4>
                <hr>
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th scope="row">Site Url</th>
                      <td>www.stexim.online</td>   
                    </tr>
                    <tr>
                      <th scope="row">Application</th>
                      <td>Online Store Management System</td>   
                    </tr>
                    <tr>
                      <th scope="row">Shop Type</th>
                      <td>Retailer and Wholesaler</td>
                   </tr>
                   <tr>
                      <th scope="row">Contact</th>
                      <td>081-73920, 081-73930</td>
                   </tr>
                   <tr>
                      <th scope="row">Email</th>
                      <td>info@stexim.online</td>
                   </tr>
                  
                   <tr>
                      <th scope="row">Location</th>
                      <td>Cumilla, Chakbazar</td>
                   </tr>
  
                  </tbody>
                </table>
              </div>
              <div class="col-md-6">
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <p class="navbar-brand " >
                          <i class="glyphicon glyphicon-signal"></i>
                           Shop Owner Information
                        </p>
                      </div>
                    </div>
                  </nav>
                <p class="text-center ">Shop Established</p>
                  

                <table class="table table-striped">
                  <thead>
                    <tr>
                      
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"> </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"></th>
                      <td></td>
                      <td></td>
                      
                    </tr>
                      <tr>
                      <th scope="row"></th>
                      <td></td>
                      <td></td>
                      
                    </tr>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.box -->
      @endsection
