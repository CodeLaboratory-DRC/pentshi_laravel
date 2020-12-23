<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create();

        $type = ['examens', 'interrogation', 'tp', 'td'];
        $univ = ['unilu', 'upl', 'ises', 'unh', 'isc', 'salama'];

        foreach (range(1, 15) as $index) {
            DB::table('courses')->insert([
                'titre' => $faker->text(10),
                'promotion' => $faker->text(12),
                'faculty' => $faker->text(7),
                'university' => $univ[array_rand($univ, 1)],
                'state' => 'valid',
                'members_id' => $faker->randomDigit,
                'year' => $faker->date($format = 'Y', $max = '2020', $min = '2001'),
                'created_at' => date('Y-m-d'),
                'updated_at' =>  date('Y-m-d'),
            ]);
        }

        foreach (range(1, 15) as $index) {
            DB::table('exams')->insert([
                'titre' => $faker->text(10),
                'promotion' => $faker->text(12),
                'faculty' => $faker->text(7),
                'university' => $univ[array_rand($univ, 1)],
                'type' => $type[array_rand($type, 1)],
                'state' => 'valid',
                'members_id' => $faker->randomDigit,
                'year' => $faker->date($format = 'Y', $max = '2020', $min = '2001'),
                'created_at' => date('Y-m-d'),
                'updated_at' =>  date('Y-m-d'),

            ]);
        }
    }
}
