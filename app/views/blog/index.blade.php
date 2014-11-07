@section('header-right')
  <a href="{{ URL::route('newPost') }}" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-pencil"></span>
  </a>
@stop

@section('content')
  @if (count($posts) === 0)
    <p class="lead">No content on this blog yet. <a href="{{ URL::route('newPost') }}">Add some! &raquo;</a></p>
  @else
    @foreach ($posts as $post)
      @include('blog.partials.post', array('post' => $post, 'full' => false))
    @endforeach
  @endif
@stop
