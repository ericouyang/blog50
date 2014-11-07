@section('content')
  @include('blog.partials.post', array('post' => $post, 'full' => true))

  <hr />

  <section id="comments">
    <h3 class="title">Comments</h3>
    @if (count($post->comments) === 0)
      <p>No comments yet on this post.</p>
    @else
      @foreach ($post->comments as $comment)
        <div class="comment">
          <p><strong>{{ $comment->name }} says...</strong></p>
          <blockquote>{{ $comment->content }}</blockquote>
        </div>
      @endforeach
    @endif
  </section>

  <section>
    <h3 class="title">Add a comment</h3>
    <form action="{{ URL::route('createComment', array('id' => $post->id)) }}" method="post">
      <div class="form-group">
        <input name="name" class="form-control" type="text" placeholder="Your name" />
      </div>
      <div class="form-group">
        <textarea name="content" class="form-control" rows="5" placeholder="Write here..."></textarea>
      </div>
      <input type="submit" class="btn btn-primary"/>
    </form>
  </section>
@stop
