<?php

use App\Models\AccountZakat;
use Illuminate\Database\Seeder;

class DefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Add new row of data at the last 
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->insert([
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'MEMBERSHIP FI'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'CONTRIBUTION'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'SHARE'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'LOAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'INSURANCE'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'VIRTUAL ACCOUNT'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'ZAKAT'],
        ]);

        DB::table('products')->insert([
            [
                'product_code'          => '7001',
                'product_name'          => 'Pendapatan',
                'product_category_id'   => '7',
                'effective_date'        => date("Y-m-d h:i:sa"),
                'active_flag'                => '1',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'product_code'          => '7002',
                'product_name'          => 'Perniagaan',
                'product_category_id'   => '7',
                'effective_date'        => date("Y-m-d h:i:sa"),
                'active_flag'                => '1',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'product_code'          => '7003',
                'product_name'          => 'Harta',
                'product_category_id'   => '7',
                'effective_date'        => date("Y-m-d h:i:sa"),
                'active_flag'                => '1', 
                'created_by'            => '0', 
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'product_code'          => '7004',
                'product_name'          => 'KWSP',
                'product_category_id'   => '7',
                'effective_date'        => date("Y-m-d h:i:sa"),
                'active_flag'                => '1', 
                'created_by'            => '0', 
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'product_code'          => '7005',
                'product_name'          => 'ASB',
                'product_category_id'   => '7',
                'effective_date'        => date("Y-m-d h:i:sa"),
                'active_flag'                => '1', 
                'created_by'            => '0', 
                'created_at'            => date("Y-m-d h:i:sa")
            ],
        ]);

        DB::table('role')->insert([
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'USER'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'AGENT'],
        ]);

        DB::table('gender')->insert([
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'LELAKI'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'PEREMPUAN'],
        ]);

        DB::table('state')->insert([
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'JOHOR',                 'img'=>'johor.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'KEDAH',                 'img'=>'kedah.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'KELANTAN',              'img'=>'kelantan.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'MELAKA',                'img'=>'melaka.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'NEGERI SEMBILAN',       'img'=>'n9.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'PAHANG',                'img'=>'pahang.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'PERAK',                 'img'=>'perak.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'PERLIS',                'img'=>'perlis.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'PULAU PINANG',          'img'=>'penang.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'SABAH',                 'img'=>'sabah.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'SARAWAK',               'img'=>'sarawak.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'SELANGOR',              'img'=>'selangor.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'TERENGGANU',            'img'=>'terangganu.svg'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'description'=>'WILAYAH PERSEKUTUAN',   'img'=>'kl.svg'],
        ]);

        DB::table('ppz')->insert([
            [
                'name'                  => 'PPZ - Shamelin (HQ)',
                'address'               => 'Wisma PPZ, 68-1-6, Dataran Shamelin, Jalan 4/91, Taman Shamelin Perkasa, 56100 Wilayah Persekutuan Kuala Lumpur', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'name'                  => 'PPZ - Daruzzakah',
                'address'               => 'Daruzzakah, Lorong Hj Hussein 2, 50676 Wilayah Persekutuan Kuala Lumpur', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'name'                  => 'PPZ - Masjid Negara',
                'address'               => 'Masjid Negara,Jalan Perdana, 50480 Wilayah Persekutuan Kuala Lumpur', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'name'                  => 'PPZ - Wangsa Maju',
                'address'               => 'No. 50, Jalan 1/27F, Pusat Bandar Wangsa Maju (KLSC), Seksyen 5, 53300 Wilayah Persekutuan Kuala Lumpur',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'name'                  => 'PPZ - PUTRAJAYA',
                'address'               => '10A, Jalan P9B/1A, Presint 9,62250 Putrajaya.', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'name'                  => 'PPZ - Masjid At-Taqwa,Taman Tun Dr. Ismail (TTDI)',
                'address'               => 'Jalan Datuk Sulaiman, Taman Tun Dr. Ismail, 60000 Kuala Lumpur', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'name'                  => 'PPZ - Masjid Abdul Rahman Bin Auf, Puchong',
                'address'               => 'Masjid Abdul Rahman Bin Auf, Batu 5 1/2, Jalan Puchong, Wilayah Persekutuan Kuala Lumpur', 
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'name'                  => 'PPZ - Masjid Imam Al Ghazali, Kepong',
                'address'               =>'Masjid Imam Al Ghazali, Bandar Manjalara, Kepong, Wilayah Persekutuan Kuala Lumpur',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
            ],[
                'name'                  => 'PPZ - Labuan',
                'address'               => 'Unit C-012, Aras 1, Kompleks Ujana Kewangan Labuan, Jalan Merdeka 87000 Labuan',
                'created_by'            => '0',
                'created_at'            => date("Y-m-d h:i:sa")
                
            ],
        ]);

        DB::table('payment_method')->insert([
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'active_flag' => '1', 'description'=>'CASH'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'active_flag' => '1', 'description'=>'IBT/IBFT'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'active_flag' => '0', 'description'=>'CHEQUE'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'active_flag' => '0', 'description'=>'SALARY DEDUCTION'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'active_flag' => '0', 'description'=>'FINANCING DEDUCTION'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'active_flag' => '0', 'description'=>'REBATE'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'active_flag' => '0', 'description'=>'PROCESS FEE'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'active_flag' => '0', 'description'=>'OTHER CHARGES'],

        ]);

        DB::table('transaction_codes')->insert([
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '010001', 'description'=>'MEMBERSHIP FI -  SYSTEM ADJUSTMENT',    'description_malay'=>'FI KEAHLIAN -  PELARASAN SISTEM'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '010002', 'description'=>'MEMBERSHIP FI -  OPENING BALANCE',      'description_malay'=>'FI KEAHLIAN -  BAKI MULA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '010004', 'description'=>'MEMBERSHIP FI -  PAYMENT',              'description_malay'=>'FI KEAHLIAN -  BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '010904', 'description'=>'MEMBERSHIP FI - REVERSAL PAYMENT',      'description_malay'=>'FI KEAHLIAN - PEMBATALAN BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '011004', 'description'=>'MEMBERSHIP FI - REFUND PAYMENT',        'description_malay'=>'FI KEAHLIAN - PULANGAN BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020001', 'description'=>'CONTRIBUTION -  SYSTEM ADJUSTMENT',     'description_malay'=>'YURAN -  PELARASAN SISTEM'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020002', 'description'=>'CONTRIBUTION -  OPENING BALANCE',       'description_malay'=>'YURAN -  BAKI MULA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020003', 'description'=>'CONTRIBUTION -  FIRST PAYMENT',         'description_malay'=>'YURAN -  BAYARAN PERTAMA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020004', 'description'=>'CONTRIBUTION -  PAYMENT',               'description_malay'=>'YURAN -  BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020006', 'description'=>'CONTRIBUTION -  DIVIDEND',              'description_malay'=>'YURAN -  DIVIDEN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020007', 'description'=>'CONTRIBUTION -  WITHDRAW',              'description_malay'=>'YURAN -  KELUARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020200', 'description'=>'CONTRIBUTION - CONTRA ',                'description_malay'=>'YURAN - KONTRA '],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020903', 'description'=>'CONTRIBUTION - REVERSAL FIRST PAYMENT', 'description_malay'=>'YURAN - PEMBATALAN BAYARAN PERTAMA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020904', 'description'=>'CONTRIBUTION - REVERSAL PAYMENT',       'description_malay'=>'YURAN - PEMBATALAN BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020906', 'description'=>'CONTRIBUTION - REVERSAL DIVIDEND',      'description_malay'=>'YURAN - PEMBATALAN DIVIDEN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '020907', 'description'=>'CONTRIBUTION - REVERSAL WITHDRAW',      'description_malay'=>'YURAN - PEMBATALAN KELUARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030001', 'description'=>'SHARE -  SYSTEM ADJUSTMENT',            'description_malay'=>'SAHAM -  PELARASAN SISTEM'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030002', 'description'=>'SHARE -  OPENING BALANCE',              'description_malay'=>'SAHAM -  BAKI MULA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030003', 'description'=>'SHARE -  FIRST PURCHASE',               'description_malay'=>'SAHAM -  BELIAN PERTAMA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030004', 'description'=>'SHARE -  PURCHASE',                     'description_malay'=>'SAHAM -  BELIAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030006', 'description'=>'SHARE -  DIVIDEND',                     'description_malay'=>'SAHAM -  DIVIDEN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030007', 'description'=>'SHARE -  SELLING',                      'description_malay'=>'SAHAM -  JUALAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030200', 'description'=>'SHARE - CONTRA ',                       'description_malay'=>'SAHAM - KONTRA '],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030903', 'description'=>'SHARE - REVERSAL FIRST PURCHASE',       'description_malay'=>'SAHAM - PEMBATALAN BELIAN PERTAMA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030904', 'description'=>'SHARE - REVERSAL PURCHASE',             'description_malay'=>'SAHAM - PEMBATALAN BELIAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030906', 'description'=>'SHARE - REVERSAL DIVIDEND',             'description_malay'=>'SAHAM - PEMBATALAN DIVIDEN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '030907', 'description'=>'SHARE - REVERSAL SELLING',              'description_malay'=>'SAHAM - PEMBATALAN JUALAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040001', 'description'=>'LOAN -  SYSTEM ADJUSTMENT',             'description_malay'=>'PEMBIAYAAN -  PELARASAN SISTEM'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040002', 'description'=>'LOAN -  OPENING BALANCE',               'description_malay'=>'PEMBIAYAAN -  BAKI MULA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040004', 'description'=>'LOAN -  PAYMENT',                       'description_malay'=>'PEMBIAYAAN -  BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040008', 'description'=>'LOAN -  DISBURSEMENT',                  'description_malay'=>'PEMBIAYAAN -  PEMBAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040104', 'description'=>'LOAN - EARLY SETTLEMENT PAYMENT',       'description_malay'=>'PEMBIAYAAN - PENYELESAIAN AWAL BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040200', 'description'=>'LOAN - CONTRA ',                        'description_malay'=>'PEMBIAYAAN - KONTRA '],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040404', 'description'=>'LOAN - FIRST GUARANTOR  PAYMENT',       'description_malay'=>'PEMBIAYAAN - PENJAMIN PERTAMA  BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040504', 'description'=>'LOAN - SECOND GUARANTOR PAYMENT',       'description_malay'=>'PEMBIAYAAN - PENJAMIN KEDUA BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040604', 'description'=>'LOAN - THRID GUARANTOR PAYMENT',        'description_malay'=>'PEMBIAYAAN - PENJAMIN KETIGA BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040704', 'description'=>'LOAN - FOURTH GUARANTOR PAYMENT',       'description_malay'=>'PEMBIAYAAN - PENJAMIN KEEMPAT BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040804', 'description'=>'LOAN - FIFTH GUARANTOR PAYMENT',        'description_malay'=>'PEMBIAYAAN - PENJAMIN KELIMA BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040900', 'description'=>'LOAN - REVERSAL ',                      'description_malay'=>'PEMBIAYAAN - PEMBATALAN BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '040904', 'description'=>'LOAN - REVERSAL PAYMENT',               'description_malay'=>'PEMBIAYAAN - PEMBATALAN BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '041000', 'description'=>'LOAN - REFUND ',                        'description_malay'=>'PEMBIAYAAN - PULANGAN BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '041004', 'description'=>'LOAN - REFUND PAYMENT',                 'description_malay'=>'PEMBIAYAAN - PULANGAN BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '050001', 'description'=>'INSURANCE -  SYSTEM ADJUSTMENT',        'description_malay'=>'INSURAN/TAKAFUL -  PELARASAN SISTEM'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '050002', 'description'=>'INSURANCE -  OPENING BALANCE',          'description_malay'=>'INSURAN/TAKAFUL -  BAKI MULA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '050004', 'description'=>'INSURANCE -  PAYMENT',                  'description_malay'=>'INSURAN/TAKAFUL -  BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '050304', 'description'=>'INSURANCE - LUMP SUM PAYMENT',          'description_malay'=>'INSURAN/TAKAFUL - LUMP SUM BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '050904', 'description'=>'INSURANCE - REVERSAL PAYMENT',          'description_malay'=>'INSURAN/TAKAFUL - PEMBATALAN BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '051004', 'description'=>'INSURANCE - REFUND PAYMENT',            'description_malay'=>'INSURAN/TAKAFUL - PULANGAN BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '060001', 'description'=>'VIRTUAL ACCOUNT -  SYSTEM ADJUSTMENT',  'description_malay'=>'VIRTUAL ACCOUNT -  PELARASAN SISTEM'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '060002', 'description'=>'VIRTUAL ACCOUNT -  OPENING BALANCE',    'description_malay'=>'VIRTUAL ACCOUNT -  BAKI MULA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '060007', 'description'=>'VIRTUAL ACCOUNT -  WITHDRAW',           'description_malay'=>'VIRTUAL ACCOUNT -  KELUARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '060009', 'description'=>'VIRTUAL ACCOUNT -  TOP UP',             'description_malay'=>'VIRTUAL ACCOUNT -  TAMBAH NILAI'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '060907', 'description'=>'VIRTUAL ACCOUNT - REVERSAL WITHDRAW',   'description_malay'=>'VIRTUAL ACCOUNT - PEMBATALAN KELUARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '060909', 'description'=>'VIRTUAL ACCOUNT - REVERSAL TOP UP',     'description_malay'=>'VIRTUAL ACCOUNT - PEMBATALAN TAMBAH NILAI'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '070001', 'description'=>'ZAKAT -  SYSTEM ADJUSTMENT',            'description_malay'=>'ZAKAT -  PELARASAN SISTEM'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '070002', 'description'=>'ZAKAT -  OPENING BALANCE',              'description_malay'=>'ZAKAT -  BAKI MULA'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '070004', 'description'=>'ZAKAT -  PAYMENT',                      'description_malay'=>'ZAKAT -  BAYARAN'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '070904', 'description'=>'ZAKAT - REVERSAL PAYMENT',              'description_malay'=>'ZAKAT - PEMBATALAN BAYARAN'],
        ]);

        DB::table('transaction_status')->insert([
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '0', 'description'=>'SUCCESS'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '1', 'description'=>'FAIL - TAC'],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'code' => '2', 'description'=>'FAIL - TIMEOUT'],
        ]);
        
        DB::table('nisab')->insert([
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2018', 'state_id' => '2',  'value' => 13758.95],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2018', 'state_id' => '3',  'value' => 14700],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2018', 'state_id' => '5',  'value' => 14726.35],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2018', 'state_id' => '6',  'value' => 20283.22],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2018', 'state_id' => '7',  'value' => 13685.15],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2018', 'state_id' => '8',  'value' => 14082.56],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2018', 'state_id' => '9',  'value' => 14700],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2018', 'state_id' => '10', 'value' => 14500],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2018', 'state_id' => '12', 'value' => 14162],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2019', 'state_id' => '1',  'value' => 14529.57],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2019', 'state_id' => '2',  'value' => 16524],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2019', 'state_id' => '3',  'value' => 13950],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2019', 'state_id' => '5',  'value' => 14139.36],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2019', 'state_id' => '6',  'value' => 21430.16],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2019', 'state_id' => '7',  'value' => 14257.52],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2019', 'state_id' => '8',  'value' => 14447.65],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2019', 'state_id' => '9',  'value' => 14000],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2019', 'state_id' => '10', 'value' => 14500],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2019', 'state_id' => '12', 'value' => 13950],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '1',  'value' => 22540.43],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '2',  'value' => 15767.73],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '3',  'value' => 15972.06],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '4',  'value' => 15767.73],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '5',  'value' => 14784.14],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '6',  'value' => 22540.43],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '7',  'value' => 21430.16],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '8',  'value' => 22540.43],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '9',  'value' => 15885],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '10', 'value' => 15800],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '11', 'value' => 20902.5],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '12', 'value' => 18510.72],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '13', 'value' => 18341.68],
            ['created_by' => '0', 'created_at' => date("Y-m-d h:i:sa"), 'year' => '2020', 'state_id' => '14', 'value' => 15762]
        ]);
    }
}
