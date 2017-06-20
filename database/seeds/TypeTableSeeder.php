<?php

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Type::truncate();

        Type::insert([
            ['title' => 'ทอด'],
            ['title' => 'แกง, ต้มยำ'],
            ['title' => 'ผัด'],
            ['title' => 'เส้น'],
            ['title' => 'เมนูพิเศษ'],
        ]);
    }
}
