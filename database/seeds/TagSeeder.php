<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Tag::create([
        'name' => 'News',
      ]);
      Tag::create([
        'name' => 'Promo',
      ]);
      Tag::create([
        'name' => 'Headline',
      ]);
    }
}
