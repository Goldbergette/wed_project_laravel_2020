{{--
./resources/views/posts/index.blade.@php
  Variables disponibles:
  $posts ARRAY(OBJ(id, title, content, image, created_at, tags ARRAY(OBJ Tag)))
--}}
@extends('template.index')

@section('content')

      <div class="blog_left_sidebar">
@foreach($posts as $post)
  <article class="blog_item">
      <div class="blog_item_img">
          <img class="card-img rounded-0" src="{{ asset('storage/' .$post->image )}}" alt="">
          <a href="#" class="blog_item_date">
              <h3>{{ date('d', strtotime($post->created_at))}}</h3>
              <p>{{ date('M', strtotime($post->created_at))}}</p>
          </a>
      </div>

      <div class="blog_details">
          <a class="d-inline-block" href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}">
              <h2>{{ $post->title }}</h2>
          </a>
          <p>{!! $post->content !!}</p>
          <ul class="blog-info-link">
            @foreach($post->tags as $tag)
              <li><a href="#"><i class="fa fa-user"></i> {{ $tag->name }}</a></li>
            @endforeach
          </ul>
      </div>
  </article>
@endforeach
</div>
<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <li class="page-item">
            <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
        </li>
    </ul>
</nav>
@endsection
