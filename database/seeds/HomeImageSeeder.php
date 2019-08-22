<?php

use Illuminate\Database\Seeder;
use App\Image;

class HomeImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 1;
        factory(Image::class, $count)->create();
    }
}
