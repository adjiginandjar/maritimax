@extends('si.layouts.baselayout')

@section('head')

<!-- <link href="{{ URL::asset('admin/vendor/jquery-fileupload/blueimp-gallery/blueimp-gallery.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('admin/vendor/jquery-fileupload/css/jquery.fileupload.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('admin/vendor/jquery-fileupload/css/jquery.fileupload-ui.css') }}" rel="stylesheet" type="text/css" /> -->

<link href="{{ URL::asset('admin/global/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('admin/global/plugins/dropzone/basic.min.css') }}" rel="stylesheet" type="text/css" />

<!-- <link rel="stylesheet" href="{{url('css/dropzone.css')}}"> -->
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
  <form class="form-horizontal" role="form" action="{{url('si/cargo')}}" method="POST" data-parsley-validate>
    @csrf
      <div class="form-body">
          <div class="form-group">
              <label class="col-md-3 control-label">Cargo Name</label>
              <div class="col-md-9">
                  <input type="text" name="name" class="form-control" placeholder="Category Cargo Name" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Cargo Category</label>
              <div class="col-md-9">
                  <select class="form-control" name="category_cargo_id" data-parsley-required="true">
                    @foreach ($categoryCargos as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Cargo Model</label>
              <div class="col-md-9">
                  <select class="form-control" name="cargo_model_id" data-parsley-required="true">
                    @foreach ($cargoModels as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Booking Type</label>
              <div class="col-md-9">
                  <select class="form-control" name="booking_type" data-parsley-required="true">
                      <option value="buy">Buy</option>
                      <option value="charter">Charter</option>
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Charter Type</label>
              <div class="col-md-9">
                  <select class="form-control" name="charter_type_id" data-parsley-required="true">
                    @foreach ($charterTypes as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Start Date</label>
              <div class="col-md-5">
                <div class="input-group date `form_datetime` form_datetime bs-datetime">
                    <input type="text" size="16" name ="available_start" id="tpstart" class="form-control timepicker" data-parsley-required="true">
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
              <div class="col-md-5">
                  <div class="input-group date form_datetime form_datetime bs-datetime">
                      <input type="text" size="16" name ="available_end" id="tpstart" class="form-control timepicker" data-parsley-required="true">
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
                  <input type="text" name="city" class="form-control" placeholder="Cargo City" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Location</label>
              <div class="col-md-9">
                  <input type="text" name="location" class="form-control" placeholder="Cargo Location" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Price</label>
              <div class="col-md-9">
                  <input type="text" name="price" class="form-control" placeholder="Cargo Price" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Area Of Service</label>
              <div class="col-md-9">
                  <input type="text" name="area_of_service" class="form-control" placeholder="Cargo Area Of Service" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Flag</label>
              <div class="col-md-9">
                  <input type="text" name="flag" class="form-control" placeholder="Cargo Flag" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Year Build</label>
              <div class="col-md-9">
                  <input type="text" name="year_build" class="form-control" placeholder="Cargo Year Build" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Load Capacity </label>
              <div class="col-md-9">
                  <input type="text" name="load_capacity" class="form-control" placeholder="Cargo Load Capacity " data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Available Capacity </label>
              <div class="col-md-9">
                  <input type="text" name="available_capacity" value="0"  class="form-control" placeholder="Cargo Available Capacity " data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label" >Description</label>
              <div class="col-md-9">
                  <textarea style="height:300px;" class="form-control" name ="description"  id="editor" rows="3" data-parsley-required="true"></textarea>
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Curb Weight</label>
              <div class="col-md-9">
                  <input type="text" name="curb_weight" class="form-control" placeholder="Cargo Curb Weight" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Length</label>
              <div class="col-md-9">
                  <input type="text" name="length" class="form-control" placeholder="Cargo Length" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Width</label>
              <div class="col-md-9">
                  <input type="text" name="width" class="form-control" placeholder="Cargo Width" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Height</label>
              <div class="col-md-9">
                  <input type="text" name="height" class="form-control" placeholder="Cargo Height" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
              <label class="col-md-3 control-label">Dimension</label>
              <div class="col-md-9">
                  <input type="text" name="dimension" class="form-control" placeholder="Cargo Dimension" data-parsley-required="true">
                  <!-- <span class="help-block"> A block of help text. </span> -->
              </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <!-- <div id="fileupload" class="col-md-9">
                <div class="row fileupload-buttonbar">
                    <div class="col-md-9">
                        <!-- The fileinput-button span is used to style the file input field as button -->
                        <!--<span class="btn green fileinput-button">
                            <i class="fa fa-plus"></i>
                            <span> Add files... </span>
                            <input type="file" name="img_cargos[]" multiple>
                        </span>
                        <button type="reset" class="btn warning cancel">
                            <i class="fa fa-ban-circle"></i>
                            <span> Delete All File </span>
                        </button>
                        <!-- The global file processing state -->
                    <!--</div>
                </div>
                <!-- The table listing the files available for upload/download -->
                <!-- <table role="presentation" class="table table-striped clearfix">
                    <tbody class="files"> </tbody>
                </table>
            </div> -->
            <div class="col-md-9">
              <div action="{{url('/api/upload/single')}}"  class="dropzone dropzone-file-area" id="my-dropzone">
                  <h3 class="sbold">Drop files here or click to upload</h3>
                  <!-- <p> This is just a demo dropzone. Selected files are not actually uploaded. </p> -->
              </div>
            </div>

          </div>

          <div id="preview" style="display: none;">
            <div class="dz-preview dz-file-preview" >
                <div class="dz-image" >
                    <img data-dz-thumbnail  />
                </div>
                <div class="dz-details">
                  <div class="dz-size">
                    <span data-dz-size></span>
                  </div>
                  <div class="dz-filename">
                    <span data-dz-name></span>
                  </div>
                </div>
                <div class="dz-progress">
                  <span class="dz-upload" data-dz-uploadprogress></span>
                </div>
                <div class="dz-error-message">
                  <span data-dz-errormessage></span>
                </div>
                <div class="dz-success-mark">
                  <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <title>Check</title>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                      <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                    </g>
                  </svg>
                </div>
                <div class="dz-error-mark">
                  <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <title>Error</title>
                    <defs></defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                      <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                        <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" id="Oval-2" sketch:type="MSShapeGroup"></path>
                      </g>
                    </g>
                  </svg>
                </div>
              </div>
          </div>
          <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
          <!-- <script id="template-upload" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
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
          <!-- <script id="template-download" type="text/x-tmpl"> {% for (var i=0, file; file=o.files[i]; i++) { %}
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
          </script> -->

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

<script src="{{ URL::asset('admin/global/plugins/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('admin/pages/scripts/form-dropzone.js') }}"></script>
<!-- <script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/vendor/jquery.ui.widget.js') }}" type="text/javascript"></script>
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
<script src="{{ URL::asset('admin/vendor/jquery-fileupload/js/jquery.fileupload-ui.js') }}" type="text/javascript"></script> -->

<!-- <script src="{{ URL::asset('admin/pages/scripts/form-fileupload.js') }}" type="text/javascript"></script> -->



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
