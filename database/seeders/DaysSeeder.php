<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            'title' => 'Понеділок',
        ]);

        DB::table('days')->insert([
            'title' => 'Вівторок',
        ]);

        DB::table('days')->insert([
            'title' => 'Середа',
        ]);

        DB::table('days')->insert([
            'title' => 'Четверг',
        ]);

        DB::table('days')->insert([
            'title' => 'Пятниця',
        ]);

    }
}
