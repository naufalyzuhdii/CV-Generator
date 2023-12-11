<?php

namespace App\Models;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_name',
        'type',
        'description',
        'skill_level',
    ];

    public function Cv()
    {
        return $this->belongsTo(Cv::class);
    }

}
