<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => '微分積分学Ⅰ',
            'lecture_code' => 22531016,
            'teacher' => '佐藤康彦',
            'average_review' => 1,
            'like_count' => 0, 
            'faculty' => '基幹教育', 
            'year' => 2022, 
            'term' => '前期', 
            
        ]);
        Course::create([
            'name' => '線形代数学Ⅰ',
            'lecture_code' => 22533219,
            'teacher' => '佐々野詠淑',
            'average_review' => 4,
            'like_count' => 0, 
            'faculty' => '基幹教育', 
            'year' => 2022, 
            'term' => '前期', 
            
        ]);
        Course::create([
            'name' => '力学基礎',
            'lecture_code' => 22533127,
            'teacher' => '坂東麻衣',
            'average_review' => 3,
            'like_count' => 0, 
            'faculty' => '基幹教育', 
            'year' => 2022, 
            'term' => '前期', 
            
        ]);
    }
}
