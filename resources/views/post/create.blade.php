@extends('layouts.adminlayout')
@push('css')
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
@endpush
@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Post Create Form</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <form action="">
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control readonly"  id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">username</label>
            <input type="text" class="form-control readonly" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Office</label>
            <input type="text" class="form-control readonly" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Category</label>
            <input type="text" class="form-control readonly" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Department</label>
            <input type="text" class="form-control readonly" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Upload Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>



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
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="button" class="btn btn-danger">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
    <!-- /.card-footer-->
  </div>



    
@endsection

@push('script')

<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>

<script type="text/javascript">
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    
        //Initialize Select2 Elements
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        });
      });
        </script>

<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

@endpush
