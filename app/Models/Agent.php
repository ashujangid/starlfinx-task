<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model {

    protected $fillable = [
        'team_id',
        'name',
        'email',
        'phone',
        'description',
        'status',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
