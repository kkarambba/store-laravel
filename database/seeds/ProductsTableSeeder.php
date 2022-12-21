<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
        'name' => 'apple TV',
        'code' => 'apple-tv',
        'description' =>
        'apple TV description',
        'category_id' => '33',
        'price' => '19400',
        'image' => 'products\sony.png'
        ],
        [
        'name' =>
        'Sony Playstation',
        'code' => 'sony-playstation',
        'description' => 'Sony Playstation description',
         'category_id' => '34',
         'price' => '25000',
         'image' => 'products\sony.png' ],      
        ]);
    }
}
