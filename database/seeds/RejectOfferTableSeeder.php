<?php

use Illuminate\Database\Seeder;
use App\RejectOffer;

class RejectOfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 10;
        factory(RejectOffer::class, $count)->create();//
    }
}
