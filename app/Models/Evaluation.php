<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = ['sentence', 'review'];

    // courseへのリレーション
    public function course() {
      return $this->belongsTo(Course::class);
  }
// userへのリレーション
  public function user() {
    return $this->belongsTo(User::class);
}

    // 投稿日時ごとに並び変えるための関数getAllOrderByUpdated_at()
  //   public static function getAllOrderByUpdated_at()
  // {
  //   return self::orderBy('created_at', 'desc')->get();
  // }
}

