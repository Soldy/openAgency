<?php

use App\Phone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factoory as Faker;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $fake = Faker::create()
         $phone = new Phone();
         $phone->countryCode=$faker->areaCode;
         $phone->number=$fake->numberBetween($min = 10000000, $max = 900000000);
         $phone->extension=$fake->->optional($weight = 0.1)->($min = 1000, $max = 9000);
         $phone->save
    }
}
