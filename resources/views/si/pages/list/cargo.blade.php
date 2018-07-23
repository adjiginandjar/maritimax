@extends('si.layouts.baselayout') @section('bread-crumb')
<li>
    <a href="index.html">Home</a>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>Cargo</span>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>List</span>
</li>
@endsection @section('page-title')

<h1 class="page-title"> Cargo List
    <!-- <small>bootstrap inputs, input groups, custom checkboxes and radio controls and more</small> -->
</h1>
@endsection @section('formbody')

<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('cargo.create') }}"> Create New Cargo</a>
        </div>
    </div>
</div>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Model</th>
        <th>Category</th>
        <th>City</th>
        <th>Location</th>
        <th>Price</th>
        <th>Available Capacity</th>
        <th>Available Start</th>
        <th>Available End</th>

        <th width="100px">Action</th>
    </tr>
    @foreach ($cargos as $cargo)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $cargo->name }}</td>
        <td>{{ $cargo->cargoModel->name }}</td>
        <td>{{ $cargo->categoryCargo->name }}</td>
        <td>{{ $cargo->city }}</td>
        <td>{{ $cargo->location }}</td>
        <td>{{ $cargo->price }}</td>
        <td>{{ $cargo->available_capacity }}</td>
        <td>{{ $cargo->available_start }}</td>
        <td>{{ $cargo->available_end }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('cargo.edit',$cargo->id) }}">Edit</a>
            <a class="btn btn-danger" data-toggle="modal" data-target="#myModal" data-id="{{$cargo->id}}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Confirm Deletion</h4>
            </div>
            <div class="modal-body">
                <p>
                    <i>Are you sure want to remove this item?</i>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="submit" type="button" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>

{!! $cargos->links() !!} @endsection @section('script')
<script>
    $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var modal = $(this)
        modal.find('#submit').attr("onclick", "unpublish(" + id + "); return false")
    })

    function unpublish(id) {
        //alert(id);
        /* $.post("example.php")
            .always(function () {
                location.reload();
            }); */
        location.reload();
        
    }
</script>
@endsection