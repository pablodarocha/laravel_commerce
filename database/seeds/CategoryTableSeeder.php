<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;
use Faker\Factory as Faker;
/**
 * Created by PhpStorm.
 * User: pablo da rocha
 * Date: 05/10/2015
 * Time: 09:46
 */
class CategoryTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('categories')->truncate();

        $faker = Faker::create();
        foreach(range(1,15) as $i) {
            Category::create([
                'name'          => $faker->word(),
                'description'   => $faker->sentence()
            ]);
        }

    }
}