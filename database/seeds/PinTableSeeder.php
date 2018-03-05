<?php

use Illuminate\Database\Seeder;

class PinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i < 50; $i++) {
            \Log::info($faker->name);
            \App\Models\Pins::query()->create([
                'name'=>$faker->name,
                'city'=>$faker->city,
                'address'=>$faker->address,

            ]);
        }
    }
}
