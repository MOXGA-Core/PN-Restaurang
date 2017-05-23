<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Models\Category();
        $category->category = 'Launch';
        $category->save();
        $category = new \App\Models\Category();
        $category->category = 'Dinner';
        $category->save();
        $category = new \App\Models\Category();
        $category->category = 'Dessert';
        $category->save();
        $category = new \App\Models\Category();
        $category->category = 'Drink';
        $category->save();
    }
}
