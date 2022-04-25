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
            'name' => 'Иванов',
            'email' => '4545@mail.ru',
            'password' => bcrypt('12345678'),
            'role' => 1,

        ];
        Db::table('users')->insert($data);
    }
}
