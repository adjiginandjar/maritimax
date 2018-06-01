@extends('si.layouts.baselayout')

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
