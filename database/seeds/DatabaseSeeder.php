<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            CategoryCargoSeeder::class,
            CharterTypeSeeder::class,
            CargoModelSeeder::class,
            CargosTableSeeder::class,
            ImageCargosTableSeeder::class,
            CategoryPostSeeder::class,
            TagSeeder::class,
            PostSeeder::class,
            TagPostSeeder::class,
      ]);

    }
}
