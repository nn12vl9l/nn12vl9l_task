<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [[
            'title' => 'テストタスク1',
            'body' => 'テストタスク1の内容です'
        ]];
        DB::table('tasks')->insert($param);
    }
}
