<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Team;
use App\Reply;

class Thread extends Model
{
    protected $fillable = [
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}