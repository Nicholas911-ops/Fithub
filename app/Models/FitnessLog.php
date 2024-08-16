<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessLog extends Model
{
    use HasFactory;

    protected $table = 'fitness_log';

    protected $fillable = [
        'user_id',
        'date',
        'exercise',
        'duration',
        'calories_burned',
    ];

    // Optional: Define relationships if needed
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
