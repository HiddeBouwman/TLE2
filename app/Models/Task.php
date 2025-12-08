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

  public function answers(): \Illuminate\Database\Eloquent\Relations\HasMany
  {
      return $this->hasMany(Answer::class);
  }

  public function facts(): \Illuminate\Database\Eloquent\Relations\HasMany
  {
      return$this->hasMany(Fact::class);
  }
}


