<?php

return [
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
        'judul' => [
            'required' => 'Judul tidak boleh kosong',
            'string' => 'Penulis harus berupa teks',
        ],
        'penulis' => [
            'required' => 'Penulis tidak boleh kosong',
            'string' => 'Penulis harus berupa teks'
        ],
        'harga' => [
            'required' => 'Harga tidak boleh kosong',
            'numeric' => 'Harga harus berupa angka',
        ],
        'tgl_terbit' => [
            'required' => 'Tanggal terbit tidak boleh kosong',
            'date' => 'Tanggal terbit harus berupa tanggal',
        ],
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

    'attributes' => [],

];
