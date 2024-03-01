<?php

namespace App\Models;

use App\Models\Lecturer;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function lecturer()
    {
        return $this->belongsToMany(Lecturer::class, 'letter_lecturer', 'letter_id', 'lecturer_id');
    }
}
