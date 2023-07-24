<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData=[
            [
                'name' => 'Mr Bình',
                'email' => 'binhvt12003@gmail.com',
                'avatar'=>'',
                'password' => bcrypt('Abcabc@123'),
            ],
            [
                'name' => 'Staff',
                'email' => 'binhvt22003@gmail.com',
                'avatar'=>'',
                'password' => bcrypt('Abcabc@123'),
            ],
        ];
        DB::table('users')->insert($userData);
    }
}
