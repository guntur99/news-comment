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
        ->where('email', '!=', null)
        ->get();
        // \dump($content_post);


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

        return view('news.content_post',
        [
            'content_post' => $content_post,
        ]
        );
    }
}
