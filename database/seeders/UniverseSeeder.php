<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\universe;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        universe::create([
            'name' => 'Marvel'
        ]);
        Universe::create([
            'name' => 'Dc comics'
        ]);


        //
    }
}
