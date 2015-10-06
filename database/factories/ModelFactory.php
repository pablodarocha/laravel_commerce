<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
/*
 * User Seeder
 */
$factory->define(CodeCommerce\User::class, function ($faker) {
    return [
        'name'              => $faker->name,
        'email'             => $faker->email,
        'password'          => str_random(10),
        'remember_token'    => str_random(10),
    ];
});
/*
 * Category Seeder
 */
$factory->define(CodeCommerce\Category::class, function ($faker) {
    return [
        'name'          => $faker->word,
        'description'   => $faker->sentence,
    ];
});
/*
 * Product Seeder
 */
$factory->define(CodeCommerce\Product::class, function ($faker) {
    return [
        'name'          => $faker->word,
        'description'   => $faker->sentence,
        'price'         => $faker->randomFloat(2, 1, 5),
        'featured'      => $faker->boolean($chanceofGetingTrue = 50),
        'recommend'     => $faker->boolean($chanceofGetingTrue = 50),
    ];
});