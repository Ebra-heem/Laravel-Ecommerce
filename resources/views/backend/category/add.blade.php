@extends('backend.master')
@section('home')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Category</h3>
  
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
              <h3 class="box-title text-primary ">Add Category</h3>
            </div>
            <!-- /.box-header -->
            
            <!-- form start -->
            <form role="form" action="{{ url('category/save') }}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group has-success {{ $errors->has('categoryName') ? ' has-error' : 'has-success' }}">
                  <label for="name">Category Name:</label>
                  <input type="text" class="form-control" id="name" name="categoryName" placeholder="Enter Category name">
                  @if ($errors->has('categoryName'))
                        <span class="help-block">
                             <strong>{{ $errors->first('categoryName') }}</strong>
                        </span>
                   @endif
                </div>
             <?php $level = App\Category::where('parent_id',0)->get(); 
             ?>
                <div class="form-group has-success">
                  <label for="name">Category Level:</label>
                  <select name="parent_id" class="form-control">
                    <option value="0">Main Category</option>
                    @foreach($level as $val)
                        <option value="{{$val->id}}">{{$val->categoryName}}</option>
                    @endforeach
                  </select>
                 
                </div>
                 <div class="form-group has-success {{ $errors->has('categoryDescription') ? ' has-error' : 'has-success' }}">
                  <label for="name">Category Description:</label>
                  <textarea type="text" class="form-control" id="name" name="categoryDescription"></textarea>
                  @if ($errors->has('categoryDescription'))
                        <span class="help-block">
                             <strong>{{ $errors->first('categoryDescription') }}</strong>
                        </span>
                   @endif
                </div>
                <div class="form-group has-warning">
                  <label for="exampleInputPassword1">Publication status:</label>
         
                  <select class="form-control" id="exampleInputPassword1" name="publicationStatus">
                    <option selected>--Select Publication Status--</option>
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