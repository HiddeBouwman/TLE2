<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'question',
        'assignment'
    ];

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class)
            ->withPivot('date')
            ->withTimestamps();

    }

  public function answers()
  {
      return $this->hasMany(Answer::class);
  }
}


