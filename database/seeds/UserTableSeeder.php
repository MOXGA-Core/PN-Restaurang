<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::truncate();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'phounam';
        $user->password = bcrypt('phounam888+');
        $user->save();
    }
}
