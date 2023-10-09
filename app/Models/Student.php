<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function Register(): BelongsTo
    {
        return $this->belongsTo(Register::class);
    }


    public function Courses(): BelongsTo
    {
        return $this->belongsTo(Courses::class);
    }


    public function classroom(): BelongsTo
    {
        return $this->belongsTo(classroom::class);
    }

 }