<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Model\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::truncate();

        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->code = strtopupper(fake()->botihify('?#?#?#?#'));
            $train->group = fake()->group();
            $train->strt_station = fake()->city();
            $train->arr_station = fake()->city();
            $train->strt_time = fake()->time();
            $train->arr_time = fake()->time();
            $train->carriages_number = rand(2, 10);
            $train->on_time = fake()->boolean(60);
            $train->cancelled = fake()->boolean(10);
            $train->save();
        }
    }
}
