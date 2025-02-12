<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalLevel extends Model
{
    /** @use HasFactory<\Database\Factories\EducationalLevelFactory> */
    use HasFactory;
    protected $fillable = [
        'title'
    ];

    public function schools()
    {
        return $this->hasMany(School::class);
    }
}
