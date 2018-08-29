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
    <span>Post</span>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>Form</span>
</li>
@endsection

@section('page-title')

<h1 class="page-title"> Post Form
    <!-- <small>bootstrap inputs, input groups, custom checkboxes and radio controls and more</small> -->
</h1>
@endsection

@section('formbody')
<div class="portlet-body form">
  <form class="form-horizontal" role="form" action="{{action('PostController@update',$post)}}" enctype="multipart/form-data" method="POST" data-parsley-validate>
    @csrf
    @method('PUT')
      <div class="form-body">
          <div class="form-group">
              <label class="col-md-3 control-label">Article Title</label>
              <div class="col-md-9">
                  <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Article Title" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Article Category</label>
              <div class="col-md-9">
                  <select class="form-control" name="category_id" data-parsley-required="true">
                    @foreach ($categoryPost as $item)
                      <option value="{{ $item->id }}" {{ ( $post->category_id == $item->id ) ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label" >Body</label>
              <div class="col-md-9">
                  <textarea class="form-control"  name ="body"  id="editor" rows="3" data-parsley-required="true">{{ $post->body }}</textarea>
              </div>
          </div>
          <div class="form-group">
              <label for="exampleInputFile" class="col-md-3 control-label">File input</label>
              <div class="col-md-9">
                  <input type="file" name="img_upload" id="exampleInputFile">
                  <img id="pre-img" width="20%"src="{{ $post->img_cover }}">
              </div>
          </div>

      </div>
      <div class="form-actions">
          <div class="row">
              <div class="col-md-offset-9 col-md-3">
                  <button type="submit" class="btn green">Submit</button>
                  <button type="button" class="btn default">Cancel</button>
              </div>
          </div>
      </div>
  </form>
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
