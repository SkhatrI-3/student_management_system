<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Submission extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'file', 'date', 'user_id', 'teacher_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
   public function teacher(){
    return $this->belongsTo(Teacher::class, 'teacher_id');

   }

}