@extends('si.layouts.baselayout')
@section('head')

<style>
.ck-editor__editable {
    min-height: 300px;
}
</style>
@endsection
@section('bread-crumb')
<li>
    <a href="index.html">Home</a>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>Request</span>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>View</span>
</li>
@endsection

@section('page-title')

<h1 class="page-title"> Request View
</h1>
@endsection

@section('formbody')
<div class="portlet-body">
    @csrf
    @method('PUT')
      <div>
          <div class="">
              <label class="col-md-2 control-label">Nama :</label>
              <div class="col-md-9">
                  <span class="help-block">{{ $contactus->fullname }} </span>
              </div>
          </div>
          <div class="">
              <label class="col-md-2 control-label">Email :</label>
              <div class="col-md-9">
                  
              <span class="help-block">{{ $contactus->email }} </span>
              </div>
          </div>
          <div class="">
              <label class="col-md-2 control-label">Phone :</label>
              <div class="col-md-9">
                  
              <span class="help-block">{{ $contactus->phone_number }} </span>
              </div>
          </div>
          <div class="">
              <label class="col-md-2 control-label">Topic :</label>
              <div class="col-md-9">
                  
              <span class="help-block">{{ $contactus->topic }} </span>
              </div>
          </div>
          <div class="">
              <label class="col-md-2  control-label" >Question : </label>
              <div class="col-md-9">
              <span class="help-block">{{ $contactus->question }} </span>
              </div>
          </div>
      </div>
      <div class="form-actions">
          <div class="row">
              <!-- <div class="col-md-offset-2 col-md-3">
                  <button type="button" class="btn green">Hapus</button>
              </div> -->
          </div>
      </div>
</div>

@endsection

@section('script')

<script type="text/javascript">
ClassicEditor
				.create( document.querySelector( '#editor' ) )
				.then( editor => {

				} )
				.catch( error => {

				} );

        function readURL(input) {

          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#pre-img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        $("#exampleInputFile").change(function() {
          readURL(this);
        });


</script>

@endsection
