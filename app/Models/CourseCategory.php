<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function courses() {
        return $this->belongsToMany(Course::class, 'course_category_pivot', 'course_category_id', 'course_id');
    }
}
