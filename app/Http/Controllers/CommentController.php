<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(){

        // Query Builder
        // $user_mail = \DB::table('users')->select('email')->get();

        // $comment_guest = '';
        // foreach ($user_mail as $mail) {
        //     $comment_guest = \DB::table('comments')
        //     ->select(
        //         'name',
        //         'comment',
        //     )
        //     ->where('email', '!=', $mail->email)
        //     ->get();
        // }

        // Eloquent
        $user_mail = User::select('email')->get();

        $comment_guest = '';
        // Check if email has registered
        foreach ($user_mail as $mail) {
            $comment_guest = Comment::where('comments.email', '!=', $mail->email)
            ->select('comments.name', 'comments.comment')
            ->get();
        }

        return view('news.comment_guest',
        [
            'comment_guest' => $comment_guest,
        ]);
    }
}
