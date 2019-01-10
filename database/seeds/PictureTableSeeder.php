<?php

use Illuminate\Database\Seeder;

class PictureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        for ($i=0; $i <5; $i++){
            DB::table('picture')->insert([
                'url' => $faker->imageUrl($width = 640, $height = 480),
                'gallery_id'=> 5
            ]);
        }

        for ($i=0; $i <5; $i++){
            DB::table('picture')->insert([
                'url' => $faker->imageUrl($width = 640, $height = 480),
                'gallery_id'=> 10
            ]);
        }

        for ($i=0; $i <5; $i++){
            DB::table('picture')->insert([
                'url' => $faker->imageUrl($width = 640, $height = 480),
                'gallery_id'=> 25
            ]);
        }
    }
}
