<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // autore,titolo,post-content-img-data
        for ($i=0; $i < 20; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->realText(35);
            $newPost->author = $faker->userName();
            $newPost->date = $faker->dateTimeThisYear();
            $newPost->img = $faker->imageUrl();
            $newPost->content = $faker->paragraph(5, false);
            $newPost->save();
        }
    }
}
