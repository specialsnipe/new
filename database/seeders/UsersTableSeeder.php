<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'name'=>'Алексей',
            'email'=>'1234@mail.ru',
            'password'=>'12345678',
            'role'=>'1'

        ];
        Db::table('users')->insert($data);
    }
}
