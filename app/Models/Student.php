<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture',
        'enrollment_date',
        'status',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class)->withPivot('enrollment_date', 'completion_date', 'status');
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }
}
