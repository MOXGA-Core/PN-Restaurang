<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product();
        $product->name = 'wandeee';
        $product->path = '/assets/img/grid5.jpg';
        $product->category = 'diner';
        $product->tag = 'pomotion';
        $product->detail = "5555";
        $product->save();
    }
}
