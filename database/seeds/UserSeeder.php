<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // agent
        DB::table('users')->insert([
            'uuid' => (string) Str::uuid(),
            'name' => 'Agent',
            'email' => 'agent@csc.net.my',
            'email_verified_at' => now(),
            'password' => Hash::make('Csc@1234'),
            'role' => 1,
            'active' => 1,
        ]);

        DB::table('users')->insert([
            'uuid' => (string) Str::uuid(),
            'name' => 'Admin',
            'email' => 'admin@csc.net.my',
            'email_verified_at' => now(),
            'password' => Hash::make('Csc@1234'),
            'role' => 0,
            'active' => 1,
        ]);
    }
}
