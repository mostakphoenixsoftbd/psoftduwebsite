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
        <a href="{{route('post.create')}}" class="btn btn-success" data-toggle="" data-target="">
          Add Post&nbsp;<i class="fas fa-plus"></i>
        </a>
             {{-- <button type="button" name="add" id="add_data" 
             class="btn btn-success" data-toggle="modal" 
             data-target="#exampleModal" data-whatever="@mdo">Add User
          <i class="fas fa-plus"></i>
        </button> --}}
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>

    </div>
    <div class="card-body">
    


      <table id="datatable" class="table table-hover table-responsive-md table-bordered table-striped">
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
            
          {{-- @foreach ($users as $user) --}}
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            {{-- <td>{{$user->password}}</td> --}}
            <td></td>
              <td>
              
<a href="#" class="btn btn-success edit">Edit User</a>
<a href="#" class="btn btn-danger delete">Delete</a>
</td>
</tr>
{{-- @endforeach --}}

</tfoot>
</table>
</div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer

      {{-- // Show validation error --}}
      
@if (count($errors) > 0)
    
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
     @endforeach
    @endif

    @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{\Session::get('success')}}</p>
    </div>
    @endif
</ul>
</div>
{{-- // end error Block --}}

      {{-- //User Add Modal Form --}}
      
      <!-- Button trigger modal -->


<!-- Add User Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="{{action('UserController@store')}}" method="POST">
      {{csrf_field()}}
      <div class="modal-body">
        {{-- //Post Add Form --}}
        <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <label>Minimal</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Disabled</label>
                <select class="form-control select2" disabled="disabled" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>

              <div class="form-group">
                <div class="mb-3">
                    <textarea class="textarea" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-3">
              <div class="form-group">
                <label>Multiple</label>
                <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Disabled Result</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option disabled="disabled">California (disabled)</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <!-- /.form-group -->

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
    </div>  
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Insert Post</button>
      </div>
    </form>
    </div>
  </div>
</div>

      {{-- End Add Post Modal  --}}

      @include('users.editUsermodalform')

      @include('users.deleteUserForm')



      {{-- @include('users.editModal') --}}

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

<script type="text/javascript">
$(document).ready(function(){
  var table = $('#datatable').DataTable();

  //start Edit Record
  table.on('click', '.edit', function(){
    $tr = $(this).closest('tr');
    if($($tr).hasClass('child')){
      $tr = $tr.prev('.parent');
    }

    var data = table.row($tr).data();
    console.log(data);

    $('#name').val(data[1]);
    $('#type').val(data[2]);
    $('#email').val(data[3]);
    $('#password').val(data[4]);
    $('#photo').val(data[5]);

    $('#editForm').attr('action', '/user/' +data[0]);
    $('#editModal').modal('show');
  })
})

</script>

<script>
// User Delete Processing
$(document).ready(function(){
  var table = $('#datatable').DataTable();

  //start Edit Record
  table.on('click', '.delete', function(){
    $tr = $(this).closest('tr');
    if($($tr).hasClass('child')){
      $tr = $tr.prev('.parent');
    }

    var data = table.row($tr).data();
    console.log(data);

    $('#name').val(data[1]);
    $('#type').val(data[2]);
    $('#email').val(data[3]);
    $('#password').val(data[4]);
    $('#photo').val(data[5]);

    $('#deleteForm').attr('action', '/user/' +data[0]);
    $('#deleteModal').modal('show');
  })
})

</script>

  
  @endpush
    
@endsection