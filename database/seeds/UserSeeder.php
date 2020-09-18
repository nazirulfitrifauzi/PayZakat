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
        DB::table('users')->insert([
            'uuid' => (string) Str::uuid(),
            'name' => 'Agent',
            'email' => 'agent@csc.net.my',
            'email_verified_at' => now(),
            'password' => Hash::make('Csc@1234'),
            'role' => 1,
            'active' => 1,
        ]);
    }
}
