<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;
/**
 * Created by PhpStorm.
 * User: pablo da rocha
 * Date: 05/10/2015
 * Time: 09:46
 */
class ProductTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        DB::table('products')->truncate();

        factory('CodeCommerce\Product', 20)->create();

    }
}