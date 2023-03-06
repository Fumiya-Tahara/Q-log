<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->('id');
            $table->string("name");
            $table->string("teacher");
            $table->int("average_review");
            $table->int("like_count");
            $table->string("faculty");
            $table->timestamps();
        });
    }
}
