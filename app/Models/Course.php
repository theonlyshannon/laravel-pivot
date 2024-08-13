<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description'
    ];

    public function categories() {
        return $this->belongsToMany(CourseCategory::class, 'course_category_pivot', 'course_id', 'course_category_id');
    }
}
