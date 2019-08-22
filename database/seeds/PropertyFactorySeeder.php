<?php

use Illuminate\Database\Seeder;
use App\Property;

class PropertyFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 10;
        factory(Property::class, $count)->create();
    }
}
