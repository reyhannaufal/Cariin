<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Competition extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
