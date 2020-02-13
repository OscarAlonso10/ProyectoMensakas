<?php

use Illuminate\Database\Seeder;

class Product_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product_Category::class, 50)->create();
    }
}
