{{--
./resources/views/comments/_index.blade.@php
  Variables disponibles: $comments ARRAY(OBJ(id, pseudo, texte, created_at, updated_at, post_id, post OBJ(id, title, texte,...) ))
--}}

</br>
<h4>Liste des commentaires de ce post</h4>
<ul class="list-group">
  @foreach($comments as $comment)
      <li class="list-group-item">
@include('comments._show')
</li>
@endforeach
</ul>
