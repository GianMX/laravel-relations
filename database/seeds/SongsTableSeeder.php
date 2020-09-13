<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
     {
       for ($i=0; $i < 3 ; $i++){
         for ($i=0; $i < 3 ; $i++) {
           $new_song = new Song ();
           $new_song-> genre = $faker->randomElement([
             'death metal' ,'heavy metal' ,'rock' ,'punk',
           ]);
           $new_song-> title = $faker->word;
           $new_song-> album_id = $i +1;
           $new_song-> save();}
         }
     }
}
