<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Team;
use App\Category;

class Competition extends Model
{
    protected $fillable = [
        'title', 'description', 'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
