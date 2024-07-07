<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\User::create([
            'name' => 'Sahan',
            'email' => 'sahan@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $users = \App\Models\User::All();
        dd($users);
    }
}
