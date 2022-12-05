<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Кишеньковий годинник Nexus',
            'price' => 7000,
            'model' => 'RT60',
            'display_size' => '300x400',
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Мобільний телефон Samsung',
            'price' => 5700,
            'model' => 'A19',
            'display_size' => '1280x720',
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Мобільний телефон Panasonic',
            'price' => 4900,
            'model' => 'D3',
            'display_size' => '1280x720',
            'category_id' => 1
        ]);
    }
}
