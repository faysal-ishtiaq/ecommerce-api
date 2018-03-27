<?php

use App\Model\Review;
use App\Model\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Product::class, 146)->create();
        factory(Review::class, 468)->create();
    }
}
