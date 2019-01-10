<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
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
            DB::table('comment')->insert([
                'comment' => $faker->realText($maxNbChars = 30),
                'user_id' => rand(1,5),
                'gallery_id'=> 5
            ]);
        }

        for ($i=0; $i <5; $i++){
            DB::table('comment')->insert([
                'comment' => $faker->realText($maxNbChars = 30),
                'user_id' => rand(1,5),
                'gallery_id'=> 10
            ]);
        }

        for ($i=0; $i <5; $i++){
            DB::table('comment')->insert([
                'comment' => $faker->realText($maxNbChars = 30),
                'user_id' => rand(1,5),
                'gallery_id'=> 25
            ]);
        }
    }
}
