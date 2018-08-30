<?php

use Illuminate\Database\Seeder;
use App\TagPost;

class TagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

      for ($post_id = 1; $post_id <= 3; $post_id++) {
          TagPost::create([
              'post_id' => $post_id,
              'tag_id' => $faker->numberBetween(1, 3),
          ]);

      }
    }
}
