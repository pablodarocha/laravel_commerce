<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\User;
/**
 * Created by PhpStorm.
 * User: pablo da rocha
 * Date: 05/10/2015
 * Time: 09:46
 */
class UserTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('users')->truncate();

        factory('CodeCommerce\User')->create(
            [
                'name'      => 'Pablo',
                'email'     => 'pablodarocha.ribeiro@gmail.com',
                'password'  => Hash::make(123456),
            ]
        );

        factory('CodeCommerce\User', 10)->create();
//        foreach(range(1,10) as $i) {
//            User::create([
//                'name'      => $faker->word(),
//                'email'     => $faker->email(),
//                'password'  => Hash::make($faker->word)
//            ]);
//        }

    }
}