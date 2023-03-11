<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evaluation;


class evaluationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evaluation::create([
            'sentence' => 'aaaaa',
            'class_id' => '1',
            'user_id' => '1',
            'review' => '3'
        ]);
    }
}
