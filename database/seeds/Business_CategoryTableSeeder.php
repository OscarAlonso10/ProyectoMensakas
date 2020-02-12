<?php

use Illuminate\Database\Seeder;

class Business_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Business_Category::class, 50)->create();
    }
}
