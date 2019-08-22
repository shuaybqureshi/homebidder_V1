<?php

use Illuminate\Database\Seeder;
use App\Image;

class UserImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 50;
        factory(Image::class, $count)->create();
    }
}
