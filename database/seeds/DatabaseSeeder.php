<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(StoresTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductStoreTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);

        Model::reguard();
    }
}
