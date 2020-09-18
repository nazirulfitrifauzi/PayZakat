<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':Attribute ini mesti diterima.',
    'active_url' => ':Attribute ini bukan URL yang sah.',
    'after' => ':Attribute ini mestilah tarikh selepas :date.',
    'after_or_equal' => ':Attribute ini mestilah tarikh selepas atau sama dengan :date.',
    'alpha' => ':Attribute ini hanya boleh mengandungi huruf.',
    'alpha_dash' => ':Attribute ini hanya boleh mengandungi huruf, nombor, garis tengah dan garis bawah.',
    'alpha_num' => ':Attribute ini hanya boleh mengandungi huruf dan nombor.',
    'array' => ':Attribute ini mestilah sebuah array.',
    'before' => ':Attribute ini mestilah tarikh sebelum :date.',
    'before_or_equal' => ':Attribute ini mestilah tarikh sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':Attribute ini mestilah antara :min dan :max.',
        'file' => ':Attribute ini mestilah antara :min dan :max kilobyte.',
        'string' => ':Attribute ini mestilah antara :min dan :max huruf.',
        'array' => ':Attribute ini mestilah antara :min dan :max barangan.',
    ],
    'boolean' => 'Medan :attribute mestilah benar atau palsu.',
    //'confirmed' => 'Pengesahan :attribute ini tidak sepadan.',//
    'confirmed' => 'Kata laluan tidak sepadan. Sila masukkan kata laluan yang sama.',
    'date' => ':Attribute ini bukan tarikh yang sah.',
    'date_equals' => ':Attribute ini mestilah tarikh yang sama dengan :date.',
    'date_format' => ':Attribute ini tidak sepadan dengan format :format.',
    'different' => ':Attribute ini dan :other mesti berbeza.',
    'digits' => ':Attribute ini mestilah dalam :digits digit.',
    'digits_between' => ':Attribute ini mestilah antara :min dan :max digit.',
    'dimensions' => ':Attribute ini mempunyai dimensi imej yang tidak sah.',
    'distinct' => 'Medan :attribute mempunyai nilai pendua.',
    'email' => ':Attribute ini mestilah alamat e-mel yang sah.',
    'ends_with' => ':Attribute ini mesti berakhir dengan salah satu daripada yang berikut :values.',
    'exists' => ':Attribute yang dipilih adalah tidak sah.',
    'file' => ':Attribute ini mestilah sebuah barangan.',
    'filled' => 'Medan :attribute ini mestilah mengandungi nilai.',
    'gt' => [
        'numeric' => ':Attribute ini mestilah lebih besar daripada :value.',
        'file' => ':Attribute ini lebih besar daripada :value kilobyte.',
        'string' => ':Attribute ini mestilah lebih besar daripada :value huruf.',
        'array' => ':Attribute ini mestilah menpunyai lebih banyak :value barangan.',
    ],
    'gte' => [
        'numeric' => ':Attribute ini mestilah lebih besar atau sama dengan :value.',
        'file' => ':Attribute ini mestilah lebih besar atau sama dengan :value kilobyte.',
        'string' => ':Attribute ini mestilah lebih besar atau sama dengan :value huruf.',
        'array' => ':Attribute ini mestilah menpunyai :value item atau lebih.',
    ],
    'image' => ':Attribute ini mestilah mengandungi imej .',
    'in' => ':Attribute yang dipilih adalah tidak sah.',
    'in_array' => 'Medan :attribute ini tidak wujud :other.',
    'integer' => ':Attribute ini mestilah mengandungi integer.',
    'ip' => ':Attribute ini mestilah sebuah alamat IP yang sah.',
    'ipv4' => ':Attribute ini mestilah sebuah alamat IPv4 yang sah.',
    'ipv6' => ':Attribute ini mestilah sebuah alamat IPv6 yang sah.',
    'json' => ':Attribute ini mestilah sebuah string JSON yang sah.',
    'lt' => [
        'numeric' => ':Attribute ini mestilah kurang daripada :value.',
        'file' => ':Attribute ini mestilah kurang daripada :value kilobyte.',
        'string' => ':Attribute ini mestilah kurang daripada :value huruf.',
        'array' => ':Attribute ini mestilah mempunyai kurang daripada :value barangan.',
    ],
    'lte' => [
        'numeric' => ':Attribute ini mestilah kurang atau sama dengan :value.',
        'file' => ':Attribute ini mestilah kurang atau sama dengan :value kilobyte.',
        'string' => ':Attribute ini mestilah kurang atau sama dengan :value huruf.',
        'array' => ':Attribute ini mestilah kurang atau sama dengan :value barangan.',
    ],
    'max' => [
        'numeric' => ':Attribute ini mungkin tidak lebih besar daripada :max.',
        'file' => ':Attribute ini mungkin tidak lebih besar daripada :max kilobyte.',
        'string' => ':Attribute ini mungkin tidak lebih besar daripada :max characters.',
        'array' => ':Attribute ini mungkin tidak lebih besar daripada :max barangan.',
    ],
    'mimes' => ':Attribute ini mestilah sebuah jenis barangan: :values.',
    'mimetypes' => ':Attribute ini mestilah sebuah jenis barangan: :values.',
    'min' => [
        'numeric' => ':Attribute ini mesti sekurang-kurangnya :min.',
        'file' => ':Attribute  ini mesti sekurang-kurangnya :min kilobyte.',
        'string' => ':Attribute  ini mesti sekurang-kurangnya :min huruf.',
        'array' => ':Attribute  ini mesti sekurang-kurangnya :min barangan.',
    ],
    'not_in' => ':Attribute yang dipilih adalah tidak sah.',
    'not_regex' => 'Format :attribute ini adalah tidak sah.',
    'numeric' => ':Attribute ini mestilah mengandungi nombor',
    'password' => 'Kata laluan tidak betul.',
    'present' => 'Medan :attribute ini mesti ada.',
    //'regex' => 'Format :attribute ini adalah tidak sah.',//
    'regex' => 'Kata laluan hendaklah tidak kurang dari 8 karektor dengan campuran huruf besar, kecil, nombor dan simbol.',
    'required' => 'Medan :attribute ini adalah diperlukan.',
    'required_if' => 'Medan :attribute ini adalah diperlukan apabila :other adalah :value.',
    'required_unless' => 'Medan :attribute ini adalah diperlukan melainkan jika :other adalah dalam :values.',
    'required_with' => 'Medan :attribute ini adalah diperlukan apabila :values hadir.',
    'required_with_all' => 'Medan :attribute ini adalah diperlukan apabila :values hadir.',
    'required_without' => 'Medan :attribute ini adalah diperlukan apabila :values tidak hadir.',
    'required_without_all' => 'Medan :attribute ini adalah diperlukan apabila tiada :values hadir.',
    'same' => ':Attribute ini dan :other mestilah sepadan.',
    'size' => [
        'numeric' => ':Attribute ini mestilah :size.',
        'file' => ':Attribute ini mestilah kilobyte :size.',
        'string' => ':Attribute ini mestilah huruf :size .',
        'array' => ':Attribute ini mestilah mengandungi :size barangan.',
    ],
    'starts_with' => ':Attribute ini mestilah mula dengan salah satu daripada berikut: :values.',
    'string' => ':Attribute ini mestilah sebuah string.',
    'timezone' => ':Attribute ini mestilah dalam zon yang sah.',
    'unique' => ':Attribute ini telah diambil.',
    'uploaded' => ':Attribute ini gagal untuk dimuat naik.',
    'url' => 'Format :attribute ini adalah tidak sah.',
    'uuid' => ':Attribute ini mestilah UUID yang sah.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        // 'custname' => [
        //     'required' => 'Sila isi :attribute anda.',
        //     'min'      => ':Attribute mestilah sekurang-kurangnya 5 aksara.',
        //     'max'      => ':Attribute tidak melebihi 255 aksara.',
        // ],
        // 'custic' => [
        //     'required' => 'Sila isi :attribute anda.',
        //     'min'      => ':Attribute mestilah sekurang-kurangnya 5 aksara.',
        //     'max'      => ':Attribute tidak melebihi 255 aksara.',
        // ],
        // 'address1' => [
        //     'required' => 'Sila isi :attribute.',
        // ],
        // 'address2' => [
        //     'required' => 'Sila isi :attribute.',
        // ],
        // 'poskod' => [
        //     'required' => 'Sila isi :attribute.',
        // ],
        // 'bandar' => [
        //     'required' => 'Sila isi :attribute.',
        // ],
        // 'negeri' => [
        //     'required' => 'Sila pilih :attribute.',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'Nama Penuh',
    ],

];
