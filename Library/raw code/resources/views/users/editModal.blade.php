<div class="modal fade" id="usereditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" data-toogle="validator" id="editUserForm_{{$user->id}}" enctype="multipart/form-data">
                {{-- {{csrf_field()}} --}}
                @csrf
                {{method_field('POST')}}
                {{-- <input type="hidden" name="id" id="id"> --}}
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" id="name" name="name" class="form-control" id="name1" placeholder="Enter your Name">
            </div>

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">User type:</label>
              <select name="user_type" id="user_type" class="custom-select">
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
<input class="form-control" type="email" name="email" id="email1" placeholder="enter your email">
              </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Password:</label>
<input class="form-control" type="password" name="password" id="password1" placeholder="enter your password">
            </div>
            
            <div class="form-group">
              <label for="message-text" class="col-form-label">Upload Image:</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" name="photo" class="custom-file-input" id="photo" placeholder="enter your photo">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>
            </div>
          
        </div>
        <div class="modal-footer">
            {{-- <input type="hidden" name="button_action" id="button_action" value="insert" /> --}}
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          <button type="submit" id="insertbutton" class="btn btn-success">Update User</button>
        </div>
    </form>
  
      </div>
    </div>
  </div>