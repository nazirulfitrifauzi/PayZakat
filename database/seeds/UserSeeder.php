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

        DB::table('agents')->insert([
            'uuid'                  => (string) Str::uuid(),
            'user_id'               => '2',
            'payment_category_id'   => NULL,
            'ic_no'                 => '940211023294',
            'old_ic'                => NULL,
            'gender_id'             => '2',
            'state_origin_id'       => '4',
            'mastautin_flag'        => '1',
            'mastautin_year'        => '10',
            'address1'              => 'No. 11, Jalan 9/6',
            'address2'              => 'Taman IKS, Seksyen 9',
            'address3'              => NULL,
            'postcode'              => '43650',
            'town'                  => 'BANDAR BARU BANGI',
            'state_id'              => '12',
            'phone_no'              => '0192938922',
            'office_no'             => NULL,	
            'position'              => NULL,	
            'employee_no'           => NULL,	
            'employer_name'         => NULL,	
            'fav_ppz_id'            => NULL,
            'created_by'            => '2',
            'updated_by'            => '2',
            'created_at'            => date("Y-m-d h:i:sa"),
            'updated_at'            => date("Y-m-d h:i:sa")
        ]);
    }
}
