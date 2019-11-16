@extends('backend.master')
@section('home')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Contact Person Information</h3>

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
  </div>
<div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Message</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
              @foreach($contacts as $contact)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$contact->name}} </td>
                  <td>{{$contact->phone}} </td>
                  <td>{{$contact->message}} </td>
                  
                  <td> 
                   
                 <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
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