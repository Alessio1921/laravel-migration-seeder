<?php
use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 200; $i++) { 
            $newTrains = new Train();
            $newTrains->agency = $faker->company();
            $newTrains->departure_station = $faker->city();
            $newTrains->arrival_station = $faker->city();
            $newTrains->departure_time = $faker->dateTimeThisYear();
            $newTrains->arrival_time = $faker->dateTimeThisYear();
            $newTrains->train_Code = $faker->randomNumber();
            $newTrains->number_of_carriages = $faker->numberBetween(1,30);
            $newTrains->in_time = $faker->boolean();
            $newTrains->deleted = $faker->boolean();
            $newTrains->url = $faker->imageUrl(640, 480, 'Train', true);
            $newTrains->save();
        }
    }
}
