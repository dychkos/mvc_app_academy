<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'day_id'];


    public function day(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Day::class);
    }
}
