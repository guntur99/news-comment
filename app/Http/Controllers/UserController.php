<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        // Query Builder
        // $user_list = \DB::table('users as a')
        // ->select(
        //     'a.name',
        //     'c.comment',
        // )
        // ->leftJoin('posts as b', 'a.id', '=', 'b.user_id')
        // ->leftJoin('comments as c', 'b.id', '=', 'c.post_id')
        // ->where('c.comment', '!=', null)
        // ->get();

        // Eloquent
        $user_list = User::where('users.email', '!=', 'comments.email')
        ->where('comments.comment', '!=', null)
        ->leftJoin('posts', 'posts.user_id', '=', 'users.id')
        ->leftJoin('comments', 'comments.post_id', '=', 'posts.id')
        ->select('users.name', 'comments.comment')
        ->get();

        return view('news.user_list',
        [
            'user_list' => $user_list,
        ]);
    }
}
