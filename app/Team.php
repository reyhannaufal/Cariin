<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Competition;
use App\Thread;

class Team extends Model
{
    protected $fillable = [
        'title', 'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function competition()
    {
        return $this->belongsTo(competition::class);
    }

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }
}
