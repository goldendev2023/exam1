<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classroom extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;


    public function Courses(): HasMany // one to many
    {
        return $this->hasMany(Courses::class);
    }
}
