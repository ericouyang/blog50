<article>
  <header>
    @if ($full)
      <h1>{{ $post->title }}</h1>
    @else
      <h1><a href="{{ $post->getURL(); }}">{{ $post->title }}</a></h1>
    @endif
  </header>
  <div class="content">
    @if ($full)
      {{ $post->content }}
    @else
      {{ str_limit($post->content, 430) }}
    @endif
  </div>
  <footer class="text-muted">
    <p>Posted {{ $post->created_at->diffForHumans() }}</p>
    <p><a href="{{ $post->getURL(); }}#comments">{{ $post->getNumCommentsStr() }}</a></p>
  </footer>
</article>
