<?php

namespace App\Models;

use App\Policies\StudentPolicy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['std_name','std_roll','std_class','std_subject','std_section','user_id','student_id','teacher_id'];
    // Teacher.php
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    public function teacher()
{
    return $this->belongsTo(Teacher::class);
}

    protected $policy = StudentPolicy::class;

}
