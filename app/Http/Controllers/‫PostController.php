<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  //validation
  $post = new Post();
  $post->body = $request['body'];
  $request->user()->posts()->save($post);
  return redirect()->route('dashboard');
}
