<?php

namespace App\Models;

use App\Models\User;
use App\Models\Letter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lecturer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function letters()
    {
        return $this->belongsToMany(Letter::class, 'letter_lecturer', 'lecturer_id', 'letter_id');
    }
}
