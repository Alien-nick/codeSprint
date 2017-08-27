<?php

namespace App\Http\Controllers;
use App\Buyers;
use App\User;
use App\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create_comment(Buyers $buyers)
    {

        Comments::create([
            'body' => request('body'),
            'user_id' => auth()->id(),
            'buyers_id' => $buyers->id
        ]);

        return back();

    }
}
