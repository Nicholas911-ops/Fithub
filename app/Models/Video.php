<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'workout_videos';

    // Specify which columns can be mass-assigned
    protected $fillable = ['title', 'description', 'video_url'];
}

