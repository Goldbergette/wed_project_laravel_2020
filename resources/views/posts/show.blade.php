{{--
./resources/views/posts/index.blade.@php
  Variables disponibles:
  $post ARRAY(OBJ(id, title, content, image, created_at, tags ARRAY(OBJ Tag)))
--}}

@extends('template.index')

@section('content')
  <div class="single-post" data-id={{ $post->id }}>
     <div class="feature-img">
        <img class="img-fluid" src="{{ asset('storage/' .$post->image )}}" alt="">
     </div>
     <div class="blog_details">
        <h2>{{ $post->title }}
        </h2>
        <ul class="blog-info-link mt-3 mb-4">
          @foreach($post->tags as $tag)
           <li><a href="#"><i class="fa fa-user"></i> {{ $tag->name }}</a></li>
         @endforeach
        </ul>
        <p class="excert">
          {!! $post->content !!}
        </p>

     </div>
  </div>
</br>
  <div class="blog-author">
     <div class="media align-items-center">
        <img src="{{ asset('storage/' .$post->author->avatar )}}" alt="">
        <div class="media-body">
           <a href="#">
              <h4>{{ $post->author->firstname }} {{ $post->author->lastname }}</h4>
           </a>
           <p>{{ $post->author->biography }}</p>
        </div>
     </div>
  </div>
  @include('template.partials._form')
</br>
<h4>Liste des commentaires de ce post({{ count($post->comments) }})</h4>

<ul class="list-group">
  @foreach($post->comments as $comment)

        @include('comments._show')


@endforeach
</ul>
@endsection
