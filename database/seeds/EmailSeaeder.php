<?php

use App\Email;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factoory as Faker;


class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $fake = Faker::create()
         $email = new Email();
         $email->address=$fake->email;
         $email->save
    }
}
