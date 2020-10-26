<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => Int::random(10),
            'name' => Str::random(10).'@name',
            'email' => Str::random(10).'@gmail.com',
            'website' => Str::random(10).'@website',
            'comment' => Str::random(10).'@comment',
        ]);
    }
}
