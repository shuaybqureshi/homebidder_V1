<?php

use Illuminate\Database\Seeder;
use App\AddtionalPropertyInfo;

class AddtionalInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 25;
        factory(AddtionalPropertyInfo::class, $count)->create();
    }
}
