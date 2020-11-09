<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
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
        for ($i=0; $i<20; $i++) {

            $user = Auth::user();
            $id = Auth::id();

            $post=new Post;
            
            $post->user_id=$id;
            $post->title=$faker->word();
            $post->author=$faker->$user;
            $post->description=$faker->text($maxNbChars = 500) ;
            $post->date=$faker->date();

            $post->save();
        }
    }
}
