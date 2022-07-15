<?php


use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker ;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker )
    {
        for ($i=0; $i < 100; $i++) {
          $train = new Train();
          $train->agency = $faker->word();
          $train->start_station = $faker->word();
          $train->end_station = $faker->word();
          $train->departure_time = $faker->dateTime();
          $train->arrival_time = $faker->dateTime();
          $train->number_compartments = $faker->randomNumber(2);
          $train->in_time = $faker->boolean();
          $train->deleted = $faker->boolean();
          $train->save();

        }
    }
}
