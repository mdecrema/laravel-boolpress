<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<16; $i++) {

            $user = User::inRandomOrder()->first();

            $post=new Post;
            
            $post->user_id=$user->id;
            $post->title=$faker->word();
            $post->description=$faker->text($maxNbChars = 400);
            $post->date=$faker->date;
            $post->image=$faker->imageUrl();

            $post->save();
        }
    }
}
