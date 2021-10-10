<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'mamun',
            'email'=>'mamun@gmail.com',
            'type'=>'Student',
            'department'=>'ICT',
            'password'=>Hash::make('123')
        ]);
    }
}
