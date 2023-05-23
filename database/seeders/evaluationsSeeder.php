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
        evaluation::create([
            'sentence' => 'aaaaa',
            'class_id' => '1',
            'user_id' => '1',
            'review' => '3'
        ]);

        evaluation::create([
            'sentence' => 'bbbbb',
            'class_id' => '1',
            'user_id' => '2',
            'review' => '1'
        ]);

        evaluation::create([
            'sentence' => 'ccccc',
            'class_id' => '2',
            'user_id' => '3',
            'review' => '4'
        ]);
    }
}
