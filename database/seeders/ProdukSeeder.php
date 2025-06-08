<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produks = [
            [
                'type_id' => 1,
                'foto' => null,
                'nama' => 'Ruko',
                'harga' => '20000000',
                'status' => 0,
                'keterangan' => 'Tempat Layak Huni',
                'unggulan' => 1,
            ],
            [
                'type_id' => 2,
                'foto' => null,
                'nama' => 'Ruko',
                'harga' => '20000000',
                'status' => 0,
                'keterangan' => 'Tempat Layak Huni',
                'unggulan' => 1,
            ],
            [
                'type_id' => 3,
                'foto' => null,
                'nama' => 'Ruko',
                'harga' => '20000000',
                'status' => 0,
                'keterangan' => 'Tempat Layak Huni',
                'unggulan' => 1,
            ],
            [
                'type_id' => 4,
                'foto' => null,
                'nama' => 'Ruko',
                'harga' => '20000000',
                'status' => 0,
                'keterangan' => 'Tempat Layak Huni',
                'unggulan' => 1,
            ],
        ];

        foreach ($produks as $produk) {
            \App\Models\Produk::updateOrCreate($produk);
        }
    }
}
