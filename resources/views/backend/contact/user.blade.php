@extends('backend.master')
@section('home')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"> Person Information</h3>

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
    <a class="btn btn-lg btn-primary" href="{{ route('uadd') }}">Add User</a>
    </h3></center>
    <!-- Button trigger modal -->
  </div>
<div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
              @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}} </td>
                  <td>{{$user->email}} </td>
                  
                  
                  <td> 
                   
                 <form action="" method="POST">
                    {{csrf_field()}}
                      {{ method_field('DELETE') }}
                    <input type="submit" value="&#xf014;" title="Delete" class="btn btn-lg btn-danger fa fa-trash-o" onclick='return confirm("Are you sure ?")'>
                      </form>
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
      
      </div>
      <!-- /.box -->
@endsection