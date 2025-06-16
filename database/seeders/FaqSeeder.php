<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'pertanyaan' => 'Di JBC itu akan dibangun apa saja?',
                'jawaban' => 'Kawasan Pusat Bisnis dengan konsep superblock yang terdiri dari Mall, Hotel, Convention Center dan Ruko.',
            ],
            [
                'pertanyaan' => 'Kapan pembangunan mall akan selesai?',
                'jawaban' => 'Proses pembangunan Mall JBC sedang underconstruction yang akan di targetkan selesai pada akhir 2026!',
            ],
        ];
        foreach ($faqs as $faq) {
            \App\Models\Faq::create($faq);
        }
    }
}
