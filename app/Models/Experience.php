<?php

namespace App\Models;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'org_name',
        'type',
        'desc',
        'start_date',
        'end_date',
        'link',
    ];

    public function Cv()
    {
        return $this->belongsTo(Cv::class);
    }
}
