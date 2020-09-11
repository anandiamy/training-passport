<?php

use App\User;
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
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@laravolt.dev',
            'password' => bcrypt('asdf1234'),
        ]);
    }
}
