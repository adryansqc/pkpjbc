<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'nama' => 'E1'
            ],
            [
                'nama' => 'E2'
            ],
            [
                'nama' => 'W1'
            ],
            [
                'nama' => 'W2'
            ],
            [
                'nama' => 'S'
            ],
        ];
        foreach ($types as $type) {
            \App\Models\Type::updateOrCreate($type);
        }
    }
}
