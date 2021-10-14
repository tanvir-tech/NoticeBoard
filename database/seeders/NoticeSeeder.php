<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('notices')->insert([
            'title'=>'General Notice Demo-03',
            'description'=>'Notice description is inserted by seeder ............',
            'department'=>'All',
            'ownerType'=>'Officals',
            'ownerName'=>'Tanvir',
            'approval'=>1

        ]);
    }
}
