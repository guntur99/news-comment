<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;


class PostController extends Controller
{
    public function index(){

        // Query Builder
        // $content_post = \DB::table('posts as a')
        // ->select(
        //     'b.name',
        //     'b.email',
        //     'a.content',
        // )
        // ->leftJoin('users as b', 'a.user_id', '=', 'b.id')
        // ->where('email', '!=', null)
        // ->get();

        // Eloquent
        $content_post = Post::where('email', '!=', null)
        ->leftJoin('users', 'posts.user_id', '=', 'users.id')
        ->select('users.name', 'users.email', 'posts.content')
        ->get();

        return view('news.content_post',
        [
            'content_post' => $content_post,
        ]
        );
    }
}
