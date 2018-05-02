@extends('si.layouts.baselayout')

@section('formbody')
<form class="form-horizontal" role="form">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Charter Type Name</label>
            <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Enter text">
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

@endsection
