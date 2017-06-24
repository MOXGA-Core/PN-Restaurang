<?php

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::truncate();

        Material::insert([
           ['iconImage' => 'icon.png', 'name' => 'Pork'],
           ['iconImage' => 'icon.png', 'name' => 'Chicken'],
           ['iconImage' => 'icon.png', 'name' => 'Beef'],
           ['iconImage' => 'icon.png', 'name' => 'Lamp'],
        ]);
    }
}
