<?php

namespace App\Models;

use App\Models\User;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'summary'
    ];

    public function Skills()
    {
        return $this->hasMany(Skill::class);
    }


    public function Experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
