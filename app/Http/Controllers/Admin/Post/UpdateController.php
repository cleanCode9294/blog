<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $updateRequest, Post $post)
    {
        $data = $updateRequest->validated();
        $post->update($data);
        return view('admin.post.show', compact('post'));
    }
}
