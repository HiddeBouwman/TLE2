<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = [
        'description',
        'task_id',
        'image',
    ];

    public function explanation(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Explanation::class);
    }

    public function tasks(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Task::class);
    }


}
