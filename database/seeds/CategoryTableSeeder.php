<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;
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

        factory('CodeCommerce\Category', 15)->create();

    }
}