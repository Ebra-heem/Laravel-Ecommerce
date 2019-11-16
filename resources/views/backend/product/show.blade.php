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
     <h3>Product's  Details are Below.. </h3> 
    </center>
  </div>
<div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Product Code</th>
                  <th>Category Name</th>
                  <th>Manufacturar Name</th>
                  <th>Product Price</th>
                  <th>Product Quantity</th>
                  <th>Publication Status</th>
                  <th>View</th>
                  <th>Edit</th>
                  <th>Del</th>
                </tr>
                </thead>
                <tbody>
               @foreach($products as $product)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$product->productName}}</td>
                  <td>{{$product->productCode}}</td>
                  <td>{{$product->categoryName}}</td>
                  <td>{{$product->manufacturarName}}</td>
                  <td>{{$product->productPrice}}</td>
                  <td>{{$product->stockStatus==1?'In stock':'Out of Stock'}}</td>
                  
                  <td>{{$product->publicationStatus==1?'Published':'Unpublished'}}</td>
                  <td>
                      <a href="{{url('/product/view/'.$product->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" title="Product View"></span></a>
                      
                     
                  </td>
                  <td>
                    <a href="{{url('/product/edit/'.$product->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-edit" title="Product Edit"></span></a>
                  </td>
                  <td>
                     <a href="{{url('/product/delete/'.$product->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this?');" title="Product Delete"><span class="glyphicon glyphicon-trash"></span></a>
                  </td>
                  
                </tr>
              @endforeach
              
               
                </tfoot>
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