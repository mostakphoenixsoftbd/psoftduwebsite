<!-- Delete User Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="/user" method="POST" id="deleteForm">
      {{csrf_field()}}
      {{method_field('DELETE')}}
      <div class="modal-body">
        
        <input type="hidden" name="_method" value="DELETE">
        <h2>Are you Sure?.. You want to Delete Data!</h2>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Yes, Delete Data!</button>
      </div>
    </form>
    </div>
  </div>
</div>

      {{-- End Delete User Modal  --}}