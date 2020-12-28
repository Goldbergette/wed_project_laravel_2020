@extends('template.index')

@section('content')
  <div class="single-post">
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
          {{ $post->content }}
        </p>

     </div>
  </div>

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
  @include('comments.index')
@endsection
