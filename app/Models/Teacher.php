<?php

namespace App\Models;
use App\Policies\TeacherPolicy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable=['teacher_name','teacher_sub','teacher_image','class','section','user_id'];
    public function submission()
    {
        return $this->belongsTo(Teacher::class, 'submission_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // Teacher.php
    public function submissions(){
        return $this->hasMany(Submission::class,'teacher_id');
    }
    public function students()
{
    return $this->hasMany(Student::class);
}

protected $policy = TeacherPolicy::class;

    
}
