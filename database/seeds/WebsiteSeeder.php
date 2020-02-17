<?php


use App\Website;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factoory as Faker;


class WebsiteiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $fake = Faker::create()
         $website = new Website();
         $website->url=$fake->url;
         $website->save();
    }
}
