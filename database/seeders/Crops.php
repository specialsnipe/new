<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Crops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Деревья'
            ],
            [
                'title' => 'Пасленовые'
            ],
            [
                'title' => 'Кустарники'
            ],
            [
                'title' => 'Зерновые'
            ],
            [
                'title' => 'Корнеплоды'
            ],
        ];
        DB::table('crops')->insert($data);
    }
}
