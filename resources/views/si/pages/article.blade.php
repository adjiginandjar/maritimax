@extends('si.layouts.baselayout')

@section('formbody')
<form class="form-horizontal" role="form">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Category Cargo Name</label>
            <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Enter text">
                <!-- <span class="help-block"> A block of help text. </span> -->
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Article Category</label>
        <div class="col-md-9">
            <select class="form-control">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label">Textarea</label>
        <div class="col-md-9">
            <textarea class="form-control" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputFile" class="col-md-3 control-label">File input</label>
        <div class="col-md-9">
            <input type="file" id="exampleInputFile">
            <p class="help-block"> some help text here. </p>
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
