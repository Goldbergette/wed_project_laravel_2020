{{--
./resources/views/comments/_show.blade.@php
  Variables disponibles: $comment ARRAY(OBJ(id, pseudo, texte, created_at, updated_at, post_id, post OBJ(id, title, texte,...) ))
--}}

<li class="list-group-item">
<div class="title">Pseudo:{{ $comment->pseudo }}</div>
<div class="text truncate">Commentaire:{{ $comment->texte }}</div>
</li>
