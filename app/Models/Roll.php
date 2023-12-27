<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Roll extends Model
{
    use HasFactory;
    use HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description'
    ];

    /**
     * Get the comments of this roll.
     */
    public function comments(): MorphMany
    {
        return $this->morphMany(Roll::class, 'commentable');
    }

    /**
     * Get the user that owns the roll.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
