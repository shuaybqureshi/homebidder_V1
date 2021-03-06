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
        $this->call(UsersTableSeeder::class);
        $this->call(UserImageTableSeeder::class);
        $this->call(PropertyFactorySeeder::class);
        $this->call(AddtionalInfoTableSeeder::class);
        $this->call(RejectOfferTableSeeder::class);
        $this->call(OfferTableSeeder::class);
    }
}
