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
      ]);
      CategoryPost::create([
        'name' => 'Promo',
      ]);
      CategoryPost::create([
        'name' => 'Headline',
      ]);
    }
}
