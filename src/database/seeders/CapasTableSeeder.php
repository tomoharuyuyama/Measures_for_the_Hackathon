<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CapasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CapasT')->insert([
            'name' => Str::random(10),
            'dead_line' => '2022-02-12',
            'cost_capa' => '20',
            'asign' => '2',
        ]);
    }
}
