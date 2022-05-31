<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var     string[]
     */
    protected $fillable = [
        'title', 'places', 'start_at'
    ];

    /**
     * @var     string[]
     */
    protected $dates = ['start_at', 'created_at', 'updated_at'];

    /**
     * @return  string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * @return  HasMany
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
