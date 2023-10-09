<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Register extends Model
{
    protected $guarded = ['id'];

    public $timestamps = false;


    /**
     * @return BelongsTo
     */
    public function Student(): BelongsTo // many to one
    {
        return $this->belongsTo(Student::class);
    }


    public function Course(): HasMany // one to many
    {
        return $this->hasMany(Course::class);
    }
}