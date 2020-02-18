<?php


use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factoory as Faker;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $fake = Faker::create()
         $category = new Category();
         $category->name=$faker->word;
         $category->save();
    }
}
