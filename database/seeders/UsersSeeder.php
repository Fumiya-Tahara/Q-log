<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => '太郎',
            'email' => 'taro@s.kyushu-u.ac.jp',
            'password' => 'password',
        ]);

        User::create([
            'name' => '次郎',
            'email' => 'jiro@s.kyushu-u.ac.jp',
            'password' => 'password',
        ]);

        User::create([
            'name' => '三郎',
            'email' => 'saburo@s.kyushu-u.ac.jp',
            'password' => 'password',
        ]);
    }
}
