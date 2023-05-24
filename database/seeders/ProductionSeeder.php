<?php

namespace Database\Seeders;

use App\Models\Production;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 20; $i++){
            $production = new Production();
            $production->name = fake()->company();
            $production->save();
        }

    }
}
