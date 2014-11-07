@section('content')
  <h3 class="page-header">Add a blog post</h3>
  <form action="{{ URL::route('createPost') }}" method="post">
    <div class="form-group">
      <input name="title" class="form-control input-lg" type="text" placeholder="Title" />
    </div>
    <div class="form-group">
      <textarea name="content" class="form-control" rows="10" placeholder="Write here..."></textarea>
    </div>
    <input type="submit" class="btn btn-primary"/>
  </form>
@stop
