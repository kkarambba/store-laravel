<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        ['name' => 'TV', 'code' => 'tv', 'description' => 'tv description', 'category_id' => '3'],
        ['name' => 'Games', 'code' => 'games', 'description' => 'games description',  'category_id' => '4' ],      
        ]);
    }
}
