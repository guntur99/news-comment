<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){

        $user_mail = \DB::table('users')
        ->select(
            'email',
        )
        ->get();

        $comment_guest = '';
        foreach ($user_mail as $mail) {
            $comment_guest = \DB::table('comments as a')
            ->select(
                'a.name',
                'a.comment',
            )
            ->where('a.email', '!=', $mail->email)
            ->get();
        }

        return view('news.comment_guest',
        [
            'comment_guest' => $comment_guest,
        ]
        );
    }
}
