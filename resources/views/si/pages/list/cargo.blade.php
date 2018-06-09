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
    <span>List</span>
</li>
@endsection

@section('page-title')

<h1 class="page-title"> Cargo List
    <!-- <small>bootstrap inputs, input groups, custom checkboxes and radio controls and more</small> -->
</h1>
@endsection

@section('formbody')

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
            </td>
        </tr>
        @endforeach
  </table>

  {!! $cargos->links() !!}
@endsection
