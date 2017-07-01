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
            ['title' => 'Friterade Rätter Med Ris'],
            ['title' => 'Curry Rätter & Soppa Med Ris'],
            ['title' => 'Wokade Rätter Med Ris'],
            ['title' => 'Stekta Nudlar Eller Ris'],
            ['title' => 'Speecial'],
        ]);
    }
}
