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
            <th width="280px">Action</th>
        </tr>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $booking->fullname }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('booking.edit',$booking->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
  </table>

  {!! $bookings->links() !!}
@endsection
