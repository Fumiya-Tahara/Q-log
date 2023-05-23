<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\course;


class coursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        course::create([
            'sentence' => 'aaaaa',
            'class_id' => '1',
            'user_id' => '1',
            'review' => '3'
        ]);

        course::create([
            'sentence' => 'bbbbb',
            'class_id' => '1',
            'user_id' => '2',
            'review' => '1'
        ]);

        course::create([
            'sentence' => 'ccccc',
            'class_id' => '2',
            'user_id' => '3',
            'review' => '4'
        ]);
    }
}
