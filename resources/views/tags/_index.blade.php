{{--
./resources/views/tags/index.blade.@php
  Variables disponibles:
  $tags ARRAY(OBJ(id, name,...))
--}}

<aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title">Tag Clouds</h4>
    <ul class="list">
      @foreach ($tags as $tag)
        <li>
            <a href="#">{{ $tag->name }}</a>
        </li>
      @endforeach


    </ul>
</aside>
