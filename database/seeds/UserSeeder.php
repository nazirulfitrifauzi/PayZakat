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
            'name' => 'Admin',
            'email' => 'admin@csc.net.my',
            'email_verified_at' => now(),
            'password' => Hash::make('Csc@1234'),
            'role' => 0,
            'active' => 1,

            'created_by' => '1',
            'created_at' => date("Y-m-d h:i:sa")
        ]);

        // agent
        DB::table('users')->insert([
            'uuid' => (string) Str::uuid(),
            'name' => 'Agent',
            'email' => 'agent@csc.net.my',
            'email_verified_at' => now(),
            'password' => Hash::make('Csc@1234'),
            'role' => 1,
            'active' => 1,

            'created_by' => '1',
            'created_at' => date("Y-m-d h:i:sa")
        ]);
    }
}
