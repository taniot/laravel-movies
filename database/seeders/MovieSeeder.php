<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        Movie::truncate();

        for($i = 0; $i < 50; $i++){
            $new_movie = new Movie();
            //popoliamo tabella
            //mapping campo -> valore
            $new_movie->original_title = $faker->sentence(3);
            $new_movie->title = $new_movie->original_title;
            $new_movie->description = $faker->text();
            $new_movie->year = $faker->year();
            $new_movie->country = $faker->countryCode();
            $new_movie->duration = $faker->numberBetween(60, 300);
            $new_movie->cast = $this->generateCast($faker, $faker->randomDigitNot(0));
            $new_movie->production = $faker->company();
            $new_movie->director = $faker->name();
            $new_movie->genres = Arr::join($faker->randomElements(['Fantasy', 'Comedy', 'Drama', 'Horror', 'Action'], $faker->numberBetween(1, 5)), ', ');
            $new_movie->score = $faker->randomFloat(1, 0, 10);
            $new_movie->image = $faker->imageUrl(640, 480, 'animals', true);
            $new_movie->is_deleted = $faker->boolean(20);
            $new_movie->adult_only = $faker->boolean(20);
            $new_movie->save();
        }


    }

    private function generateCast(Faker $faker, int $n_persons): string{

        $result = [];

        for($i = 0; $i < $n_persons; $i++){

            $person = "{$faker->firstName()} {$faker->lastName()}";

            array_push($result, $person); //['nome cognome', 'nome1 cognome1'];

        }

        //trasformo array in stringa separata da virgola
        return Arr::join($result, ', ');
    }

}
