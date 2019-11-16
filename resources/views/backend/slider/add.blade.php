@extends('backend.master')
@section('home')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Slider</h3>
  
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
              <h3 class="box-title text-primary ">Add Slider</h3>
            </div>
            <!-- /.box-header -->
            
            <!-- form start -->
            <form role="form" action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group has-success {{ $errors->has('title') ? ' has-error' : 'has-success' }}">
                  <label for="name">Title:</label>
                  <input type="text" class="form-control" id="name" name="title" placeholder="Image Title">
                  @if ($errors->has('title'))
                        <span class="help-block">
                             <strong>{{ $errors->first('title') }}</strong>
                        </span>
                   @endif
                </div>
            
                 
                </div>
                 <div class="form-group has-success {{ $errors->has('sub_title') ? ' has-error' : 'has-success' }}">
                  <label for="name">Subtitle:</label>
                  <input type="text" class="form-control" id="name" name="sub_title" placeholder="Image Sub title">
                  @if ($errors->has('sub_title'))
                        <span class="help-block">
                             <strong>{{ $errors->first('sub_title') }}</strong>
                        </span>
                   @endif
                </div>
                <div class="form-group  {{ $errors->has('image') ? ' has-error' : 'has-success' }}">
                  <label for="name">Slider Image :<small class="text-danger">1280 x 500 px</small></label>
                     <input type="file" id="name" name="image">
                     @if ($errors->has('image'))
                        <span class="help-block">
                             <strong>{{ $errors->first('image') }}</strong>
                        </span>
                   @endif
                </div>
 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('slider.index') }}"  class="btn btn-primary">Back</a>
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