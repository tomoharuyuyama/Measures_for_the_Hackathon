<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => '焼き肉を焼く',
            'dead_line' => '20801122',
            'cost_capa' => 20,
            'user_id' => 2,
        ]);
        DB::table('tasks')->insert([
            'title' => '釣り',
            'dead_line' => '20021122',
            'cost_capa' => 40,
            'user_id' => 4,
        ]);
        DB::table('tasks')->insert([
            'title' => '大根を買う',
            'dead_line' => '20101122',
            'cost_capa' => 10,
            'user_id' => 1,
        ]);
        DB::table('tasks')->insert([
            'title' => '私のみ表示される',
            'dead_line' => '20101122',
            'cost_capa' => 10,
            'user_id' => 0,
        ]);
    }
}
