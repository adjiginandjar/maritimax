<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();
      $category_ids = [1, 2, 3];


      for ($i = 1; $i <= 40; $i++) {
        $title = $faker->sentence;
        Post::create([

          'title' => $title,
          'body' => $faker->paragraph,
          'slug' => str_slug($title),
          'category_id' => $faker->numberBetween(1, 3),
          'img_cover' => $faker->imageUrl($width = 768, $height = 432),
          'user_id' => $faker->numberBetween(1, 5),

        ]);



      }
    }
}
