<?php

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();

        Course::insert([
            ['title' => 'เมนูก่อนอาหาร'],
            ['title' => 'เมนูหลัก'],
            ['title' => 'เมนูหลังอาหาร'],
            ['title' => 'เครื่องดื่ม'],
        ]);
    }
}
