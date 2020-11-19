<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competition;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }
}
