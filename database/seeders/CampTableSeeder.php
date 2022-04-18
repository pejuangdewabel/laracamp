<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug'  => Str::slug('Gila Belajar'),
                'price' => 200,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug'  => Str::slug('Baru Mulai'),
                'price' => 150,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        Camp::insert($camps);
    }
}
