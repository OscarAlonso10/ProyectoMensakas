<?php

use Illuminate\Database\Seeder;

class BillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bill::class, 50)->create();
    }
}
