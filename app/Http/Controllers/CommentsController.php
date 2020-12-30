<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function store(Request $request){
      $comment = new Comment();
      $comment->pseudo = $request->pseudo;
      $comment->texte = $request->texte;

      return ($comment->save())?1:0;
    }
}
