<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts_comments')->insert([
            'id' => 10,
            'content' => 'algo',
            'publisher_at'=>'2023-04-09 20:15:43',
            'updated_at' => '2023-05-09 20:15:43',
            'user_id' => 1,
            'post_id' => 1,
        ]);

    }
}
