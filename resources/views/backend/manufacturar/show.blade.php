@extends('backend.master')
@section('home')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Manufacturar</h3>

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
      <a class="btn btn-primary" href="{{ url('admin/manufacturar/add') }}">Add Manufacturar</a>  
    </center>
  </div>
<div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Manufacturar Name</th>
                  <th>Publication Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
              @foreach($manufacturars as $manufacturar)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$manufacturar->manufacturarName}} </td>
                  <td>{{$manufacturar->publicationStatus==1?"publish":'Unpublished'}}</td>
                  <td> 
                   <a href="{{url('/manufacturar/edit/'.$manufacturar->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
                     <a href="{{url('/manufacturar/delete/'.$manufacturar->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this?');"><span class="glyphicon glyphicon-trash"></span></a>
                  </td>
                  
                </tr>
              @endforeach
              
               
                </tbody>
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