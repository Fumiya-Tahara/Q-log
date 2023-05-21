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
            'course_id' => '1',
            'user_id' => '1',
            'review' => '3'
        ]);

        Evaluation::create([
            'sentence' => 'bbbbb',
            'course_id' => '1',
            'user_id' => '2',
            'review' => '1'
        ]);

        Evaluation::create([
            'sentence' => 'ccccc',
            'course_id' => '2',
            'user_id' => '3',
            'review' => '4'
        ]);
    }
}
