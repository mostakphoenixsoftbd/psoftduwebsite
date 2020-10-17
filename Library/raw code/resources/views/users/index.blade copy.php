@extends('layouts.adminlayout')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/datatable/responsive.bootstrap4.min.css') }}">
   
@endpush

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Title</h3>

      <div class="card-tools">
             <button type="button" name="add" id="add_data" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add User
          <i class="fas fa-plus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
    
      <table id="user_table" class="table table-hover table-responsive-md table-bordered table-striped">
        <thead>
        <tr>
          <th>Sl#</th>
          <th>Username</th>
          <th>User type</th>
          <th>User Email</th>
          <th>Picture</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->type}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->photo}}</td>
              <td>Edit | Delete</td>
            </tr>
            @endforeach
        <tr>
          <td>2</td>
          <td>Ekhlas Uddin
          </td>
          <td>department</td>
          <td>ekhlas@du.ac.bd</td>
          <td>Picture</td>
          <td>Edit | Delete</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Anwarul Islam</td>
          <td>office</td>
          <td>anwar.islam@du.ac.bd</td>
          <td>Picture</td>
          <td>Edit | Delete</td>
        </tr>
        
        </tfoot>
      </table>



    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer


      
    {{--   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
    --}}   
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form method="post" action="" id="user_form" enctype="multipart/form-data">
                    {{-- {{csrf_field()}} --}}
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" name="name" class="form-control" id="name">
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">User type:</label>
                  <select name="type" id="type" class="custom-select">
                    <option selected>Select User type</option>
                    <option value="superadmin">Super Admin</option>
                    <option value="admin">Admin</option>
                    <option value="duoffices">Registrar Building & Other Offices</option>
                    <option value="department_office">Department Office</option>
                    <option value="dchairman">Department Chairman</option>
                    <option value="facultymember">Faculty Member</option>
                    <option value="idirector">Institute Director</option>
                    <option value="instoffice">Institute Office</option>
                    <option value="editor">Editor</option>
                    <option value="moderator">Moderator</option>
                    <option value="rdirector">Research Center Diretor</option>
                    <option value="proffice">Public Relations Office</option>
                    <option value="dean">Dean</option>
                    <option value="noc">NOC</option>
                    <option value="registrar">DU Registrar</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Email:</label>
  <input class="form-control" type="email" name="email" id="email">
                  </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Password:</label>
<input class="form-control" type="password" name="password" id="password">
                </div>
                
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Upload Image:</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="photo" class="custom-file-input" id="photo">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
                </div>
              
            </div>
            <div class="modal-footer">
                {{-- <input type="hidden" name="button_action" id="button_action" value="insert" /> --}}
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
          </div>
        </div>
      </div>

    </div>
    <!-- /.card-footer-->
  </div>

  @push('script')
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>"> --}}
 {{--  <script>
    var data;
// data; // No more errors
  </script> --}}
  <script src="{{ asset('assets/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/responsive.bootstrap4.min.js') }}"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

{{-- //Ajax Processing --}}
<script>
$(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $('#user_form').submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var url = '{{url('users')}}'
        console.log(data);
        $.ajax({
            url: url,
            method: 'POST',
            data: data,
            success: function(response){
                // console.log(response);
                if(response.success){
                    alert(response.success);
                }

            },
            error: function(error){
                console.log(error);
                /* 
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Title!</strong> Alert body ...
                </div> */
                
            }
        })

    })
})

</script>



   
  @endpush
    
@endsection