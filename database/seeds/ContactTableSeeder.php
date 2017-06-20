<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\Models\Contact::insert([
            'address'  => 'Götgatan 13, 761 45 Norrtelje, Stockholms Län, Sweden',
            'email'    => 'Phanouvong66@hotmail.com',
            'name'     => 'Restaurant',
            'tel'      => '+46 0737 720 749',
            'facebook' => 'Phou Nam Thai Restaurang & Take Away',
        ]);
    }
}
