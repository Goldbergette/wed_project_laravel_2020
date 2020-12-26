<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
  public function index(){
  $posts=Post::orderBy('created_at', 'DESC')
               ->take(10)
               ->get();
  return view('posts.index', compact('posts'));
}

public function show(int $id){
    $post=Post::find($id);
    return view('posts.show', compact('post'));
  }

public function ajaxMore(Request $request){
  $posts=Post::orderBy('created_at', 'DESC')
              ->take(10)
              ->offset($request->get('offset'))
              ->get();
  return view('posts.ajaxMore', compact('posts'));

}

}
