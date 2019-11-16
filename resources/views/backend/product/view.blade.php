@extends('backend.master')
@section('home')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Product</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- Main content -->
        @include('sweet::alert')
<div class="box">
  <div class="box-header">
  <center><h3 class="box-title text-success">
    
    </h3></center>
    <!-- Button trigger modal -->

    <center>
      <a class="btn btn-primary" href="{{ url('admin/product/add') }}">Add Product</a>  
    </center>
  </div>
            <div class="box-body">
              <table class="table table-bordered table-hover">
  
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">{{$product->id}}</th>
    </tr>
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">{{$product->productName}}</th>
    </tr> 
    <tr>
      <th scope="col">Product Code</th>
      <th scope="col">{{$product->productCode}}</th>
    </tr> 
     <tr>
      <th scope="col">Category Name</th>
      <th scope="col">{{$product->categoryName}}</th>
    </tr>
     <tr>
      <th scope="col">Manufacturar Name</th>
      <th scope="col">{{$product->manufacturarName}}</th>
    </tr>
     <tr>
      <th scope="col">Product Price</th>
      <th scope="col">{{$product->productPrice}}</th>
    </tr>
     <tr>
      <th scope="col">Product Quantity</th>
      <th scope="col">{{$product->productQuantity}}</th>
    </tr> 
   <tr>
      <th scope="col">Product Price</th>
      <th scope="col">{{$product->stockStatus}}</th>
    </tr>
    
    <tr>
      <th scope="col">Product Information</th>
      <th scope="col">{!! $product->productInfo !!}</th>
    </tr>
     <tr>
      <th scope="col">Product Image</th>
      <th scope="col"><img src="{{asset($product->productImage)}}" alt="{{$product->productName}}" heigth="200" width="200"></th>
    </tr>
     <tr>
      <th scope="col">Product Publication Status</th>
      <th scope="col">{{$product->publicationStatus==1?'Published':'Unpublished'}}</th>
    </tr> 
    
</table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  


                <!-- /.content -->
  </div>
            <!-- /.content-wrapper -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
@endsection