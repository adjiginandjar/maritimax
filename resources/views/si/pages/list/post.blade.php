@extends('si.layouts.baselayout')

@section('bread-crumb')
<li>
    <a href="index.html">Home</a>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>Post</span>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span>List</span>
</li>
@endsection

@section('page-title')

<h1 class="page-title"> Post List
    <!-- <small>bootstrap inputs, input groups, custom checkboxes and radio controls and more</small> -->
</h1>
@endsection

@section('formbody')

<div class="row">
  <div class="col-lg-12 margin-tb">

              <div class="pull-right">
                  <a class="btn btn-success" href="{{ route('post.create') }}"> Create New Post</a>
              </div>
          </div>
</div>
  <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Category</th>
            <th>Creator</th>
            <th width="100px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->categoryPost->name }}</td>
            <td>{{ $post->creator->name }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('post.edit',$post->id) }}">Edit</a>
            <a class="btn btn-danger" data-toggle="modal" data-target="#myModal" data-id="{{$post->id}}">Delete</a>
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
  {!! $posts->links() !!}@endsection @section('script')
  <script>
    $('#myModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id')
        var modal = $(this)
        modal.find('#submit').attr("onclick", "unpublish(" + id + "); return false")
    })

    function unpublish(id) {
        //alert(id);
         $.post("{{ url('/api/si/posts/unpublish') }}",{
           post_id: id
         }).always(function () {
                location.reload();
            });
        //location.reload();

    }
</script>
@endsection
