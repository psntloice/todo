<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//ADDED
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Todo extends Model
{
// ...ADDED

public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'completed',
    ];

    // ... rest of your model code
}