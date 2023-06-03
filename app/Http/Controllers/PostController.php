<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

// Post一覧を表示


class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
    }
}
