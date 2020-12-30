<ul>
  @foreach($comments as $comment)
      <li>
  <div class="title">{{ $comment->pseudo }}</div>
  <div data-id="{{ $comment->id }}" class="text truncate">{{ $comment->texte }}</div>
</li>
@endforeach
</ul>
