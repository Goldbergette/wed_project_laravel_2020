{{--
./resources/views/categories/_index.blade.@php
  Variables disponibles: $categories
--}}



<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Category</h4>
    <ul class="list cat-list">
      @foreach ($categories as $categorie)
        <li>
            <a href="#" class="d-flex">
                <p>{{ $categorie->name }}</p>
                <p>(37)</p>
            </a>
        </li>
      @endforeach
    </ul>
</aside>
