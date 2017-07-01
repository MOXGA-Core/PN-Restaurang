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
        $products = [];
        for($i = 0; $i < 30; $i++) {
            $products[] = [
                'course_id' => 1,
                'type_id' => 1,
                'profileImage' => 'user.png',
                'name' => 'Test Product '.$i,
                'detail' => 'Test Product Detail',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }
        \App\Models\Product::insert($products);
    }
}
