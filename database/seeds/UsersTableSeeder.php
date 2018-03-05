<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i < 100; $i++) {
            \App\Models\User::query()->create([
                'firstname'=>$faker->firstName,
                'lastname'=>$faker->lastName,
                'email'=>$faker->email,
                'password'=>bcrypt($faker->password),
            ]);
        }
    }
}
