<?php

use Illuminate\Database\Seeder;
use App\Offer;

class OfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 10;
        factory(Offer::class, $count)->create();//
    }
}
