<?php

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
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@csc.net.my',
            'email_verified_at' => now(),
            'password' => Hash::make('Csc@1234'),
            'role' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Agent',
            'email' => 'agent@csc.net.my',
            'email_verified_at' => now(),
            'password' => Hash::make('Csc@1234'),
            'role' => 2,
        ]);
    }
}
