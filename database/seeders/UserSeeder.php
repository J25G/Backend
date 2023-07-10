<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('users')->insert([
        'id'=> 1,
        'first_name'=>'johan',
        'last_name'=> 'david',
        'email'  =>'johanpar@gmail.com',
        'password'=>'123465',
        'registered'=>'2023-05-26 09:00:05',
        'last_login'=>'2023-05-26 10:25:17',
        'username'=>'johangojo'

    ]);
    }
}
