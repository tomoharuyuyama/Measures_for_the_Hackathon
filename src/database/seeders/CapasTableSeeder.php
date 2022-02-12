<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CapasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('capas')->insert([
            'max_capa' => 100,
            'now_capa' => 60,
        ]);
        DB::table('capas')->insert([
            'max_capa' => 200,
            'now_capa' => 110,
        ]);
        DB::table('capas')->insert([
            'max_capa' => 100,
            'now_capa' => 10,
        ]);
        DB::table('capas')->insert([
            'max_capa' => 200,
            'now_capa' => 110,
        ]);
    }
}
