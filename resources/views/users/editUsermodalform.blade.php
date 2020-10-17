<!-- Edit User Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <form action="/user" method="POST" id="editForm">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="modal-body">
          {{-- //User Edit Form --}}
            <div class="form-group">
              <label>User Name</label>
              <input type="text" class="form-control" id="name"  name="name"  placeholder="Enter Your Full Name">
              
            </div>
            <div class="form-group">
              <label class="col-form-label">User type:</label>
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
              <label>Email address</label>
              <input type="email" id="email" name="email" class="form-control"  placeholder="Enter email">
             
            </div>
            
            <div class="form-group">
              <label>Password</label>
              <input type="password" id="password" name="password" class="form-control"  placeholder="Enter Password">
          
            </div>
            {{-- <div class="form-group">
              <label>Photo</label>
              <input type="file" name="photo" id="photo" class="form-control" placeholder="Upload Photo">
            </div> --}}
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Update Data</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  
        {{-- End Edit User Modal  --}}