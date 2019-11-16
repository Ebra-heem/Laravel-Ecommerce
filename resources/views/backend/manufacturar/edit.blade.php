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
              <h3 class="box-title text-primary ">Update Manufaturar</h3>
            </div>
            <!-- /.box-header -->
           
            <!-- form start -->
            <form role="form" action="{{ url('manufacturar/update') }}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group has-success">
                  <label for="name">Manufacturar Name:</label>
                  <input type="text" class="form-control" id="name" name="manufacturarName" value="{{$manufacturarById->manufacturarName}}">
                 <input type="hidden" class="form-control form-control-lg" id="name" value="{{$manufacturarById->id}}" name="manufacturarId">
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
                <button type="submit" class="btn btn-primary">Update</button>
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