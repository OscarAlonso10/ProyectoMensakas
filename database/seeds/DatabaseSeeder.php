<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
        UsersTableSeeder::class,
        BusinessTableSeeder::class,
        Business_CategoryTableSeeder::class,
        ConsumerTableSeeder::class,
        DelivererTableSeeder::class,
        LanguageTableSeeder::class,
        OrderTableSeeder::class,
        PackTableSeeder::class,
        Product_CategoryTableSeeder::class,
        ProductTableSeeder::class,
        PaymentTableSeeder::class,
		BillTableSeeder::class,

    ]);
    }
}
