<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Comment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $updateRequest, Comment $comment)
    {
        $data = $updateRequest->validated();
        $comment->update($data);
        return redirect()->route('personal.comment.index');
    }
}
