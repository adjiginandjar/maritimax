@extends('si.layouts.baselayout')

@section('head')

<link href="{{ URL::asset('admin/vendor/jquery-fileupload/blueimp-gallery/blueimp-gallery.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('admin/vendor/jquery-fileupload/css/jquery.fileupload.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('admin/vendor/jquery-fileupload/css/jquery.fileupload-ui.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('bread-crumb')
<li>
    <a href="index.html">Home</a>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>Cargo</span>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>Form</span>
</li>
@endsection

@section('page-title')

<h1 class="page-title"> Category Cargo Form
    <!-- <small>bootstrap inputs, input groups, custom checkboxes and radio controls and more</small> -->
</h1>
@endsection

@section('formbody')
<div class="portlet-body form">
  <form class="form-horizontal" role="form" action="{{url('si/cargo')}}" method="POST">
    @csrf
      <div class="form-body">
          <div class="form-group">
              <label class="col-md-3 control-label">Cargo Name</label>
              <div class="col-md-9">
                  <input type="text" name="name" class="form-control" placeholder="Category Cargo Name">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Cargo Category</label>
              <div class="col-md-9">
                  <select class="form-control" name="category_cargo_id">
                    @foreach ($categoryCargos as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Cargo Model</label>
              <div class="col-md-9">
                  <select class="form-control" name="cargo_model_id">
                    @foreach ($cargoModels as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Booking Type</label>
              <div class="col-md-9">
                  <select class="form-control" name="booking_type">
                      <option value="buy">Buy</option>
                      <option value="charter">Charter</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Charter Type</label>
              <div class="col-md-9">
                  <select class="form-control" name="charter_type_id">
                    @foreach ($charterTypes as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Start Date</label>
              <div class="col-md-3">
                <div class="input-group date `form_datetime` form_datetime bs-datetime">
                    <input type="text" size="16" name ="available_start" id="tpstart" class="form-control timepicker">
                    <span class="input-group-addon">
                        <button class="btn default date-set disable" type="button">
                            <i class="fa fa-calendar"></i>
                        </button>
                    </span>
                </div>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">End Date</label>
              <div class="col-md-3">
                  <div class="input-group date form_datetime form_datetime bs-datetime">
                      <input type="text" size="16" name ="available_end" id="tpstart" class="form-control timepicker">
                      <span class="input-group-addon">
                          <button class="btn default date-set disable" type="button">
                              <i class="fa fa-calendar"></i>
                          </button>
                      </span>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">City</label>
              <div class="col-md-9">
                  <input type="text" name="city" class="form-control" placeholder="Cargo City">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Location</label>
              <div class="col-md-9">
                  <input type="text" name="location" class="form-control" placeholder="Cargo Location">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Price</label>
              <div class="col-md-9">
                  <input type="text" name="price" class="form-control" placeholder="Cargo Price">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Area Of Service</label>
              <div class="col-md-9">
                  <input type="text" name="area_of_service" class="form-control" placeholder="Cargo Area Of Service">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Flag</label>
              <div class="col-md-9">
                  <input type="text" name="flag" class="form-control" placeholder="Cargo Flag">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Year Build</label>
              <div class="col-md-9">
                  <input type="text" name="year_build" class="form-control" placeholder="Cargo Year Build">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Load Capacity </label>
              <div class="col-md-9">
                  <input type="text" name="load_capacity" class="form-control" placeholder="Cargo Load Capacity ">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Available Capacity </label>
              <div class="col-md-9">
                  <input type="text" name="available_capacity" value="0"  class="form-control" placeholder="Cargo Available Capacity ">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label" >Description</label>
              <div class="col-md-9">
                  <textarea style="height:300px;" class="form-control" name ="description"  id="editor" rows="3"></textarea>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Curb Weight</label>
              <div class="col-md-9">
                  <input type="text" name="curb_weight" class="form-control" placeholder="Cargo Curb Weight">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Length</label>
              <div class="col-md-9">
                  <input type="text" name="length" class="form-control" placeholder="Cargo Length">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Width</label>
              <div class="col-md-9">
                  <input type="text" name="width" class="form-control" placeholder="Cargo Width">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Height</label>
              <div class="col-md-9">
                  <input type="text" name="height" class="form-control" placeholder="Cargo Height">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Dimension</label>
              <div class="col-md-9">
                  <input type="text" name="dimension" class="form-control" placeholder="Cargo Dimension">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Dimension</label>
            <div id="fileupload" class="col-md-9">
                <div class="row fileupload-buttonbar">
                    <div class="col-md-9">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <span class="btn green fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span> Add files... </span>
                            <input type="file" name="img_cargos[]" multiple>
                        </span>
                        <button type="reset" class="btn warning cancel">
                            <i class="fa fa-ban-circle"></i>
                            <span> Delete All File </span>
                        </button>
                        <!-- The global file processing state -->
                    </div>
                </div>
                <!-- The table listing the files available for upload/download -->
                <table role="presentation" class="table table-striped clearfix">
                    <tbody class="files"> </tbody>
                </table>
            </div>
          </div>
          <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
          <script id="template-upload" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
              <tr class="template-upload fade">
                  <td>
                      <span class="preview"></span>
                  </td>
                  <td>
                      <p class="name">{%=file.name%}</p>
                      <strong class="error label label-danger"></strong>
                  </td>
                  <td>
                      <p class="size">Processing...</p>
                      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                          <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                      </div>
                  </td>
                  <td>  </td>
              </tr> {% } %} </script>
          <!-- The template to display files available for download -->
          <script id="template-download" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
              <tr class="template-download fade">
                  <td>
                      <span class="preview"> {% if (file.thumbnailUrl) { %}
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery>
                              <img src="{%=file.thumbnailUrl%}">
                          </a> {% } %} </span>
                  </td>
                  <td>
                      <p class="name"> {% if (file.url) { %}
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
                          <span>{%=file.name%}</span> {% } %} </p> {% if (file.error) { %}
                      <div>
                          <span class="label label-danger">Error</span> {%=file.error%}</div> {% } %} </td>
                  <td>
                      <span class="size">{%=o.formatFileSize(file.size)%}</span>
                  </td>
                  <td> {% if (file.deleteUrl) { %}
                      <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                          <i class="fa fa-trash-o"></i>
                          <span>Delete</span>
                      </button>
                      <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                      <button class="btn yellow cancel btn-sm">
                          <i class="fa fa-ban"></i>
                          <span>Cancel</span>
                      </button> {% } %} </td>
              </tr> {% } %} </script>
          </script>

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

<script src="{{ URL::asset('admin/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/pages/scripts/components-date-time-pickers.js') }}" type="text/javascript"></script>


<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/vendor/jquery.ui.widget.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/vendor/tmpl.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/vendor/load-image.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/vendor/canvas-to-blob.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/blueimp-gallery/jquery.blueimp-gallery.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/jquery.iframe-transport.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/jquery.fileupload.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/jquery.fileupload-process.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/jquery.fileupload-image.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/jquery.fileupload-audio.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/jquery.fileupload-video.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/jquery.fileupload-validate.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/jquery.fileupload-ui.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('admin/pages/scripts/form-fileupload.js') }}" type="text/javascript"></script>



<script type="text/javascript">
ClassicEditor
				.create( document.querySelector( '#editor' ) )
				.then( editor => {

				} )
				.catch( error => {

				} );

    //     $(".tpstart").datetimepicker({
    //     format: " - hh:ii",
    //     linkField: "mirror_field",
    //     linkFormat: "yyyy-mm-dd hh:ii"
    // });

</script>

@endsection
