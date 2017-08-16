<?php

use Illuminate\Database\Seeder;

class RecommendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory('App\Recommend', 2)->create();
    }
}
