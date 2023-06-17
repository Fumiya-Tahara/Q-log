<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = ['sentence', 'review','course_id', 'user_id'];

    // courseへのリレーション
    public function course() {
      return $this->belongsTo(Course::class);
  }
// userへのリレーション
  public function user() {
    return $this->belongsTo(User::class);
}



}

