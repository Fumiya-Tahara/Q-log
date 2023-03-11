<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::create([
            'name' => '微分積分学Ⅰ',
            'teacher' => '佐藤康彦',
            'average_review' => '1',
            'like_count' => '', 
            'faculty' => '基幹教育', 
            'year' => '2022', 
            'term' => '前期', 
            
        ]);
        Classes::create([
            'name' => '線形代数学Ⅰ',
            'teacher' => '佐々野詠淑',
            'average_review' => '4.3',
            'like_count' => '', 
            'faculty' => '基幹教育', 
            'year' => '2022', 
            'term' => '前期', 
            
        ]);
        Classes::create([
            'name' => '力学基礎',
            'teacher' => '坂東麻衣',
            'average_review' => '3.6',
            'like_count' => '', 
            'faculty' => '基幹教育', 
            'year' => '2022', 
            'term' => '前期', 
            
        ]);
    }
}
