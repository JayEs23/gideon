<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'email',
        'password',
        'profile_picture',
        'enrollment_date',
        'status',
    ];

    protected $casts = [
        'enrollment_date' => 'date',
    ];
    protected $dates = ['enrollment_date']; // Ensure Laravel treats this as a date

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student')
            ->withPivot('enrollment_date', 'completion_date', 'status')
            ->withTimestamps();
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

    // Accessor for the number of courses
    public function getCoursesCountAttribute()
    {
        return $this->courses()->count();
    }

    // Accessor for formatted enrollment date
    public function getFormattedEnrollmentDateAttribute()
    {
        return $this->enrollment_date ? $this->enrollment_date->format('d M, Y') : 'N/A';
    }
}
