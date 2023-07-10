<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'id' =>cate1,
            'title' => 'Pelicula del año',
            'content' => 'Criticas',
            'slug' => 'Resumen de algo',
            'summary' => 'Resumen 2',
            'publisher_at' => '2023-04-09 20:15:43',
            'created_at' => '2023-04-09 20:15:43',
            'update_at' => '2023-06-09 20:15:43',
            'user_id' => 1,

        ]);
    }
}
