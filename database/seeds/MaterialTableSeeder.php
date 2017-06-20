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
           ['iconImage' => 'icon.png', 'title' => 'ไก่'],
           ['iconImage' => 'icon.png', 'title' => 'หมู'],
           ['iconImage' => 'icon.png', 'title' => 'วัว'],
        ]);
    }
}
