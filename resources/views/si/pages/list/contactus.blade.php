@extends('si.layouts.baselayout')

@section('bread-crumb')
<li>
    <a href="index.html">Home</a>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>Request</span>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>List</span>
</li>
@endsection

@section('page-title')

<h1 class="page-title"> Request List
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
            <th>Topic</th>
            <th>Question</th>
            <th width="100px">Action</th>
        </tr>
        @foreach ($contactuses as $contactus)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contactus->fullname }}</td>
            <td>{{ $contactus->phone_number }}</td>
            <td>{{ $contactus->email }}</td>
            <td>{{ $contactus->topic }}</td>
            <td>{{ $contactus->question }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('contactus.show',$contactus->id) }}">Show</a>
            </td>
        </tr>
        @endforeach
  </table>

  {!! $contactuses->links() !!}
@endsection
