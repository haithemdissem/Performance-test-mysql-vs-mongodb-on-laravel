<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        for ($i=0; $i<100; $i++) {
            $faker = Faker\Factory::create();
            \App\Models\Agencies::create([
                'name'=>$faker->name
            ]);
        }

        for ($i=0; $i<100000; $i++){
            $faker = Faker\Factory::create();
            \App\Models\User::create([
                'first_name'=>$faker->firstName,
                'last_name'=>$faker->lastName,
                'email'=>$faker->email,
                'agencies_id'=>$faker->numberBetween(1,10)
            ]);
        }

    }
}
