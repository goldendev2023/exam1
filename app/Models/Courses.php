<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courses extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;


    public function Classroom(): HasMany // one to many
    {
        return $this->hasMany(Classroom::class);
    }


    /**
     * @return HasMany
     */
    public function Student(): HasMany // one to many
    {
        return $this->hasMany(Student::class);
    }
}




