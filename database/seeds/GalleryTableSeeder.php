<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i <10; $i++){
            DB::table('gallery')->insert([
                'name' => $faker->realText($maxNbChars = 10),
                'description' => $faker->realText($maxNbChars = 200),
                'user_id'=> 1
            ]);
        }

        for ($i=0; $i <10; $i++){
            DB::table('gallery')->insert([
                'name' => $faker->realText($maxNbChars = 10),
                'description' => $faker->realText($maxNbChars = 200),
                'user_id'=> 2
            ]);
        }

        for ($i=0; $i <10; $i++){
            DB::table('gallery')->insert([
                'name' => $faker->realText($maxNbChars = 10),
                'description' => $faker->realText($maxNbChars = 200),
                'user_id'=> 4
            ]);
        }
    }
}
