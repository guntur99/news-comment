<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;


class PostController extends Controller
{
    public function index(){

        $content_post = \DB::table('posts as a')
        ->select(
            'b.name',
            'b.email',
            'a.content',
        )
        ->leftJoin('users as b', 'a.user_id', '=', 'b.id')
        ->get();
        \dump($content_post);

        $user_list = \DB::table('users as a')
        ->select(
            'a.name',
            'c.comment',
        )
        ->leftJoin('posts as b', 'a.id', '=', 'b.user_id')
        ->leftJoin('comments as c', 'b.id', '=', 'c.post_id')
        ->get();
        \dump($user_list);

        $user_mail = \DB::table('users')
        ->select(
            'email',
        )
        ->get();
        \dump($user_mail);

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
        \dump($comment_guest);


        // $users = User::find(5)->posts()->get();
        // foreach ($users as $user) {

        //     \dump($user->getOriginal());

        // }

        // // dd($users);
        // $posts = Post::first();
        // // dd($posts->getOriginal());

        // // $comment = Post::find(1)->where('user_id', 1)->first();
        // $comments = Post::find(9)->comments()->first();

        // foreach ($comments as $comment) {

            // dd($comments->getOriginal());

        // }


        return view(
            'welcome',
        );
    }
}
