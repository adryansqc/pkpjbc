<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $configs = [
            [
                'name' => 'Nama Aplikasi',
                'key' => 'app_name',
                'value' => 'pkpjbc',
                'type' => 'text'
            ],
            [
                'name' => 'Alamat',
                'key' => 'alamat',
                'value' => 'Jl. Kapt. A. Bakaruddin, Kelurahan Selamat, Kecamatan Danau Sipin, Kota Jambi, 36124',
                'type' => 'text'
            ],
            [
                'name' => 'Phone',
                'key' => 'phone',
                'value' => '62811710188',
                'type' => 'number'
            ],
            [
                'name' => 'Email',
                'key' => 'email',
                'value' => 'sales@pkpjbc.com',
                'type' => 'text'
            ],
            [
                'name' => 'Url Facebook',
                'key' => 'facebook',
                'value' => 'https://facebook.com',
                'type' => 'text'
            ],
            [
                'name' => 'Url Twitter',
                'key' => 'twitter',
                'value' => 'https://twitter.com',
                'type' => 'text'
            ],
            [
                'name' => 'Url Whatsapp',
                'key' => 'whatsapp',
                'value' => 'https://whatsapp.com',
                'type' => 'text'
            ],
        ];

        foreach ($configs as $config) {
            \App\Models\Config::updateOrCreate($config);
        }
    }
}
