@extends('layouts.adminlayout')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/datatable/responsive.bootstrap4.min.css') }}">
   
@endpush

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">User List</h3>

      <div class="card-tools">
             <a onclick="addForm()" class="btn btn-success pull-right">Add User
          <i class="fas fa-plus"></i>
        </a>
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
              <td>
               {{-- <button class="btn btn-success" type="button editBtn">Edit</button> --}}
               
<button type="button" name="btnEdit" class="btn btn-success" data-toggle="modal" 
data-target="#usereditModal" id="btnEdit" data-whatever="@mdo">Edit User
<i class="fas fa-plus"></i></button>
<button class="btn btn-danger" type="button deleteBtn">Delete</button>
</td>
</tr>
@endforeach
</tfoot>
</table>
</div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer

      @include('users.form')

    </div>
    <!-- /.card-footer-->
  </div>

  @push('script')
  <script src="{{ asset('assets/datatable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/datatable/responsive.bootstrap4.min.js') }}"></script>
  <script>
    $(function () {
      $("#user_table").DataTable({
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

<script type="text/javascript">
    var table1 = $('#user-table')({
           processing: true,
           serverSide: true,
           ajax: "{{ route('index') }}",
           columns: [
             {data:'id', name:'id'},
             {data:'name', name:'name'},
             {data:'type', name:'type'},
             {data:'email', name:'email'},
             {data:'password', name:'password'},
             {data:'photo', name:'photo'}
            //  {data:'action', name:'action', orderable: false, searchable: false}
           ]
         });
    
     function addForm() {
       save_method = "add";
       $('input[name=_method]').val('POST');
       $('#modal-form').modal('show');
       $('#modal-form form')[0].reset();
       $('.modal-title').text('Add Contact');
       $('#insertbutton').text('Add Contact');
     }
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
               
            }
        })

    })

})

</script>

{{-- <script>
    function editForm(id){
        save_method='edit';
        $('input[name_method').val('PATCH');
        $('#modal-form form')[0],reset();
        $.ajax({
        url: "{{ url('user')}}" +'/' + id + "/edit",
        type: "GET",
        dataType: "JSON",
        success: function(data){
            $('#modal-form').modal("show");
            $('.modal-title').text("Edit User");
            $('#insertbutton').text("Update User");
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#type').val(data.type);
            $('#email').val(data.email);
            $('#password').val(data.password);
            $('#photo').val(data.photo);

        },
        error: function(){
            alert("not working properly");
        }


        });
    }
</script> --}}

  
  @endpush
    
@endsection