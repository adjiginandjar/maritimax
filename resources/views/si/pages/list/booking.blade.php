@extends('si.layouts.baselayout')

@section('bread-crumb')
<li>
    <a href="index.html">Home</a>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>Booking</span>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>List</span>
</li>
@endsection

@section('page-title')

<h1 class="page-title"> Booking List
    <!-- <small>bootstrap inputs, input groups, custom checkboxes and radio controls and more</small> -->
</h1>
@endsection

@section('formbody')

  <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Product</th>
            <th>Destination From</th>
            <th>Destination To</th>
            <th>Capacity</th>
            <th>Date</th>
            <th>Status</th>
            <th width="100px">Action</th>
        </tr>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $booking->fullname }}</td>
            <td>{{ $booking->phone_number }}</td>
            <td>{{ $booking->email }}</td>
            <td>{{ $booking->cargo->name }}</td>
            <td>{{ $booking->destination_to }}</td>
            <td>{{ $booking->destination_from }}</td>
            <td>{{ $booking->capacity }}</td>
            <td>{{ $booking->date }}</td>
            <td>{{ $booking->booking_status }}</td>
            <td>
            @if ($booking->booking_status === 'pending')
                <a class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-type='approve' data-id="{{$booking->id}}">Approve</a>
                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal" data-type='reject' data-id="{{$booking->id}}">Reject</a>
                @else
                <button disabled class="btn btn-primary">Approve</button>
                <button disabled class="btn btn-danger" >Reject</button>
            @endif
            </td>
        </tr>
        @endforeach
  </table>
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
                    Are you sure want to <i></i> this item?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="submit" type="button" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
  {!! $bookings->links() !!}@endsection @section('script')

  <script>
    $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var type = button.data('type')
        console.log(id);
        console.log(type);
        var modal = $(this)
        modal.find('p').find('i').text(type)
        
        if(type=='approve'){
        modal.find('#submit').attr("onclick", "approve(" + id + "); return false")

        }
        else{
        modal.find('#submit').attr("onclick", "reject(" + id + "); return false")

        }
    })

    function approve(id) {
        //alert(id);
         $.post("{{ url('/api/si/booking/approve') }}",{
            booking_id: id
         }).always(function () {
                location.reload();
            });
        //location.reload();

    }

     function reject (id) {
        //alert(id);
         $.post("{{ url('/api/si/booking/reject') }}",{
            booking_id: id
         }).always(function () {
                location.reload();
            });
        //location.reload();

    }
</script>
@endsection
