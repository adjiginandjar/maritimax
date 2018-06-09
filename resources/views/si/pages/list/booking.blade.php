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
            <th>Cargo</th>
            <th>Destination From</th>
            <th>Destination To</th>
            <th>Capacity</th>
            <th>Date</th>
            <th width="80px">Action</th>
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
            <td>
                <a class="btn btn-primary" href="{{ route('booking.show',$booking->id) }}">Show</a>
            </td>
        </tr>
        @endforeach
  </table>

  {!! $bookings->links() !!}
@endsection
