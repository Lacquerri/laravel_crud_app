<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModeEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;
class PeopleSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      foreach(range(1,200)as $index){
        DB::table('people')->insert([
            'name'=>$faker->firstNameMale,
            'surname'=>$faker->name,
            'phone'=>rand(111111111,999999999),
            'street'=>$faker->address,
            'city'=>$faker->word,
        ]);
      }
    }
}
