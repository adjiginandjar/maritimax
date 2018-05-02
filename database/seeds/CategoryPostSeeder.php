<?php

use Illuminate\Database\Seeder;
use App\CategoryPost;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      CategoryPost::create([
        'name' => 'News',
        'publish_status' => 'publish',
      ]);
      CategoryPost::create([
        'name' => 'Promo',
        'publish_status' => 'publish',
      ]);
      CategoryPost::create([
        'name' => 'Headline',
        'publish_status' => 'publish',
      ]);
    }
}
