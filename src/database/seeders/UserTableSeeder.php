<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '湯山智晴',
        ]);
        DB::table('users')->insert([
            'name' => '姑',
        ]);
        DB::table('users')->insert([
            'name' => '穴田竜大',
        ]);
        DB::table('users')->insert([
            'name' => 'mrp',
        ]);
    }
}
