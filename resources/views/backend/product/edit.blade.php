@extends('backend.master')
@section('home')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Manufaturar Update</h3>
  
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         <div class="row">
        <!-- left column -->
        
        <div class="col-md-offset-3 col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border text-center">
              <h3 class="box-title text-primary ">Update Products</h3>
            </div>
            <!-- /.box-header -->
           
            <!-- form start -->
              <form role="form" action="{{ url('product/update') }}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group has-success ">
                  <label for="name">Product Name:</label>
                  <input type="text" class="form-control" id="name" name="productName" value="{{$productById->productName}}">
                  <input type="hidden" value="{{$productById->id}}" class="form-control form-control-lg" id="inputPassword" name="productId">
                </div>
                <div class="form-group has-success ">
                  <label for="name">Product Code:</label>
                  <input type="text" class="form-control" id="name" name="productCode" value="{{$productById->productCode}}">
                  
                </div>
                <div class="form-group has-success">
                  <label for="n">Publication status:</label>
                  <select class="form-control" id="n" name="categoryId">
                    <option selected>--Select Category--</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->categoryName}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group has-success">
                  <label for="n">Product Manufacturar:</label>
                  <select class="form-control" id="n" name="manufacturarId">
                    <option selected>--Select Manufacturar--</option>
                    @foreach($manufacturars as $manufacturar)
                    <option value="{{$manufacturar->id}}">{{$manufacturar->manufacturarName}}</option>
                    @endforeach
                  </select>
                </div>
              <div class="form-group has-success {{ $errors->has('productPrice') ? ' has-error' : 'has-success' }}">
                  <label for="name">Product Price:</label>
                  <input type="text" class="form-control" id="name" name="productPrice" value="{{$productById->productPrice}}">
                  @if ($errors->has('productPrice'))
                        <span class="help-block">
                             <strong>{{ $errors->first('productPrice') }}</strong>
                        </span>
                   @endif
                </div>
                <div class="form-group has-success {{ $errors->has('sproductPrice') ? ' has-error' : 'has-success' }}">
                  <label for="name">Product Sale Price:</label>
                  <input type="text" class="form-control" id="name" name="sproductPrice" value="{{$productById->sproductPrice}}">
                  @if ($errors->has('sproductPrice'))
                        <span class="help-block">
                             <strong>{{ $errors->first('sproductPrice') }}</strong>
                        </span>
                   @endif
                </div>

                <div class="form-group has-success {{ $errors->has('productQuantity') ? ' has-error' : 'has-success' }}">
                  <label for="name">Product Quantity:</label>
                  <input type="text" class="form-control" id="name" name="productQuantity" value="{{$productById->productQuantity}}">
                  @if ($errors->has('productQuantity'))
                        <span class="help-block">
                             <strong>{{ $errors->first('productQuantity') }}</strong>
                        </span>
                   @endif
                </div>
                <div class="form-group has-success {{ $errors->has('productInfo') ? ' has-error' : 'has-success' }}">
                  <label for="name">Product Information:</label>
                  <textarea type="text" class="form-control" id="name" name="productInfo">{{$productById->productInfo}}</textarea>
                  @if ($errors->has('productInfo'))
                        <span class="help-block">
                             <strong>{{ $errors->first('productInfo') }}</strong>
                        </span>
                   @endif
                </div>
                <div class="form-group has-success {{ $errors->has('productImage') ? ' has-error' : 'has-success' }}">
                  <label for="name">Product Image:</label>
                  <input type="file" id="inputPassword" name="productImage" accept="image/*">
                <img src="{{asset($productById->productImage)}}" alt="" width="150" height="150">
                  @if ($errors->has('productImage'))
                        <span class="help-block">
                             <strong>{{ $errors->first('productImage') }}</strong>
                        </span>
                   @endif
                </div>
                
                <div class="form-group has-warning">
                  <label for="exampleInputPassword1">Product Stock status:</label>
                  <select class="form-control" id="exampleInputPassword1" name="stockStatus">
                    <option value="1">In Stock</option>
                    <option value="0">Out of Stock</option>
                  </select>
                </div>

                <div class="form-group has-warning">
                  <label for="exampleInputPassword1">Publication status:</label>
                  <select class="form-control" id="exampleInputPassword1" name="publicationStatus">
                    <option value="1">Publish</option>
                    <option value="0">Unpublish</option>
                  </select>
                </div>
 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
        
     </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
@endsection