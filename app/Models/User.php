<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'grade',
        'faculty_and_department',
        'free_text',
        'icon',
        'crop_x',
        'crop_y',
        'crop_width',
        'crop_height'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function favorite_courses()
    {
        return $this->belongsToMany(course::class, 'favorites', 'user_id', 'course_id');
    }
    public function is_favorite($courseId)
    {
        return $this->favorites()->where('course_id', $courseId)->exists();
    }
}
