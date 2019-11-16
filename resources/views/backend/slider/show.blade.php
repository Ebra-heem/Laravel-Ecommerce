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
    <!-- Main content -->
    @include('sweet::alert')
    <div class="box">
      <div class="box-header">
        <center><h3 class="box-title text-success">

        </h3></center>
        <!-- Button trigger modal -->

        <center>
          <a class="btn btn-primary" href="{{ route('slider.create') }}">Add Slider</a>  
        </center>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Sub Title</th>
              <th>Image</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           @foreach($sliders as $key=>$slider)
           <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $slider->title }}</td>
            <td>{{ $slider->sub_title }}</td>
            <td><img  class="img-responsive img-thumbnail" src="{{asset('uploads/slider/'.$slider->image)}}" alt="{{$slider->image}}" heigth="100px" width="100px"></td>
            <td>{{ $slider->created_at }}</td>
            <td>{{ $slider->updated_at }}</td>
            <td>
              <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>

              <form id="delete-form-{{ $slider->id }}" action="{{ route('slider.destroy',$slider->id) }}" style="display: none;" method="POST">
               {{csrf_field()}}
                {{method_field('DELETE')}}
              </form>
              <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                event.preventDefault();
                document.getElementById('delete-form-{{ $slider->id }}').submit();
              }else {
                event.preventDefault();
              }"><i class="material-icons">delete</i></button>
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