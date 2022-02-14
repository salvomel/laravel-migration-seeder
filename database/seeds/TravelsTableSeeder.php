<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $types = [
                'Aereo',
                'Crociera',
                'Treno'
            ];

            $new_travel = new Travel();
            $new_travel->location = $faker->city();
            $new_travel->country = $faker->state();
            $new_travel->accomodation = $faker->paragraph(1);
            $new_travel->description = $faker->text(500);
            $new_travel->type = $faker->randomElement($types);
            $new_travel->departure = $faker->dateTime();
            $new_travel->return = $faker->dateTime();
            $new_travel->price = rand(500, 10000);
            $new_travel->save();

        }
    }
}
