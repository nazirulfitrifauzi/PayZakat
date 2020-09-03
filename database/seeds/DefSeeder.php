<?php

use Illuminate\Database\Seeder;

class DefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->insert([
            [
                'description'   => 'CONTRIBUTION',
                'created_by'    => '0',
                'created_at'    => date("Y-m-d")
            ],[
                'description'   => 'SHARE',
                'created_by'    => '0',
                'created_at'    => date("Y-m-d")
            ],[
                'description'   => 'FINANCE',
                'created_by'    => '0',
                'created_at'    => date("Y-m-d")
            ],[
                'description'   => 'INSURANCE', 
                'created_by'    => '0', 
                'created_at'    => date("Y-m-d")
            ],[
                'description'   => 'ZAKAT', 
                'created_by'    => '0', 
                'created_at'    => date("Y-m-d")
            ],
        ]);

        DB::table('products')->insert([
            [
                'product_code'          => '5001',
                'product_name'          => 'Pendapatan',
                'product_category_id'   => '5',
                'effective_date'        => date("Y-m-d"),
                'status'                => '1',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'product_code'          => '5002',
                'product_name'          => 'Perniagaan',
                'product_category_id'   => '5',
                'effective_date'        => date("Y-m-d"),
                'status'                => '1',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'product_code'          => '5003',
                'product_name'          => 'Harta',
                'product_category_id'   => '5',
                'effective_date'        => date("Y-m-d"),
                'status'                => '1', 
                'created_by'            => '0', 
                'created_at'            => date("Y-m-d")
            ],[
                'product_code'          => '5004',
                'product_name'          => 'KWSP',
                'product_category_id'   => '5',
                'effective_date'        => date("Y-m-d"),
                'status'                => '1', 
                'created_by'            => '0', 
                'created_at'            => date("Y-m-d")
            ],[
                'product_code'          => '5005',
                'product_name'          => 'ASB',
                'product_category_id'   => '5',
                'effective_date'        => date("Y-m-d"),
                'status'                => '1', 
                'created_by'            => '0', 
                'created_at'            => date("Y-m-d")
            ],
        ]);

        DB::table('role')->insert([
            [
                'description'           => 'User',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Agent',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],
        ]);

        DB::table('gender')->insert([
            [
                'description'           => 'Lelaki',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Perempuan',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],
        ]);

        DB::table('state')->insert([
            [
                'description'           => 'Johor',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Kedah',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Kelantan',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Melaka', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Negeri Sembilan', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Pahang', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Perak', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Perlis', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Pulau Pinang', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Sabah', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Sarawak', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Selangor', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Terengganu',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'description'           => 'Wilayah Persekutuan', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],
        ]);

        DB::table('ppz')->insert([
            [
                'name'                  => 'PPZ - Shamelin (HQ)',
                'address'               => 'Wisma PPZ, 68-1-6, Dataran Shamelin, Jalan 4/91, Taman Shamelin Perkasa, 56100 Wilayah Persekutuan Kuala Lumpur', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'name'                  => 'PPZ - Daruzzakah',
                'address'               => 'Daruzzakah, Lorong Hj Hussein 2, 50676 Wilayah Persekutuan Kuala Lumpur', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'name'                  => 'PPZ - Masjid Negara',
                'address'               => 'Masjid Negara,Jalan Perdana, 50480 Wilayah Persekutuan Kuala Lumpur', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'name'                  => 'PPZ - Wangsa Maju',
                'address'               => 'No. 50, Jalan 1/27F, Pusat Bandar Wangsa Maju (KLSC), Seksyen 5, 53300 Wilayah Persekutuan Kuala Lumpur',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'name'                  => 'PPZ - PUTRAJAYA',
                'address'               => '10A, Jalan P9B/1A, Presint 9,62250 Putrajaya.', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'name'                  => 'PPZ - Masjid At-Taqwa,Taman Tun Dr. Ismail (TTDI)',
                'address'               => 'Jalan Datuk Sulaiman, Taman Tun Dr. Ismail, 60000 Kuala Lumpur', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'name'                  => 'PPZ - Masjid Abdul Rahman Bin Auf, Puchong',
                'address'               => 'Masjid Abdul Rahman Bin Auf, Batu 5 1/2, Jalan Puchong, Wilayah Persekutuan Kuala Lumpur', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'name'                  => 'PPZ - Masjid Imam Al Ghazali, Kepong',
                'address'               =>'Masjid Imam Al Ghazali, Bandar Manjalara, Kepong, Wilayah Persekutuan Kuala Lumpur',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
            ],[
                'name'                  => 'PPZ - Labuan',
                'address'               => 'Unit C-012, Aras 1, Kompleks Ujana Kewangan Labuan, Jalan Merdeka 87000 Labuan',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d")
                
            ],
        ]);
    }
}
