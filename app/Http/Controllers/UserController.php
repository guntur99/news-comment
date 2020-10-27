<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $user_list = \DB::table('users as a')
        ->select(
            'a.name',
            'c.comment',
        )
        ->leftJoin('posts as b', 'a.id', '=', 'b.user_id')
        ->leftJoin('comments as c', 'b.id', '=', 'c.post_id')
        ->where('c.comment', '!=', null)
        ->get();
        // \dump($user_list);

        return view('news.user_list',
        [
            'user_list' => $user_list,
        ]
        );
    }
}
