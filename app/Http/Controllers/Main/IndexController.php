<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Collection;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);

        $randomPosts = Post::get()->random(fn (Collection  $items) => min(4, count($items)));
        return view('main.index', compact('posts', 'randomPosts'));
    }
}
