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
        <!-- Main content -->
        @include('sweet::alert')
<div class="box">
  <div class="box-header">
  <center><h3 class="box-title text-success">
    
    </h3></center>
    <!-- Button trigger modal -->

    <center>
      <a class="btn btn-primary" href="{{ url('admin/category/add') }}">Add Category</a>  
    </center>
  </div>
<div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Category ID</th>
                  <th>Category Name</th>
                  <th>Parent ID</th>
                  <th>Publication Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
              @foreach($categoris as $category)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$category->id}} </td>
                  <td>{{$category->categoryName}} </td>
                  <td>{{$category->parent_id}} </td>
                  <td>{{$category->publicationStatus==1?"publish":'Unpublished'}}</td>
                  <td> 
                   <a href="{{url('/category/edit/'.$category->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
                     <a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this?');"><span class="glyphicon glyphicon-trash"></span></a>
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