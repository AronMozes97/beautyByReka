<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rentals')->insert([
            [
                'name' => '5 alkalmas bérlet',
                'price' => 27500,
            ],
            [
                'name' => '5 alkalmas bérlet',
                'price' => 30000,
            ],
            [
                'name' => '5 alkalmas bérlet',
                'price' => 37000,
            ],
            [
                'name' => '5 alkalmas bérlet',
                'price' => 45000,
            ],
        ]);
    }
}
