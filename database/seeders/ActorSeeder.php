<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 50; $i++){
            $actor = new Actor();

            $actor->fullname = fake()->name();
            $actor->slug = Str::slug($actor->fullname);

            $actor->save();
        }

    }
}
